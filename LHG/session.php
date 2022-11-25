<?php
session_start();

echo "세션 시작<br>";

$_SESSION['userid'] = "lhg";
$_SESSION['pw'] = "123456";
$id = $_SESSION['userid'];
echo"$id<br>";
$pw = $_SESSION['pw'];
echo"$pw<br>";
?>