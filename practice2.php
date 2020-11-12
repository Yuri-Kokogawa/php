
<?php
//課題１
function sum($number){
    $result = 0;
    $result = $number * 2;
    return $result;
}
echo sum(10);


echo"\n";
//課題２
function f($a,$b){
    $result = 0;
    $result =$a + $b;
    return $result;
}
echo f(10,15);


echo"\n";
//課題３
function kk($arr){
    $result = 1;
    foreach ($arr as $a){
    $result *= $a;
}
echo $result;
}


echo"\n";
//課題４
function max_array($arr){
    $max_namber = $arr[0];
    foreach($arr as $a){
    if($max_nember < $a){
        $max_nember = $a;
      }
    }
    return $max_nember;
}
echo max_array(array(1,3,5,7,9));