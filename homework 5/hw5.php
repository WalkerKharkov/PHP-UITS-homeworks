<?php
//task 1
echo '<br>task 1<br>';
$num1 = 4;
function get_sqrt($var){
    if ( ! is_numeric( $var ) ){
        return false;
    }
    return sqrt($var);
}
echo "square root of $num1  is " . get_sqrt($num1) . "<br>";

//task 3
echo '<br>task 3<br>';
$num1 = 15;
$num2 = 5;
$num3 = 2;
function result($var1, $var2, $var3){
    if ( ! is_numeric( $var1 ) || ! is_numeric( $var2 ) || ! is_numeric( $var3 ) ){
        return false;
    }
    return ($var1 - $var2) / $var3;
}
echo "($num1 - $num2) / $num3 = " . result($num1, $num2, $num3) . "<br>";

//task 4
echo '<br>task 4<br>';
$num1 = 25;
$num2 = 07;
$num3 = 1976;
function year($var1, $var2, $var3){
    if ( ! is_numeric( $var1 ) || ! is_numeric( $var2 ) || ! is_numeric( $var3 ) ){
        return false;
    }
    return $var1 . "-" . $var2 . "-" . $var3;
}
echo "date is " . year($num1, $num2, $num3) . "<br>";

//task 5
echo '<br>task 5<br>';
$num1 = 5;
function cube($var = 3){
    if ( ! is_numeric( $var ) ){
        return false;
    }
    return $var * $var * $var;
}
echo "cube of $num1 is " . cube($num1) . "<br>";
echo "cube of ... is " . cube() . "<br>";

//task 6
echo '<br>task 6<br>';
$cnt = 0;
function counter(){
    global $cnt;
    $cnt++;
    echo "function counter is called $cnt times<br>";
}
counter();
counter();
counter();
counter();

//task 7
echo '<br>task 7<br>';
$path = 'http://www.filatovalex.com/img/me.jpg';
function get_img($path){
    return "<img src=\"$path\" />";
}
echo get_img($path) . "<br>";

//task 8
echo '<br>task 8<br>';
$path = "http://www.filatovalex.com/css/style.css";
function include_style($path){
    return "link rel=\"stylesheet\" type=\"text/css\" src=\"$path\""; //специально опустил скобки, чтобы тег не работал
}
echo "<code>" . include_style($path) . "</code><br>";

//task 9
echo '<br>task 9<br>';
$string = "Выходила на берег Катюша";
function str_reform($string, $n, $dots = true){
    if (strcmp($string, '') === 0 || empty($n) || ! is_numeric($n)){
        return "invalid arguments";
    }
    return ($dots) ? iconv_substr($string, 0, $n, 'UTF-8') . "..." : iconv_substr($string, 0, $n, 'UTF-8');
}

echo str_reform($string, 5, true) . "<br>";
echo str_reform($string, 2) . "<br>";
echo str_reform('', 5, true) . "<br>";
echo str_reform($string, 'kjhjkh', 'jkj') . "<br>";
echo str_reform($string, 5, false) . "<br>";

//task 10
//перевод с транслита на русский работает несколько коряво, но чтобы работал четко, надо писать ууууумный парсер :)
echo '<br>task 10<br>';
$string = "И снова седая ночь";
function to_translit($string){
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У',
                'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з',
                'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U',
                'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh',
                'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y',
                'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $string);
}
function from_translit($string){
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У',
                'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з',
                'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U',
                'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh',
                'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y',
                'y', 'e', 'yu', 'ya');
    return str_replace($lat, $rus, $string);
}

/*    на всякий случай. так экономнее
function translitter($string, $mode){
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У',
        'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з',
        'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U',
        'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh',
        'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y',
        'y', 'e', 'yu', 'ya');
    switch ($mode){
        case 'to':
            return str_replace($rus, $lat, $string);
        case 'from':
            return str_replace($lat, $rus, $string);
        default:
            return false;
    }
}
*/

$translit = to_translit($string);
echo "string to translit : $translit<br>";
echo "string from translit : " . from_translit($translit) . "<br>";

