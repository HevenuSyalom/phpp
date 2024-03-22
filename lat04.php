<?php 

    // OPERATOR INFORMATIKA

    $a = 5;
    $b = 2;

    $c = $a + $b;

    echo $c.'<br>';

    $c = $a - $b;
    echo $c.'<br>';

    $c = $a * $b;
    echo $c.'<br>';

    $c = $a / $b;
    echo floor($c).'<br>';

    $c = $a % $b;
    echo $c.'<BR>';

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c;

    // INCREMENT
    $a++;
    echo $a.'<br>';

    // OPERATOR STRING

    $kata = 'sura';
    $kota = 'baya';

    $hasil = $kata.$kota;

    $hasil .=' KOTA PAHLAWAN';
    echo $hasil;


?>