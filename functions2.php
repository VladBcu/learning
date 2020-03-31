<?php


function welcome($name , $age) //adding variables for the function
{
	echo 'Welcome to the website'.$name.'. You are '.$age.' years old.<br>';
}

function add($var1 , $var2) 
{
	echo $var1+$var2;
}

echo welcome(' Vlad', '31'); //calling the funciton using 'echo'
add(10, 15); //calling the funciton only by its name

?>