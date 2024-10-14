<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<h2>陣列宣告</h2>   

<tr>
<?php
$header=['','國文','英文','數學','地理','歷史'];
$judy=['judy',95,64,70,90,84];
$amo=['amo',88,78,54,81,71];
$john=['john',45,60,68,70,62];
$students=

foreach($judy as $value){
    echo "<td>{$value}</td>";

}
?>
</tr>
<tr>
    <?php
foreach($amo as $value){
    echo "<td>{$value}</td>";
}
?>
</tr>
<tr>
    <?php
foreach($students as $name => $students){
    echo "<tr>";
    echo "<td>";

}
    ?>

</body>
</html>