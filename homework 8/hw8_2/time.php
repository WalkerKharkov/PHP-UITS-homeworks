<?php
session_start();
if ( ! isset( $_SESSION[ 'time' ] ) ){
	$_SESSION[ 'time' ] = time();
	$time = $_SESSION[ 'time' ];
}else{
	$time = time();
}
$time -= $_SESSION[ 'time' ];
echo "You are entered this site $time seconds ago.";