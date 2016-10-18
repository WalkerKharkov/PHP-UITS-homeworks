<?php

require_once 'db_settings.php';

$query = 'DROP TABLE IF EXISTS `test`.`users`';
if ( ! mysqli_query( $con, $query ) ) {
	die ( 'Error database deleting!' );
}

$query = 'CREATE TABLE `test`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `user_id` int(11) NOT NULL ,' .
         ' `points` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
if ( ! mysqli_query( $con, $query ) ) {
	die ( 'Error database creating!' );
}

$points = array(
	array( 1, 6 ),
	array( 2, 10 ),
	array( 2, 5 ),
	array( 3, 15 ),
	array( 2, 1 ),
);
$query   = '';
foreach ( $points as $point ) {
	$query .= "INSERT INTO users (user_id, points) VALUES ($point[0], $point[1]);";
}
if ( ! mysqli_multi_query( $con, $query ) ) {
	echo 'Error inserting data in database!';
}
mysqli_close( $con );

if ( ! $con = mysqli_connect( $server, $user, $password, $db_name ) ) {
	die ( 'Error database connection!' );
}

$query = 'SELECT user_id, SUM(points) AS maxsum FROM users GROUP BY user_id ORDER BY maxsum DESC LIMIT 1';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	$row = mysqli_fetch_array( $result );
	echo "Id of user with maximum points is $row[0]";
}