<?php
/**
 * English language file for struct plugin
 *
 * @author Andreas Gohr, Michael Große <dokuwiki@cosmocode.de>
 */


$lang['menu'] = 'Struct Schema Editor';
$lang['menu_assignments'] = 'Struct Schema Assignments';

$lang['headline'] = 'Structured Data';

$lang['edithl'] = 'Editing Schema <i>%s</i>';
$lang['create'] = 'Create new Schema';
$lang['schemaname'] = 'Schema Name:';
$lang['save'] = 'Save';
$lang['createhint'] = 'Please note: schemas can not be renamed later';
$lang['pagelabel'] = 'Page';
$lang['summary'] = 'Struct data changed';
$lang['export'] = 'Export Schema as JSON';
$lang['btn_export'] = 'Export';
$lang['import'] = 'Import a Schema from JSON';
$lang['btn_import'] = 'Import';
$lang['import_warning'] = 'Warning: this will overwrite already defined fields!';

$lang['del_confirm'] = 'Enter schema name to confirm deletion';
$lang['del_fail'] = 'Schema names did not match. Schema not deleted';
$lang['del_ok'] = 'Schema has been deleted';
$lang['btn_delete'] = 'Delete';

$lang['tab_edit'] = 'Edit Schema';
$lang['tab_export'] = 'Import/Export';
$lang['tab_delete'] = 'Delete';

$lang['editor_sort'] = 'Sort';
$lang['editor_label'] = 'Field Name';
$lang['editor_multi'] = 'Multi-Input?';
$lang['editor_conf'] = 'Configuration';
$lang['editor_type'] = 'Type';
$lang['editor_enabled'] = 'Enabled';

$lang['assign_add'] = 'Add';
$lang['assign_del'] = 'Delete';
$lang['assign_assign'] = 'Page/Namespace';
$lang['assign_tbl'] = 'Schema';

$lang['multi'] = 'Enter multiple values separated by commas.';
$lang['multidropdown'] = 'Hold CTRL or CMD to select multiple values.';
$lang['duplicate_label'] = "Label <code>%s</code> already exists in schema, second occurance was renamed it to <code>%s</code>.";

$lang['emptypage'] = 'Struct data has not been saved for an empty page';

$lang['validation_prefix'] = "Field [%s]: ";

$lang['Validation Exception Integer needed'] = 'only integers are allowed';
$lang['Validation Exception Integer min'] = 'has to be equal or greater than %d';
$lang['Validation Exception Integer max'] = 'has to be equal or less than %d';
$lang['Validation Exception User not found'] = 'has to be an existing user. User \'%s\' was not found.';
$lang['Validation Exception Media mime type'] = 'MIME type %s has to match the allowed set of %s';
$lang['Validation Exception Url invalid'] = '%s is not a valid URL';
$lang['Validation Exception Mail invalid'] = '%s is not a valid email address';
$lang['Validation Exception invalid date format'] = 'must be of format YYYY-MM-DD';

$lang['Exception noschemas'] = 'There have been no schemas given to load columns from';
$lang['Exception nocolname'] = 'No column name given';

$lang['sort']      = 'Sort by this column';
$lang['next']      = 'Next page';
$lang['prev']      = 'Previous page';

$lang['none']      = 'Nothing found';

$lang['tablefilteredby'] = 'Filtered by %s';
$lang['tableresetfilter'] = 'Show all (remove filter/sort)';

$lang['Exception schema missing'] = "Schema %s does not exist!";

//Setup VIM: ex: et ts=4 :
