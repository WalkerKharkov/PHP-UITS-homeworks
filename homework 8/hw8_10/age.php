<?php
$ages = array( 3600, 10800, 86400, 31536000, 315360000);
$value = mt_rand( 10, 70 );
$index = mt_rand( 0, 6);
$time = time();
$day = (int)date( 'd', $time );
$month = (int)date( 'm', $time );
$year = (int)date( 'y', $time );
switch ( $index ){
	case 0:
	case 1:
	case 2:
	case 3:
	case 4:
		$age = $time + $ages[ $index ];
		break;
	case 5:
		$age = mktime( 0, 0, 0, $month, ++$day, $year );
		break;
	case 6:
		$age = mktime( 0, 0, 0, 1, 1, ++$year );
}
//echo date( DATE_RSS, $age );
setcookie( 'age', $value, $age );