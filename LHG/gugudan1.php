<?php
$num1 = $_POST['gugudan1'];
$num2 = $_POST['gugu1'];

for($j=$num1; $j<=$num2; $j++){
    for($i=1; $i<10; $i++){
        $result = $j * $i;
        echo "$j*$i = $result<br>";
    }
echo"<br>";
}




?>