<?php

$sentence = 'I am enjoying PHP.';
$parts = explode('P' , $sentence);

print_r ($parts);
echo '<br>';
echo $parts[1];

?>