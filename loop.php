<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>for loop</h1>

<?php

// for($i=0 ; $i<10 ; $i++){
//     echo $i*10;
//     echo "<br>";
// }

// for($i=10 ; $i>0 ; $i--){
//     echo $i*10;
//     echo "<br>";
// }
// echo $i;

// for($i=0 ; $i<10 ; $i=$i+2){
//     echo $i*10;
//     echo "<br>";
// }
// echo $i;

// for($i=0 ; $i<5 ; $i++){
//     echo (2*$i+1)*10;
//     echo "<br>";
// }
// echo $i;

?>

<h1>while</h1>

<?php

$score=30;
$conunter=0;
while($score<60){
    $score=$score+10;
    $conunter;
}

echo $score;
echo "<br>";
echo $conunter;

?>

<h1>陣列</h1>

<div> ['a','b','good','sad','john',123,999] </div>

<?php

$a=['a','b','good','sad','john',123,999];

/*echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>"; */

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}

$b=['姓名'=>"Hui-Chun",'數學'=>90,'國文'=>80,'英文'=>20];
// 獲取陣列的鍵
/*
$keys=array_keys($a);

// 使用 for 迴圈遍歷鍵
for($i=0;$i<count($keys);$i++){
   $key=$keys[$i];
   $value=$a[$key];
    echo $key . ': ' . $value . '<br>';
}*/  

foreach ($b as $value) {
    echo $value . '<br>';
}
 

?>
  
<p>&nbsp;</p>

</body>
</html>