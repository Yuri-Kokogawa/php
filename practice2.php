
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
function total($arr){
    $result = 1;
    foreach($arr as $number ){
        $result *= $number;
    }
    return $result;
}
echo total(array(1, 3, 5 ,7, 9));

echo"\n";
//課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 
if($max_number < $a){
    $max_number = $a;
  }
 }
return $max_number;
}
echo max_array(array(1, 3, 5 ,7, 9));
echo"\n";