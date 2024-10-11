<?php
$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ",";

}
echo "<br>";

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i++){
    echo $i *10 ;
    echo ",";

}

echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i 是質數<br>";
    }

}

echo $count;
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=4;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i 是質數<br>";
    }

}

?>

<h2>九九乘法表</h2>

<?php
echo "<table border=1";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "$j x $i = " .($j*$i);
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;

}
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align:center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:wite
}

</style>
<?php
echo "<table class='nine'";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }else if($j==0) {
        echo $i;
        }else if ($i==0){
        echo $j;
        }else {
        echo ($j*$i);
        }
        echo "</td>";
        }
    }
    echo "</tr>";

echo "</table>";

?>

<!-- table>tr*9>td*9 -->

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table>
    
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<?php
// 設定 HTML 表格的開頭
echo "<table border='1' cellpadding='5' cellspacing='0' style='text-align:center;'>";

// 輸出表格的標題
echo "<tr><th>*</th>";
for ($i = 1; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// 輸出乘法表內容
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; // 顯示行標題
    for ($j = 1; $j <= 9; $j++) {
        $result = $i * $j;
        echo "<td>$result</td>"; // 顯示乘法結果
    }
    echo "</tr>";
}

// 設定 HTML 表格的結尾
echo "</table>";
?>
