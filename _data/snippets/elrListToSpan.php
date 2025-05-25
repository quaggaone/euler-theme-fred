id: 22
source: 1
name: elrListToSpan
description: 'Converts a comma-seperated list into span elements with the class passed in'
category: 'euler Theme'
properties: 'a:0:{}'

-----

if ($input == '') { return ''; } // In case the TV is empty
$tags = explode(',',$input); // Based on a delimiter of ", " this will split each one up in an array
foreach ($tags as $key => $value) { // Loop through the tags
    $output[] = '<span class="'.$options.'">'.$value.'</span>'; // Add it to an output array, with a link to resource 9 and the get parameter.
}
return implode('',$output); // Merge the output array and output