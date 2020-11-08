<?php
//課題１
$name = "Kokogawa";

if($name == "Kokogawa"){
 echo "私はKokogawaです";
}else{
 echo"Kokogawaではありません";
}

echo"\n";

//課題２
$total = 0;

for($i = $total; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

echo"\n";

//課題３
$fruit = array("peach","grape","lemon","apple","melon");
foreach($fruit as $fruit){
    echo $fruit;
    echo"\n";
}

echo"\n";

//課題４
/* for文の始めの値を定義する 

/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if( ($i % 5 ) == 0){
    echo $i;
    echo"\n";
  }
}