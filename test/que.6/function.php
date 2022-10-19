<?php
 //what is function ?
// function is block of code which is used many times in program 
// function is defined or predefined also


function a($no)
{
    $no=$no+5;
}
function b(&$no)
{
    $no=$no+6;
}
$num=10;
a($num);
echo "value is:".$num."<br>";


b($num);
echo "after add value is:".$num."<br>";
?>