<?php
echo "task 1<br>";
$sum = 0;
for ($i = 1; $i <= 1000; $i++){
    for ($j = 1; $j < $i; $j++){
        $sum += ($i % $j == 0) ? $j : 0;
    }
    if ($sum == $i){
        echo "Number $i is perfect! :)))<br>";
    }
    $sum = 0;
}

echo "<br>task 2<br>";
$arrayLength = 20;// you can change it
$arr = array();
function average($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    return (int)($sum / count($arr));
}
echo "random array is : ";
for ($i = 0; $i < $arrayLength; $i++){
    $arr[$i] = rand(1, 100);
    echo "$arr[$i] | ";
}
echo "<br>";
$average = average($arr);
echo "average is $average<br>";
for ($i = 0; $i < count($arr); $i++){
    if (abs(($arr[$i] - $average) / $average) > .5){
        echo "$arr[$i] is deviates from average more than 50%<br>";
    }
}

echo "<br>task 3<br>";
$length = 0;
$start = 0;
$finish = 0;
$buffer = 0;
echo "random array is : ";
for ($i = 0; $i < $arrayLength; $i++){
    $arr[$i] = rand(0, 1);
    echo "$i:$arr[$i] | ";
}
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] == 1){
        $buffer++;
    }elseif($buffer > $length){
        $length = $buffer;
        $finish = $i - 1;
        $start = $i - $length;
        $buffer = 0;
    }else{
        $buffer = 0;
    }
}
echo "<br>Maximum quantity of 1s is $length, from $start to $finish";