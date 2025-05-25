id: 21
source: 1
name: elrDynamicResourceListTv
category: 'euler Theme'
properties: 'a:0:{}'

-----

// copied from: https://sepiariver.com/modx/modx-quick-tip-dynamic-resource-list-tv/

$parentId = (int) $scriptProperties['parentId'];

// Retrieve the table prefix from the MODX configuration
$table_prefix = $modx->getOption('table_prefix', null, 'modx_');

if (!$parentId) return '';
$query = $modx->query("SELECT pagetitle, id FROM {$table_prefix}site_content WHERE parent = $parentId");
$results = $query->fetchAll(PDO::FETCH_ASSOC);
// I think there's some syntax to get SQL to return a formatted string without the following?
$list_options = array();
foreach($results as $result) {
    $list_options[] = $result['pagetitle'] . '==' . $result['id'];
}
$list_options = implode('||', $list_options);
return $list_options;