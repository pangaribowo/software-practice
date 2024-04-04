<?php
    echo "<h2>Penggunaan for</h2><hr>";
    for ($i=1; $i<=7; $i++)
    {
        print ("<font size=$i> Informatika ITD Adisutjipto</font><br>");
    }
    echo "<hr><h2> Penggunaan while</h2>";
    $i=1;
    while($i<8){
        print("<font size=$i> Jujur, Tekun, Tulus, dan Disiplin </font><br>");
        $i++;
    }
    echo"<hr><h2>Penggunaan do...while</h2>";
    $i=1;
    do{
        print("<font size=$i>Aku Anak ITD Adisutjipto</font><br>");
    $i++;
    }while($i<8)
?>