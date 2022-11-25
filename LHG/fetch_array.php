<?php
include "connect.php";

$sql = "select * from student;";
$result = mysqli_query($dbcon,$sql);

$count=1;

?>

<h2 align="center">fetch_array를 이용한 데이터 읽기</h2>
<table width="800" align="center" border="1" cellpadding="10">
    <tr align="center" bgcolor="#E5D85C">
        <td>번호</td>
        <td>이름</td>
        <td>나이</td>
        <td>성별</td>
        <td>전화</td>
        <td>주소</td></td>
   <!-- 디비 레코드 불러오기      -->
   <?php
while($row=mysqli_fetch_array($result)){
    echo("<tr>
    <td>$count</td> 
    <td>$row[name]</td>
    <td>$row[age]</td>
    <td>$row[sex]</td>
    <td>$row[phone]</td>
    <td>$row[address]</td></tr>
    ");
     $count++;
}
mysqli_close($dbcon);
 ?>
</table>