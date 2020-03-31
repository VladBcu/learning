<?php

/* GET function is used to have dynamic inputs
for start, type ?name=Vlad after the website php address
*/

$name = $_GET['name']; //use [] to define
$age = $_GET['age'];

echo 'Welcome to the website '.$name.', you are '.$age.' years old.';

?>