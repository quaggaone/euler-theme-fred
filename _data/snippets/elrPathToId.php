id: 27
source: 1
name: elrPathToId
description: 'takes in a file path and returns a kebab-case string'
category: 'euler Theme'
properties: 'a:0:{}'

-----

// initialize vars
$output = '';

// replace parameters
$search = ['/', '.'];
$replace = '-';

// do the replace
$output = str_replace($search, $replace, $input);

// return the string
return $output;