<?php
$a = setcookie("userid", "lhg");
$b = setcookie("pw", "123456");

// $userid = $_COOKIE["userid"];
// $pw = $_COOKIE["pw"];

// echo "$userid &nbsp $pw<br>";

if(isset($_COOKIE["userid"]) &&isset($_COOKIE["pw"])){
 $userid = $_COOKIE["userid"];
 $pw = $_COOKIE["pw"];

 echo "$userid &nbsp $pw<br>";
}
else{
    echo "쿠키 생성 실패";
}
?>