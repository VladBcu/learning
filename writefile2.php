<?php

$file = "./lines.txt";
$write = "This is line two\n";

file_put_contents ($file, $write, FILE_APPEND); //the append adds to the existing file text

?>