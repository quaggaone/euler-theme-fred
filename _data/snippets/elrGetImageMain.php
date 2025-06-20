id: 26
source: 1
name: elrGetImageMain
description: "determines the main images based the the given resources template\nreturns just the TVs name (not the entire MODX tag)"
category: 'euler Theme'
properties: 'a:0:{}'

-----

// initialize variables
$output = '';

// get current resources id as default value
$id = $modx->resource->get('id');

// create array to call the other snippet with
$options = array(
    'id' => $modx->getOption('id', $scriptProperties, $id),
    'property' => 'elrTemplateName'
);

// get current elrTemplateName by running the other snippet
$elrTemplateName = $modx->runSnippet('elrGetTemplateProperty', $options);

// return modx tv call for appropriate image field
switch ($elrTemplateName) {
  case 'teammember':
    $output = 'elr_team_image';
    break;
  case 'book':
    $output = 'elr_meta_book_cover';
    break;
  default:
    $output = 'elr_og_image';
}

return $output;