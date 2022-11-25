<?php
include "dbcon.php";

$sql = "create table std_score(num int auto_increment primary key, name varchar(10),";
$sql = $sql."kor int(3), eng int(3), math int(3), sci int(3), com int(3), sum int(3), avg float);";

$result = mysqli_query($dbcon, $sql);

if($result){
    echo "테이블 성공<br>";
}
else{
    echo "테이블 실패<br>";
}
mysqli_close($dbcon);
?>