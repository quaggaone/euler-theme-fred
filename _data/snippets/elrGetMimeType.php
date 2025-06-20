id: 28
source: 1
name: elrGetMimeType
category: 'euler Theme'
properties: 'a:0:{}'

-----

// get content type identifier
$contentType = $modx->getOption('contentType', $scriptProperties, 0);
//return $contentType;
// Check if the input is numeric

// Convert the input to an integer
$contentType = intval($contentType);
if (!is_numeric($contentType)) {
    return 'Please provide a valid number.';
}

// return gettype($contentType);
//$mimeType = $modx->getObject('modContentType', array('id' => $contentType));
$mimeType = $modx->getObject('modContentType', $contentType);

if ($mimeType) {
    return $mimeType->get('mime_type');
} else {
    return 'Content type not found.';
}