//task 11
echo '<br>task 11<br>';
function multiplier($num, $string1, $string234, $string_more_than4){
    $lastnum = substr($num, strlen($num) - 1, 1);
    if ( ! is_numeric($lastnum)){
        return false;
    }
    $result = $num . " ";
    switch ($lastnum){
        case 1:
            $str =  $string1;
            break;
        case 2:
        case 3:
        case 4:
            $str =  $string234;
            break;
        default:
            $str = $string_more_than4;
    }
    return $result . $str . "<br>";
}
echo multiplier(1, "яблоко", "яблока", "яблок");
echo multiplier(2, "яблоко", "яблока", "яблок");
echo multiplier(3, "яблоко", "яблока", "яблок");
echo multiplier(4, "яблоко", "яблока", "яблок");
echo multiplier(5, "яблоко", "яблока", "яблок");
echo multiplier(153, "яблоко", "яблока", "яблок");
echo multiplier("Ноль", "яблоко", "яблока", "яблок");

//task 12
echo '<br>task 12<br>';
function params_to_date($day, $month, $year, $format){
    $timestamp = mktime(0, 0, 0, $month, $day, $year);
    return date($format, $timestamp);
}
echo params_to_date("25", "07", "1976", "d.m.Y") . "<br>";
echo params_to_date("30", "09", "2016", "d-m-Y") . "<br>";
echo params_to_date("01", "01", "1970", "Y-m-d") . "<br>";

//task 13
echo '<br>task 13<br>';
function sql_to_date($sqlDate, $format){
    $params = explode('-', $sqlDate);
    return params_to_date($params[2], $params[1], $params[0], $format);
}
echo sql_to_date("2013-01-31", "d.m.Y") . "<br>";
echo sql_to_date("2013-01-31", "d-m-Y") . "<br>";
echo sql_to_date("2013-01-31", "Y-m-d") . "<br>";

//task 14
echo '<br>task 14<br>';
function get_separator($date){
    $i = 0;
    do{
        $separator = $date[$i];
        $i++;
    }while(is_numeric($separator));
    return $separator;
}
function date_to_sql($date){
    $separator = get_separator($date);
    $params = explode($separator, $date);
    return $params[0] . '-' . $params[1] . '-' . $params[2];
}
echo date_to_sql("31.01.2001") . '<br>';
echo date_to_sql("11-02-2011") . '<br>';
echo date_to_sql("18.01.2012") . '<br>';

//task 15
echo '<br>task 15<br>';
function days_number($month, $year){
    return date('t', mktime(0, 0, 0, $month, 1, $year));
}
echo "month 2 at 2012 year contains " . days_number(2, 2012) . " days<br>";
echo "month 12 at 2016 year contains " . days_number(12, 2016) . " days<br>";
echo "month 2 at 2013 year contains " . days_number(2, 2013) . " days<br>";

//task 16
echo '<br>task 16<br>';
function get_holiday($day, $month){
    $date = date('d.m', mktime(0, 0, 0, $month, $day, 2016));
    $holidays = array('01.01' => 'New Year', '06.01' => 'Christmas', '19.01' => 'Epiphany', '23.02' => 'Soviet Warrior Day',
                        '08.03' => 'Woomens Day', '01.05' => 'First May', '09.05' => 'Great Victory Day', '25.07' => 'My Birthday',
                        '23.08' => 'Kharkov Liberation', '07.11' => 'October Revolution Day');
    foreach ($holidays as $key => $value){
        if ($key == $date){
            return $value;
        }
    }
    return "no holiday";
}
echo "Today, 01.01 is " . get_holiday(1, 1) . "<br>";
echo "Today, 25.07 is " . get_holiday(25, 7) . "<br>";
echo "Today, 30.09 is " . get_holiday(30, 9) . "<br>";

