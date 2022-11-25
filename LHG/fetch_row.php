<?php

include "connect.php";
//ip 알아낼수 있음
$ip = $_SERVER['REMOTE_ADDR'];
echo "ip : $ip";
$sql = "select * from student where address like '광%';";
$result = mysqli_query($dbcon,$sql);
// 필드개수를 얻어 오는 함수
$field = mysqli_num_fields($result);
// echo "$field";
$count=1;

 ?>
 <h2 align="center">fetch_row를 이용한 데이터 읽기</h2>
 <table width="800" align="center" border="1" cellpadding="10">
     <tr align="center" bgcolor="#CEFBC9">
         <td>번호</td>
         <td>학번</td>
         <td>이름</td>
         <td>나이</td>
         <td>성별</td>
         <td>전화</td>
         <td>주소</td></tr>

   <!-- 디비 레코드 불러오기      -->

   <?php
while($row=mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>$count</td>";
    for($i=0; $i<$field; $i++){
        echo"<td> $row[$i] </td>";
    }
    echo"</tr>";
    $count++;
}
mysqli_close($dbcon);
?>
</table>