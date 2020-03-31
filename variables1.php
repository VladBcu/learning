<?php

//variables
$name = 'Vlad'; //single quote outputs the string
$age = 31;
$colour = 'Orange';
$link = 'Google';

//display text
echo "My name is $name and I am $age years old<br> I like $colour<br>"; //double quotes goes through the string for variables and takes longer to go through the string
echo 'My name is ' . $name . ' and I am learning PHP<br>'; //faster execution
echo '<a href="www.google.com">Google</a><br>';
echo 'Hello it\'s a nice day to code PHP'; //the \ is like an escape and continues the string

?>