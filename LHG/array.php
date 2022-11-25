<?php       
$score = array(89,99,57,76,20);
$rank = array(1,1,1,1,1);
$temp = 0;
$sum=0;
echo "<table border=1 width=300 align=center>";
echo "<tr><td>번호</td><td>국어</td><td>석차</td></tr>";
for($i=0; $i<5; $i++){
    $temp = $i + 1;
    $sum = $sum + $score[$i];

    for($j=0; $j<5; $j++){
      if($score[$i] < $score[$j]){
       $rank[$i]++;
    }
}
    echo "<tr><td>$temp</td><td>$score[$i]</td><td>$rank[$i]</td></tr>";  
}
$avg = $sum / 5;
echo "<tr><td>합계</td><td>$sum</td><td>&nbsp</td></tr>";
echo "<tr><td>평균</td><td>$avg</td><td>&nbsp</td></tr></table>";
echo "<br>";

//정렬후

echo "<table border=1 width=300 align=center>";
echo "<tr><td>번호</td><td>국어</td><td>석차</td></tr>";
for($i=0; $i<5; $i++){
    $num = $i + 1;
    for($j = $i+1; $j<5; $j++){
       if($score[$i] < $score[$j]){
        $temp = $score[$i];
        $score[$i] = $score[$j];
        $score[$j] = $temp;
    }
    }
    echo "<tr><td>$num</td><td>$score[$i]</td><td>$num</td></tr>";
}

echo "<tr><td>합계</td><td>$sum</td><td>&nbsp</td></tr>";
echo "<tr><td>평균</td><td>$avg</td><td>&nbsp</td></tr></table>";
?>