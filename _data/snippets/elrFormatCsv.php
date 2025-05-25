id: 24
source: 1
name: elrFormatCsv
category: 'euler Theme'
properties: 'a:0:{}'

-----

// Split the CSV list into an array
$items = explode(",", $input);

// Trim any extra whitespace from each item
$items = array_map('trim', $items);

// Join the items with ", "
$formattedList = implode(", ", $items);

return $formattedList;