//task 17
echo '<br>task 17<br>';
function get_difference($firstDate, $secondDate){//format hh-ii-ss-dd-mm-yyyy
    $firstSeparator = get_separator($firstDate);
    $secondSeparator = get_separator($secondDate);
    $firstDate = explode($firstSeparator, $firstDate);
    $secondDate = explode($secondSeparator, $secondDate);
    $differenceTime = mktime($firstDate[0], $firstDate[1], $firstDate[2], $firstDate[4], $firstDate[3], $firstDate[5]) -
                  mktime($secondDate[0], $secondDate[1], $secondDate[2], $secondDate[4], $secondDate[3], $secondDate[5]);
    $difference = array();
    $difference['y'] = intdiv($differenceTime, 31536000);
    $differenceTime -= $difference['y'] * 31536000;
    $difference['m'] = intdiv($differenceTime, 2592000);
    $differenceTime -= $difference['m'] * 2592000;
    $difference['d'] = intdiv($differenceTime, 86400);
    $differenceTime -= $difference['d'] * 86400;
    $difference['h'] = intdiv ($differenceTime, 3600);
    $differenceTime -= $difference['h'] * 3600;
    $difference['i'] = intdiv($differenceTime, 60);
    $differenceTime -= $difference['i'] * 60;
    $difference['s'] = $differenceTime;
    return $difference;
}
$dif = get_difference('12.00.00.02.01.2016', '12.00.00.01.01.2016');
echo "difference between 12.00.00.01.01.2016 and 12.00.00.02.01.2016 is " . $dif['y'] . " years, " . $dif['m'] .
     " months, " . $dif['d'] . " days, " . $dif['h'] . " hours, " . $dif['i'] . " minutes, " . $dif['s'] . " seconds<br>";
$dif = get_difference('01.00.00.01.01.2016', '01.00.00.01.01.1970');// вот здесь, ггг, как раз 11 лишних дней набежало, по кол-ву высокосных лет))))
echo "difference between 01.00.00.01.01.1970 and 01.00.00.01.01.2016 is " . $dif['y'] . " years, " . $dif['m'] .
     " months, " . $dif['d'] . " days, " . $dif['h'] . " hours, " . $dif['i'] . " minutes, " . $dif['s'] . " seconds<br>";
$dif = get_difference('22.00.00.30.09.2016', '00.00.00.01.01.2016');// а тут 4 дня. все из-за 30 дней в месяце
echo "difference between 00.00.00.01.01.2016 and 22.00.00.30.09.2016 is " . $dif['y'] . " years, " . $dif['m'] .
     " months, " . $dif['d'] . " days, " . $dif['h'] . " hours, " . $dif['i'] . " minutes, " . $dif['s'] . " seconds<br>";

//task 18
echo '<br>task 18<br>';
function get_month($month){
    if ( ! is_numeric($month) || ($month = round($month)) < 1 || $month > 12){
        return "invalid month number";
    }
    $month = date('F', mktime(0, 0, 0, $month, 1 , 2016));
    $months = array('January' => 'январь', 'February' => 'февраль', 'March' => 'март', 'April' => 'апрель', 'May' => 'май',
                    'June' => 'июнь', 'July' => 'июль', 'August' => 'август', 'September' => 'сентябрь', 'October' => 'октябрь',
                    'November' => 'ноябрь', 'December' => 'декабрь');
    return $months[$month];
}
echo 'Month with number 1 is ' . get_month(1) . '<br>';
echo 'Month with number 5 is ' . get_month(5) . '<br>';
echo 'Month with number fff is ' . get_month('fff') . '<br>';
echo 'Month with number 2.3 is ' . get_month(2.3) . '<br>';
echo 'Month with number 23 is ' . get_month(23) . '<br>';

//task 19
echo '<br>task 19<br>';
function get_wday($day, $mode){
    $wday = 0;
    do{
        $wday++;
        $weekday = date($mode, mktime(0, 0, 0, 1, $wday, 2016));
    }while($weekday != $day);
    return $wday;
}
function get_weekday($day){
    if ( ! is_numeric($day) || ($day = round($day)) < 1 || $day > 7){
        return "invalid day number";
    }
    $wday = get_wday($day, 'N');
    $weekday = date('l', mktime(0, 0, 0, 1, $wday, 2016));
    $weekdays = array('Monday' => 'понедельник', 'Tuesday' => 'вторник', 'Wednesday' => 'среда', 'Thursday' => 'четверг',
                    'Friday' => 'пятница', 'Saturday' => 'суббота', 'Sunday' => 'воскресенье');
    return $weekdays[$weekday];
}
echo 'Day with number 1 is ' . get_weekday(1) . '<br>';
echo 'Day with number 5 is ' . get_weekday(5) . '<br>';
echo 'Day with number fff is ' . get_weekday('fff') . '<br>';
echo 'Day with number 2.3 is ' . get_weekday(2.3) . '<br>';
echo 'Day with number 23 is ' . get_weekday(23) . '<br>';

