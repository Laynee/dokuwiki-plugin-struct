<?php
namespace dokuwiki\plugin\struct\types;

use dokuwiki\plugin\struct\meta\ValidationException;

/**
 * Class Decimal
 *
 * A field accepting decimal numbers
 *
 * @package dokuwiki\plugin\struct\types
 */
class Decimal extends AbstractMultiBaseType {

    protected $config = array(
        'min' => '',
        'max' => '',
        'roundto' => '-1',
        'decpoint' => '.',
        'thousands' => "\xE2\x80\xAF", // narrow no-break space
        'trimzeros' => true,
        'prefix' => '',
        'postfix' => ''
    );

    /**
     * Output the stored data
     *
     * @param string|int $value the value stored in the database
     * @param \Doku_Renderer $R the renderer currently used to render the data
     * @param string $mode The mode the output is rendered in (eg. XHTML)
     * @return bool true if $mode could be satisfied
     */
    public function renderValue($value, \Doku_Renderer $R, $mode) {
        if($this->config['roundto'] == -1) {
            $value = $this->formatWithoutRounding(
                $value,
                $this->config['decpoint'],
                $this->config['thousands']
            );
        } else {
            $value = floatval($value);
            $value = number_format(
                $value,
                $this->config['roundto'],
                $this->config['decpoint'],
                $this->config['thousands']
            );
        }
        if($this->config['trimzeros'] && (strpos($value, $this->config['decpoint']) !== false)) {
            $value = rtrim($value, '0');
            $value = rtrim($value, $this->config['decpoint']);
        }

        $R->cdata($this->config['prefix'] . $value . $this->config['postfix']);
        return true;
    }

    /**
     * @param int|string $value
     * @return int|string
     * @throws ValidationException
     */
    public function validate($value) {
        $value = parent::validate($value);
        $value = str_replace(',', '.', $value); // we accept both

        if((string) $value != (string) floatval($value)) {
            throw new ValidationException('Decimal needed');
        }

        if($this->config['min'] !== '' && floatval($value) <= floatval($this->config['min'])) {
            throw new ValidationException('Decimal min', floatval($this->config['min']));
        }

        if($this->config['max'] !== '' && floatval($value) >= floatval($this->config['max'])) {
            throw new ValidationException('Decimal max', floatval($this->config['max']));
        }

        return $value;
    }

    /**
     * Works like number_format but keeps the decimals as is
     *
     * @link http://php.net/manual/en/function.number-format.php#91047
     * @author info at daniel-marschall dot de
     * @param float $number
     * @param string $dec_point
     * @param string $thousands_sep
     * @return string
     */
    function formatWithoutRounding($number, $dec_point, $thousands_sep) {
        $was_neg = $number < 0; // Because +0 == -0

        $tmp = explode('.', $number);
        $out = number_format(abs(floatval($tmp[0])), 0, $dec_point, $thousands_sep);
        if(isset($tmp[1])) $out .= $dec_point . $tmp[1];

        if($was_neg) $out = "-$out";

        return $out;
    }

}
