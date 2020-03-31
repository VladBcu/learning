<?php

$username = $_POST['username']; //GET is visible to the broswer, POST makes the variable invisible to the browser
$password = $_POST['password'];

if ($username == 'Vlad' and $password == 'password1')
{
	echo 'Welcome to the secret website';
}
else
{
	echo ' User or pass wrong';
}
?>