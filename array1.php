<?php

$names = array ('Vlad' , 'Lavi' , 'Mini'); //variable assigned as array
$ages = array ('Vlad'=>31, 'Lavi'=>29, 'Mini'=>6);

/* Don't forget numbering is from 0
Vlad = 0
Lavi = 1
Mini = 2
*/

echo $names [0] . '<br>';
echo $ages ['Vlad'].'<br>'; //you don't necessarily have to have space between all

echo $names[0] . ' is ' . $ages ['Vlad'] . ' years old.'.'<br>';

print_r ($ages); //used to display array

?>