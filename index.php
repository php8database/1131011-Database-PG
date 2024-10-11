<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devicee-width, initial-scale=1.0">
    <title>程式語言基礎</title>
</head>
<body style='text-align:center'>

<?php

define("PI",3.1415);

$price=100;
$name="Lu,Hui-Chun";
$total=(100*5)+(32/10*3);
$num=rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49);
echo $price,"<br>",$name,"<br>",$total,"<br>",$num;

$num=10000;
echo "<br>";
echo $num;

echo "<br>";
echo "圓周率是".PI;

/*
define("PI",0.6128);
echo "<br>";
echo "圓周率是".PI;
*/

/*
$a=10;
$b=20;
echo $a+$b;
*/

?>

<h1>練習</h1>
<pre>
例：
$a = 10; $b = 50;
交換後
$a = 50; $b = 10;
</pre>

<?php

$a=10;
$b=50;
$tmp=10;
$a=$b;
$b=$tmp;


echo $a,"<br>",$b;

?>

</body>
</html>