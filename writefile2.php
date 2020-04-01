<?php

$file = "./lines.txt"; //create the file
$write = "This is line two\n"; //text to be added

file_put_contents ($file, $write, FILE_APPEND); //the append adds to the existing file text

?>