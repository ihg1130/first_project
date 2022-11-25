<?php
include "dbcon.php";

$num = $_GET['num'];

$sql = "delete from std_score where num=$num";
$result = mysqli_query($dbcon, $sql);

mysqli_close($dbcon); 

Header("Location:score_list.php");
?>