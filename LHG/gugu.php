<?php
echo"<div align=center><h1>구구단</h1></div>";
echo"<table border=1 width=300 cellpadding=0 cellspacing=0 align=center>";
for($j=2; $j<10; $j+=3){
    for($i=1; $i<10; $i++){
    $sum = $j * $i;
    echo "<tr><td>$j * $i = $sum</td>";
    $sum = ($j+1) * $i;
    echo "<td>".($j+1)." * $i = $sum</td>";

    if($j==8){
        echo "<td>&nbsp</td></tr>";
    }
    else{
        $sum = ($j+2) * $i;
        echo "<td>".($j+2)." * $i = $sum</td></tr>";
    }
}
echo "<tr><td colspan=3>&nbsp</td></tr>";
    }
echo "</table>";

?>    