<?php
//include "test.php";
function sum($k,$e,$m){
    $sum = $k+$e+$m;
    return $sum;
}
function grade($avg){
    if($avg>=90){
        $grade = "A";}
        else if($avg>=80){
        $grade = "B";}
        else if($avg>=70){
        $grade = "C";}
        else if($avg>=60){
        $grade = "D";}
        else{
        $grade = "F";}
        return $grade;
}
error_reporting(0);
$num= $_POST['num'];
$name= $_POST['sname'];
$kor= $_POST['kor'];
$eng= $_POST['eng'];
$math= $_POST['math'];

$sum = sum($kor, $eng, $math);
$avg = round(($sum/3.0),2);
$grade = grade($avg);

// if($avg>=90){
// $grade = "A";}
// else if($avg>=80){
// $grade = "B";}
// else if($avg>=70){
// $grade = "C";}
// else if($avg>=60){
// $grade = "D";}
// else{
// $grade = "F";}

echo "<div align=center><h1>성적프로그램></h1>";
echo "<table border=1 width=1000, height=100>";
echo "<tr><td>순번</td><td>이름</td><td>국어</td><td>영어</td><td>수학</td><td>합계</td><td>평균</td><td>학점</td></tr>";
echo "<tr><td>1</td><td>$name</td><td>$kor</td><td>$eng</td><td>$math</td><td>$sum</td><td>$avg</td><td>$grade</td></tr>";
echo "</table></div>";

?>

<h1>test</h1>
<?=$sum ?>