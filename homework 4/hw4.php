<form method="post">
    <label>Enter date (dd.mm.yyyy hh.mm) : </label>
    <input name="date" type="text" >
    <br>
    <label>Enter email : </label>
    <input name="email" type="text" required>
    <br>
    <input type="submit" value="ok">
    <br>
</form>
<?php
if (!empty($_POST)){
    $date = $_POST['date'];
    $email = $_POST['email'];
    //task 1
    $months = array("January" => "Января",
                     "February" => "Февраля",
                     "March" => "Марта",
                     "April" => "Апреля",
                     "May" => "Мая",
                     "June" => "Июня",
                     "July" => "Июля",
                     "August" => "Августа",
                     "September" => "Сентября",
                     "October" => "Октября",
                     "November" => "Ноября",
                     "December" => "Декабря");
    $holidays = array("01-01", "02-01", "07-01", "23-02", "08-03", "01-05", "02-05", "09-05", "23-08", "07-11");
    $timestamp = strtotime($date);
    if (!$timestamp){
        echo "Date is not valid!<br>";
    }else{
        $innerDate = getdate($timestamp);
        $day = $innerDate['mday'];
        $hours = $innerDate['hours'];
        $day += ($hours >= 20) ? 2 : 1;
        $deliveryTime = mktime($innerDate['hours'], $innerDate['minutes'], $innerDate['seconds'], $innerDate['mon'], $day, $innerDate['year']);
        $delivery = getdate($deliveryTime);
        $day = $delivery['mday'];
        $month = $delivery['mon'];
        $hours = $delivery['hours'];
        $minutes = $delivery['minutes'];
        $seconds = $delivery['seconds'];
        $year = $delivery['year'];
        $deliveryDay = date("d-m", $deliveryTime);
        while (in_array($deliveryDay, $holidays)){
            $deliveryTime = mktime($hours, $minutes, $seconds, $month, ++$day, $year);
            $delivery = getdate($deliveryTime);
            $deliveryDay = date("d-m", $deliveryTime);
        }
        foreach ($months as $key => $value){
            if ($delivery['month'] == $key){
                $delivery['month'] = $value;
                break;
            }
        }
        echo "Доставка будет " . $delivery['mday'] . " " . $delivery['month'] . "<br>";
    }
    //task 2
    $length = (strlen($email) > 8);
    $dogDot = ((strpos($email, '@') !== false) && ((strpos($email, '.') - strpos($email, '@')) >= 2));
    $domen = ((strrpos($email, 'ru') == (strlen($email) - 2)) || (strrpos($email, 'by') == (strlen($email) - 2)) ||
              (strrpos($email, 'com') == (strlen($email) - 3)) || (strrpos($email, 'net') == (strlen($email) - 3)));
    $underscore = (substr_count($email, '_') <= 1);
    $isValid = ($length && $dogDot && $domen && $underscore) ? "valid!" : "not valid!";
    echo "Email $email is $isValid";
}