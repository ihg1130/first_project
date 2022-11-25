<?php
$Calc = $_POST['Cal'];
$num1 = $_POST["a"];
$num2 = $_POST["b"];


if($Calc=="+"){
    $result = $num1 + $num2;
}
else if($Calc=="-"){
    $result = $num1 - $num2;
}
else if($Calc=="*"){
    $result = $num1 * $num2;
}
else {
    $result = $num1 / $num2;
}
echo "계산결과 :",$result
?>