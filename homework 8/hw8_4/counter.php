<?php
session_start();
if ( ! isset( $_SESSION[ 'counter'] ) ){
	$_SESSION[ 'counter' ] = 0;
	echo 'You don\'t refresh this page any time';
}else{
	echo 'You have refreshed this page ' . ++$_SESSION[ 'counter' ] . ' times.';
}