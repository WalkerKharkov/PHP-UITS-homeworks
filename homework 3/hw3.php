<?php
echo "task 1<br><br>";
$arr = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $item){
    echo "$item<br>";
}

echo "<br>task3<br><br>";
$result = 0;
$arr = array(26, 17, 136, 12, 79, 15);
foreach ($arr as $item){
    $result += $item * $item;
}
echo "result : $result<br>";

echo "<br>task4<br><br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "keys : <br>";
foreach ($arr as $key => $value){
    echo "$key<br>";
}
echo "<br>values : <br>";
foreach ($arr as $key => $value){
    echo "$value<br>";
}

echo "<br>task5<br><br>";
$arr = array("Kolya" => 200, "Vasya" => 300, "Petya" => 400);
foreach ($arr as $key => $value){
    echo "$key - salary is $$value<br>";
}

echo "<br>task6<br><br>";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$i = 0;
foreach ($arr as $key => $value){
    $en[$i] = $key;
    $ru[$i] = $value;
    $i++;
}
var_dump($en);
echo "<br>";
var_dump($ru);
echo "<br>";

echo "<br>task7<br><br>";
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $item){
    if ($item > 3 && $item < 10){
        echo "$item<br>";
    }
}

echo "<br>task8<br><br>";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = "-";
foreach ($arr as $item){
    $str .= $item . "-";
}
echo "string : $str<br>";

echo "<br>task9<br><br>";
$i = 1;
while ($i <= 100){
    echo "$i<br>";
    $i++;
}

echo "<br>task10<br><br>";
for ($i = 11; $i <= 33; $i++){
    echo "$i<br>";
}

echo "<br>task11<br><br>";
for ($i = 0; $i <= 100; $i++){
    if ($i % 2 == 0){
        echo "$i<br>";
    }
}

echo "<br>task12<br><br>";
$i = 1000;
$num = 0;
while ($i >+ 50){
    $i /= 2;
    $num++;
}
echo "result number is $i<br>";
echo "iterations : $num<br>";

echo "<br>task13<br><br>";
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $item){
    if ($item > 3 && $item < 10){
        echo "$item<br>";
    }
}

echo "<br>task14<br><br>";
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);
$exist = "no";
foreach ($arr as $item){
    foreach ($e as $compare){
        if ($item == $compare){
            $exist = "yes";
        }
    }
}
echo "$exist<br>";

echo "<br>task15<br><br>";
$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $item){
    $count++;
}
echo "array elements - $count<br>";

echo "<br>task16<br><br>";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
foreach ($arr as $item){
    echo "$item";
    if ($count < 2){
        echo ", ";
        $count++;
    }else{
        echo "<br>";
        $count = 0;
    }
}
echo "<br>";

echo "<br>task17<br><br>";
$month = "september";
$year = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
foreach ($year as $m){
    if ($m == $month){
        $m = "<strong>" . $m . "</strong>";
    }
    echo "$m<br>";
}

echo "<br>task18<br><br>";
$sat = "saturday";
$sun = "sunday";
$week = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
foreach ($week as $day){
    if ($day == $sat || $day == $sun){
        $day = "<strong>" . $day . "</strong>";
    }
    echo "$day<br>";
}

echo "<br>task19<br><br>";
$week = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday");
$currentDay = "friday";
foreach ($week as $day){
    if ($day == $currentDay){
        $day = "<i>" . $day . "</i>";
    }
    echo "$day<br>";
}

echo "<br>task20<br><br>";
for ($i = 1; $i <= 20; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "x";
    }
    echo "<br>";
}

echo "<br>task21<br><br>";
for ($i = 1; $i <= 9; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "$i";
    }
    echo "<br>";
}

echo "<br>task21<br><br>";
for ($i = 2; $i <= 10; $i += 2){
    for ($j = 1; $j <= $i; $j++){
        echo "x";
    }
    echo "<br>";
}