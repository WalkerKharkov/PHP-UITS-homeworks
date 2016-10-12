<?php
session_start();
if ( isset( $_COOKIE[ 'country' ] ) ){
	$country = $_COOKIE[ 'country' ];
	echo "You are citizen of $country!";
}else{
	echo "You are citizen of the world!";
}
echo '<p><a href="index.php">back</a></p>';