<form method="post">
    <p>
        <label>1. Enter number for increase for 30% and 120% then : </label>
        <input type="text" name="number1" pattern="^[ 0-9]+$" required/>
    </p>
    <p>
        <label>2. Enter number for replacing middle char to zero : </label>
        <input type="text" name="number2" pattern="^[ 0-9]+$" required/>
    </p>
    <p>
        <label>3. Enter two numbers to find squares sum : </label>
        <input type="text" name="number3_1" pattern="^[ 0-9]+$" required/>
        <input type="text" name="number3_2" pattern="^[ 0-9]+$" required/>
    </p>
    <p>
        <label>4. Enter number for view it in reverse order : </label>
        <input type="text" name="number4" pattern="^[ 0-9]+$" required/>
    </p>
    <p>
        <label>5. Enter three numbers for find average : </label>
        <input type="text" name="number5_1" pattern="^[ 0-9]+$" required/>
        <input type="text" name="number5_2" pattern="^[ 0-9]+$" required/>
        <input type="text" name="number5_3" pattern="^[ 0-9]+$" required/>
    </p>
    <input type="submit" />
</form>
<?php
if(!empty($_POST)){
    $num1 = $_POST['number1'];
    echo "1. Number : $num1. Increase for 30% : " . ($num1 *= 1.3) . ". Increase for 120% then : " . $num1 * 2.2 . ".<br>";
    $num2 = $_POST['number2'];
    $divisionRemainder1 = $num2 % 100;
    $divisionRemainder2 = $divisionRemainder1 % 10;
    $newNum2 = $num2 - ($divisionRemainder1 - $divisionRemainder2);
    echo "2. Number : $num2. New number : $newNum2 .<br>";
    $num3_1 = $_POST['number3_1'];
    $num3_2 = $_POST['number3_2'];
    echo "3. Numbers : $num3_1 , $num3_2 . Squares sum : " . ($num3_1 * $num3_1 + $num3_2 * $num3_2) . ".<br>";
    $num4 = $_POST['number4'];
    $num4_100 = $num4 - $num4 % 100;
    $num4_10 = $num4 - $num4_100 - $num4 % 10;
    $num4_1 = $num4 - $num4_100 - $num4_10;
    echo "4. Number : $num4. New number : " . ($num4_1 * 100 + $num4_10 + $num4_100 / 100) . ".<br>";
    $num5_1 = $_POST['number5_1'];
    $num5_2 = $_POST['number5_2'];
    $num5_3 = $_POST['number5_3'];
    echo "5. Numbers : $num5_1, $num5_2, $num5_3. Average : " . ($num5_1 + $num5_2 + $num5_3) / 3 . ".<br>";
}