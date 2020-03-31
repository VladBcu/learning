<?php

$var1 = 10;
$var2 = 15;
$sum = $var1 + $var2;

echo 'Math calculation<br>';
echo '--------------------<br>';
echo 'Addition<br>';
echo $sum . '<br>';

echo 'Subtraction<br>';
echo $var1 - $var2 . '<br>';

echo 'Multiplication<br>';
echo $var1 * $var2 . '<br>';

echo 'Division<br>';
echo $var1 / $var2 . '<br><br>';

echo 'Comparison<br>';
if ($var1 > $var2)
	echo 'No1 is greater than No2';
elseif ($var1 == $var2)
	echo 'No1 equal to No2';
else
	echo 'No1 is smaller than No2';


?>