//task 20
echo '<br>task 20<br>';
function get_month_alternate($month){
    if ( ! is_numeric($month) || ($month = round($month)) < 1 || $month > 12){
        return "invalid month number";
    }
    $month = date('F', mktime(0, 0, 0, $month, 1 , 2016));
    $months = array('January' => 'января', 'February' => 'февраля', 'March' => 'марта', 'April' => 'апреля', 'May' => 'мая',
        'June' => 'июня', 'July' => 'июля', 'August' => 'августа', 'September' => 'сентября', 'October' => 'октября',
        'November' => 'ноября', 'December' => 'декабря');
    return $months[$month];
}
function get_date(){
    $timestamp = time();
    return date('d', $timestamp) . ' ' . get_month_alternate(date('m', $timestamp)) . ', ' . get_weekday(date('w', $timestamp));
}
echo "Today is " . get_date() . "<br>";

//task 21
echo '<br>task 21<br>';
function get_weekday_alternate($day){
    $weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    if ( ! in_array($day, $weekdays)){
        return "invalid argument";
    }
    $wday = get_wday($day, 'l');
    $wday = date('N', mktime(0, 0, 0, 1, $wday, 2016));
    return $wday . "s day at week.";
}
echo "Sunday is " . get_weekday_alternate('Sunday') . "<br>";
echo "Friday is " . get_weekday_alternate('Friday') . "<br>";
echo "Table is " . get_weekday_alternate('Table') . "<br>";

//task 22
echo '<br>task 22<br>';
function get_localized_weekday($day, $lang = 'ru'){
    if ( ! is_numeric($day) || ($day = round($day)) < 1 || $day > 7){
        return "invalid day number";
    }
    //здесь могла бы быть проверка на корректность ввода языка отображения... :)
    $wday = get_wday($day, 'N');
    $weekday = date('l', mktime(0, 0, 0, 1, $wday, 2016));
    $weekdays = array('en' => array ('Monday' => 'Monday',
                                    'Tuesday' => 'Tuesday',
                                    'Wednesday' => 'Wednesday',
                                    'Thursday' => 'Thursday',
                                    'Friday' => 'Friday',
                                    'Saturday' => 'Saturday',
                                    'Sunday' => 'Sunday'),
                        'ru' => array('Monday' => 'Понедельник',
                                        'Tuesday' => 'Вторник',
                                        'Wednesday' => 'Среда',
                                        'Thursday' => 'Четверг',
                                        'Friday' => 'Пятница',
                                        'Saturday' => 'Суббота',
                                        'Sunday' => 'Воскресенье'),
                        'ge' => array('Monday' => 'Montag',
                                        'Tuesday' => 'Dienstag',
                                        'Wednesday' => 'Mittwoch',
                                        'Thursday' => 'Donnerstag',
                                        'Friday' => 'Freitag',
                                        'Saturday' => 'Samstag',
                                        'Sunday' => 'Sonntag'),
        );
    return $weekdays[$lang][$weekday];
}
echo '1 day of week in english : ' . get_localized_weekday(1, 'en') . '<br>';
echo '4 day of week in russian : ' . get_localized_weekday(4, 'ru') . '<br>';
echo '6 day of week in german : ' . get_localized_weekday(6, 'ge') . '<br>';
echo '7 day of week in default language : ' . get_localized_weekday(7) . '<br>';

//task 23
echo '<br>task 23<br>';
function set_a ($href, $innerText){
    return '<a href ="' . $href . '">' . $innerText . '</a>';
}
echo set_a('www.google.ru', 'гугл') . '<br>';

