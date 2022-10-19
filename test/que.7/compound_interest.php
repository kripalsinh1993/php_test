<?php

    $p=10000;
    $r=10;
    $n=3;

    $ci=$p*pow((1+$r/100),$n);

    echo "<h3 align='center'>Compound Interest is:".$ci."</h3>";

?>