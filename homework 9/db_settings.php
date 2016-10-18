<?php
$server   = 'localhost';
$user     = 'root';
$password = '';
$db_name  = 'test';

if ( ! $con = @mysqli_connect( $server, $user, $password, $db_name ) ){
	die ( 'Error database connection!' );
}