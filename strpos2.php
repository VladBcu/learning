<?php //string position. find a position within a string

//best to test for email would be function REGEX

// = assign
// == compare
// === identical operator. if 2 values have are same value and data type

$sentence = 'This is tutorial number 21';
$needle = 'n'; //looking for 'n' in the above string

$search = strpos($sentence, $needle);

if ($search === FALSE)
{
	echo 'The string was not found';
}
else
{
	echo 'Position of the string is '.$search;
}

?>