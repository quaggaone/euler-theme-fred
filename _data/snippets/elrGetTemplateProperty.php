id: 23
source: 1
name: elrGetTemplateProperty
category: 'euler Theme'
properties: 'a:0:{}'

-----

// with help from le chat
$resourceId = (int) $scriptProperties['id'];
$propertyName = (string) $scriptProperties['property'];

$resourceId = $resourceId > 0 ? $resourceId : $modx->getOption('site_start');

$resource = $modx->getObject('modResource', $resourceId);

$templateId = $resource->get('template');

// Fetch the template properties
$template = $modx->getObject('modTemplate', $templateId);
if ($template) {
    $properties = $template->getProperties();
    // Assuming you want to get a property named 'exampleProperty'
    $templateProperty = $properties[$propertyName];

    // Output the property value
    return $templateProperty;
}