<html> //example of building a simple calculator only add function
<body>

<form action="add2.php" method="get">

<input type="number" size="5" name="num1"> +
<input type="number" size="5" name="num2">
<input type="submit" value="add">

</form>

<?php

if (isset($_GET['num1']) and isset($_GET['num2']))
{

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$total = $num1 + $num2;

echo 'The total is '.$total;
}

?>

</body>
</html>