<?php

$var1 = 0;
$names = array ('Vlad' , 'Lavi' , 'Mini');

/*while ($var1 <= 10) it is necessary to use {} below
{
	echo 'The number is ' . $var1 . '<br>';
	$var1++;
}
*/

//print_r ($names);

foreach ($names as $person) //for each of the names in the array have a new variable name associated to it
{
	echo 'The names is '.$person.'<br>';
}

?>