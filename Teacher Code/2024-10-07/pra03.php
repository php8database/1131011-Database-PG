<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
</head>
<body>
 <?php
 echo "*";
 echo "<br>";
 echo "**";
 echo "<br>";
 echo "***";
 echo "<br>";
 echo "****";
 echo "<br>";
 echo "*****";
 echo "<br>";
 ?>
<hr>
<h2>直角三角形</h2>
 <?php 

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒直角三角形</h2>
 <?php 

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>