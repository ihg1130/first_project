<!-- 데이터베이스 넘기는 법 -->
<?php
$host = "localhost";
$user = "root";
$pw = "123456";
$dbname = "lim";
$dbcon = new mysqli($host, $user, $pw, $dbname);

if(mysqli_connect_errno()){
    echo "데이터베이스 접속실패";
    echo mysqli_connect_errno();
}
else{
    // echo "데이터베이스 접속성공<br>";
}
$db_sel = mysqli_select_db($dbcon, "lim");



if($db_sel){
    // echo "데이터베이스 : poly 선택 완료";
}
?>