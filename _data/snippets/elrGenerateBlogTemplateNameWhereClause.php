id: 25
source: 1
name: elrGenerateBlogTemplateNameWhereClause
description: "Check the resources Template Name and generate JSON-style where clause for pdoResources\nBased on selected Template Names (in FRED element settings)\nNecessary to \"fill in\" the template IDs dynamically and not hard coded to support different installs"
category: 'euler Theme'
properties: 'a:0:{}'

-----

// with help from le chat
// input properties
$templateBlog = (bool) $scriptProperties['templateBlog'];
$templateBook = (bool) $scriptProperties['templateBook'];
$templatePartner = (bool) $scriptProperties['templatePartner'];
$templateValuecard = (bool) $scriptProperties['templateValuecard'];

// get list of all available templates
$templates = $modx->getCollection('modTemplate');

// initialize array to hold selected templates
$selectedTemplates = array();

// check properties of every template if they contain one of the possible options (toggled blog types)
// if they do add them to the array
foreach ($templates as $template) {
    $templateName = $template->get('templatename');
    if (($templateBlog && $templateName == 'euler Blog') ||
        ($templateBook && $templateName == 'euler Book') ||
        ($templatePartner && $templateName == 'euler Partner') ||
        ($templateValuecard && $templateName == 'euler Value Card')) {
        $selectedTemplates[] = $template->get('id');
    }
}

// run loop over the array to build where clause
$whereClause = '';

if (!empty($selectedTemplates)) {
    $conditions = array();
    foreach ($selectedTemplates as $index => $id) {
        if ($index == 0) {
            $conditions[] = "{\"template:=\"" . ":\"" . $id . "\"}";
        } else {
            $conditions[] = "{\"OR:template:=\"" . ":\"" . $id . "\"}";
        }
    }
    $whereClause = "[" . implode(",", $conditions) . "]";
}

// Output the WHERE clause
return $whereClause;