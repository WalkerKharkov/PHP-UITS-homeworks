<form method="post" action="hw2.php">
    <p>
        <label>1. Enter number. It will be increased for 100 or decreased for 30 : </label>
        <input type="text" name="number1"/>
    </p>
    <p>
        <label>2. Enter number. If it odd, it will be increased, else will be decreased: </label>
        <input type="text" name="number2"/>
    </p>
    <p>
        <label>3. Enter number. If it more than 50, it will be increased... : </label>
        <input type="text" name="number3"/>
    </p>
    <p>
        <label>4. Enter two numbers. Biggest from them will be shown : </label>
        <input type="text" name="number4_1"/>
        <input type="text" name="number4_2"/>
    </p>
    <p>
        <label>5. Enter two numbers for check, is there a difference between them is 100 : </label>
        <input type="text" name="number5_1"/>
        <input type="text" name="number5_2"/>
    </p>
    <p>
        <label>6. Enter two numbers for check, is there a difference between them is less than 20 : </label>
        <input type="text" name="number6_1"/>
        <input type="text" name="number6_2"/>
    </p>
    <p>
        <label>7. Enter number of month : </label>
        <input type="text" name="month"/>
    </p>
    <input type="submit" />
</form>
<?php
if(!empty($_POST)){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];
    $num4_1 = $_POST['number4_1'];
    $num4_2 = $_POST['number4_2'];
    $num5_1 = $_POST['number5_1'];
    $num5_2 = $_POST['number5_2'];
    $num6_1 = $_POST['number6_1'];
    $num6_2 = $_POST['number6_2'];
    $month = $_POST['month'];
    if ($num1 >= 10){
        echo "1. Number $num1 is more than 10. Result : " . ($num1 += 100) . ".<br>";
    }else{
        echo "1. Number $num1 is less than 10. Result : " . ($num1 -= 30) . ".<br>";
    }
    if ($num2 % 2 == 0){
        $parity = 'even';
        $result = $num2 / 2;
    }else{
        $parity = 'odd';
        $result = $num2 * 3;
    }
    echo "2. Number $num2 is $parity. Result : $result.<br>";
    if ($num3 >= 50){
        $result = pow($num3, 2);
    }elseif($num3 > 10 && $num3 < 30){
        $result = 0;
    }else{
        $result = 'error';
    }
    echo "3. Number $num3. Result : $result.<br>";
    if ($num4_1 > $num4_2){
        $result = $num4_1;
    }else{
        $result = $num4_2;
    }
    echo "4. Numbers $num4_1, $num4_2. Biggest is $result.<br>";
    $result = (abs($num5_1 - $num5_2) == 100) ? 'yes' : 'no';
    echo "5. Numbers $num5_1, $num5_2. Is the difference between them is 100? $result.<br>";
    $result = (abs($num6_1 - $num6_2) <= 20) ? 'yes' : 'no';
    echo "6. Numbers $num6_1, $num6_2. Is the difference between them is less than 20? $result.<br>";
    switch($month){
        case 12:
        case 1:
        case 2:
            $season = 'winter';
            break;
        case 3:
        case 4:
        case 5:
            $season = 'spring';
            break;
        case 6:
        case 7:
        case 8:
            $season = 'summer';
            break;
        case 9:
        case 10:
        case 11:
            $season = 'autumn';
            break;
        default:
            $season = 'error';
    }
    echo "7. Month № $month. Season is $season.";
}