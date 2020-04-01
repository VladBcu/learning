<?php

$names = ['Vlad' , 'Lavi' , 'Mini']; //variable assigned as array
$ages = ['Vlad'=>31, 'Lavi'=>29, 'Mini'=>6];

/* Don't forget numbering is from 0
Vlad = 0
Lavi = 1
Mini = 2
*/

require 'index.view.php';

echo $names [0] . '<br>';
echo $ages ['Vlad'].'<br>'; //This will echo the corresponding value for the certain identifyier


echo $names[0].' is '.$ages['Vlad'].' years old.'.'<br>';

print_r ($ages); //used to display the whole array



?>