<?php
include "grade_function.php";
include "dbcon.php";

error_reporting(0);
$mode = $_GET['mode'];
$name = $_POST['name'];
$kor = $_POST['kor'];
$eng = $_POST['eng'];
$math = $_POST['math'];
$sci = $_POST['sci'];
$com = $_POST['com'];

if($mode == "insert"){
$sum = $kor + $eng + $math + $sci + $com;
$avg = round(($sum/5), 2); 
$grade = grade($avg);

$sql ="insert into std_score(name, kor, eng, math, sci, com, sum, avg, grade)";
$sql =$sql." values('$name', '$kor', '$eng', '$math', '$sci', '$com', '$sum', '$avg', '$grade');";

$result = mysqli_query($dbcon, $sql);

}
?>


<h2>성적 입력하기</h2>
<form action="score_list.php?mode=insert" method="post">
<table width ="900" border="1" cellpadding="5">
    <tr><td>이름 : <input type="text" size="5" name="name">&nbsp
국어 : <input type="text" size="5" name="kor">&nbsp
영어 : <input type="text" size="5" name="eng">&nbsp
수학 : <input type="text" size="5" name="math">&nbsp
과학 : <input type="text" size="5" name="sci">&nbsp
컴퓨터 : <input type="text" size="5" name="com">&nbsp
</td>
<td><input type="submit" value="성적입력"></td></tr>
</table>
</form>



<p>
    <h3>성적 출력하기 </h3>
    <p>
        <a href="score_list.php?mode=big">[성적순 정렬]</a>
        <a href="score_list.php?mode=small">[성적역순 정렬]</a>
    <table width="900" border="1" cellpadding="5">
<tr align="center" bgcolor="yellow">
    <td>번호</td>
    <td>이름</td>
    <td>국어</td>
    <td>영어</td>
    <td>수학</td>
    <td>과학</td>
    <td>컴퓨터</td>
    <td>합계</td>
    <td>평균</td>
    <td>학점</td>
    <td>석차</td>
    <td>삭제</td>

</tr>
<?php
$count = 1;
if($mode == "big"){
    $sql = "select * from std_score order by sum desc;";
}
else if($mode == "small"){
    $sql = "select * from std_score order by sum;";
}
else{
    $sql = "select * from std_score;";
}
$num=0;
    $result = mysqli_query($dbcon, $sql);
    $count_rank = mysqli_num_rows($result);
    
 while($row = mysqli_fetch_array($result)){
    $num = $row['num'];
    echo "<tr align='center' bgcolor='pink'>
    <td>$count</td>
    <td>$row[name]</td>
    <td>$row[kor]</td>
    <td>$row[eng]</td>
    <td>$row[math]</td>
    <td>$row[sci]</td>
    <td>$row[com]</td>
    <td>$row[sum]</td>
    <td>$row[avg]</td>
    <td>$row[grade]</td>";
 
    if($mode == 'big'){
        echo "<td>$count</td>";
    }
    else if($mode == 'small'){
        echo "<td>$count_rank</td>";
        $count_rank--;
    }
    else{
        echo "<td>&nbsp</td>";
    }
    echo "<td><a href='score_delete.php?num=$num'>[삭제]</a></td>";
    echo "</tr>";
    $count++;
}
  mysqli_close($dbcon);  
?>
</table>