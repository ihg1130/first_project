<?php
session_start();

echo "μΈμ μμ<br>";

$_SESSION['userid'] = "lhg";
$_SESSION['pw'] = "123456";
$id = $_SESSION['userid'];
echo"$id<br>";
$pw = $_SESSION['pw'];
echo"$pw<br>";
?>