//task 24
echo '<br>task 24<br>';
function set_future_a($href, $innerText, $date){
    $timestamp = strtotime($date);
    if ($timestamp >= time()){
        return set_a($href, $innerText);
    }else{
        return "Когда-нибудь здесь будет ссылка...";
    }
}
echo set_future_a('www.google.ru', 'google', '12.05.2015') . '<br>';
echo set_future_a('www.filatovalex.com', 'click me', '25.12.2016') . '<br>';

//task 25
echo '<br>task 25<br>';
function set_class($href, $innerText){
    $a = '<a href="' . $href . '" class="';
    $a .= (0 === strcmp($href, $_SERVER['REQUEST_URI'])) ? "firstClass" : "secondClass";
    return $a . '">' . $innerText . '</a><br>';
}
echo set_class('/hw5.php', 'home');
echo set_class('www.google.ru', 'google');

//task 26
echo '<br>task 26<br>';
function get_value($num, $arr){
    foreach ($arr as $key => $value){
        if (0 === strcmp($key, $num)){
            return $value . '<br>';
        }
    }
    return "no match!<br>";
}
echo get_value(1, array('1' => 'good', '0' => 'bad'));
echo get_value(2, array('1' => 'black', '2' => 'white'));
echo get_value(0, array('1' => 'day', '2' => 'night'));

//task 27
echo '<br>task 27<br>';
function get_list($mode, $values){
    $list = '<' . $mode . '>';
    foreach ($values as $value){
        $list .= '<li>' . $value . '</li>';
    }
    return $list . '</' . $mode . '>';
}
echo get_list('ol', array('one', 'two', 'three')) . '<br>';
echo get_list('ul', array('red', 'yellow', 'green')) . '<br>';

//task 28
echo '<br>task 28<br>';
function get_classed_list($mode, $values, $n, $class){
    $list = '<' . $mode . '>';
    $cnt = 0;
    foreach ($values as $value){
        $cnt++;
        if ($cnt == $n){
            $list .= '<li class="' . $class . '">';
            $cnt = 0;
        }else{
            $list .= '<li>';
        }
        $list .= $value . '</li>';
    }
    return $list . '</' . $mode . '>';
}
echo get_classed_list('ol', array('one', 'two', 'three', 'four', 'five'), 2, 'match') . '<br>';
echo get_classed_list('ul', array('one', 'two', 'three', 'four', 'five'), 1, 'line') . '<br>';

//task 29
echo '<br>task 29<br>';
function get_table($arr){
    $table = '<table style="border: solid 2px">';
    foreach ($arr as $value){
        $table .= '<tr>';
        foreach ($value as $item){
            $table .= '<td style="border: solid 1px; width: 50px; height: 30px; text-align: center; vertical-align: middle">' . $item . '</td>';
        }
        $table .= '</tr>';
    }
    return $table . '</table>';
}
echo get_table(array('1' => array('1', '2', '3'), '2' => array('4', '5', '6'), '3' => array('7', '8', '9'))) . '<br>';

//task 30
echo '<br>task 30<br>';
function array_reconstruction($arr, $n){
    $arr = array_chunk($arr, $n);
    $arr[count($arr) - 1] = array_pad($arr[count($arr) - 1], $n, '&nbsp;');
    return $arr;
}
echo get_table(array_reconstruction(array(1, 2, 3, 4, 5, 6, 7, 8 ), 3)) . '<br>';

//task 31
echo '<br>task 31<br>';
function get_classed_table($arr){
    $table = '<table style="border: solid 2px">';
    for ($i = 0; $i < $rowlen = count($arr); $i++){
        $table .= '<tr class="';
        $table .= (0 === $i % 2) ? 'odd">' : 'even">';
        for($j = 0; $j < $collen = count($arr[$i]); $j++){
            $table .= '<td style="border: solid 1px; width: 50px; height: 30px; text-align: center; vertical-align: middle">' . $arr[$i][$j] . '</td>';
        }
        $table .= '</tr>';
    }
    return $table . '</table>';
}
echo get_classed_table(array(array('1', '2', '3', '4'), array('5', '6', '7', '8'), array('9', '10', '11', '12'),
                        array('13', '14', '15', '16'))) . '<br>';