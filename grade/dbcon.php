<?php
  $host = "localhost";
  $user = "root";
  $pw = "123456";
  
  $dbcon = new mysqli($host, $user, $pw);
  $dbcon->set_charset("utf8");

  $db_sel = mysqli_select_db($dbcon, "poly");

  if(mysqli_connect_errno()){
    echo "데이터베이스 접속실패";
    echo mysqli_connect_errno();
  }
  else{
    // echo "데이터베이스 접속성공<br>";
  }
//   mysqli_close($dbcon);




?>