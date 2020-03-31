<?php //reading a file using PHP

//header('Content-Type: text/plain'); //will display the text in raw format - not ideal tho

$file ="./docum.txt";
$document = file_get_contents($file);

//echo $document;

$lines = explode("\n",$document);

foreach ($lines as $newline)
{
	echo '<b>'.$newline.'</b>'.'<br>';
}
?>