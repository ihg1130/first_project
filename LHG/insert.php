<!-- DB로 회원가입 정보 넘기는법 -->
<?php
include "connect.php";
$sql ="insert into student(num, name, age, sex, phone, address)";
$sql = $sql."values('015', '김태이', 15, 0, '01012121234', '광주시')";

$result = mysqli_query($dbcon,$sql);
echo "$result";

mysqli_close($dbcon);
?>