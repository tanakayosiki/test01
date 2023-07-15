<?php

function tri($width,$height){
    $total=($width*$height)/2;
    echo $total;
}
echo (tri(40,20));
echo'<br/>';
function sqa($width,$height){
    $total=$width*$height;
    echo $total;
}
echo (sqa(50,50));
echo '<br/>';
function tra($width1,$width2,$height){
    $total=($width1+$width2)*$height/2;
    echo $total;
}
echo (tra(10,40,20));