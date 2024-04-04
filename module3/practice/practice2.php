<?php
    $a=5;
    $b=10;

    echo "Contoh operator aritmatika untuk a=5 dan b=10 <br>";
    echo "Penjumlahan a+b = ".($a+$b)."<br>";
    echo "Pengurangan b-a = ".($b-$a)."<br>";
    echo "Perkalian a*b = ".($a*$b)."<br>";
    echo "Pembagian a/b = ".($a/$b)."<br>";
    echo "Modulus a%b = ".($a%$b)."<br>";
    echo "Exponensial a**b = ".($a**$b)."<br>";

    echo "<hr>Contoh operator Assignment untuk nilai awal x=8 <br>";
    $x=8;
    print("Nilai x= ".$x."<br>");
    print("Nilai x+=3 => ".($x+=3)."<br>");
    print("Nilai x-=3 => ".($x-=3)."<br>");
    print("Nilai x*=3 => ".($x*=3)."<br>");
    print("Nilai x/=3 => ".($x/=3)."<br>");
    print("Nilai x%=3 => ".($x%=3)."<br>");

    echo "<hr>Contoh operator comparison untuk a=5 dan b=10 <br>";
    echo "Equal a==b => ".($a==$b)."<br>";
    echo "not Equal a!=b => ".($a!=$b)."<br>";
    echo "Greater than a>b => ".($a>$b)."<br>";
    echo "Less than a< b => ".($a<$b)."<br>";
    echo "Greater than or Equal a>=b => ".($a>=$b)."<br>";
    echo "Less than a<=b => ".($a<=$b)."<br>";
?>
