<?php
if ( ! empty( $_GET ) && isset( $_GET[ 'stop' ] ) ){
	setcookie( 'stop', 'true', time() + 2592000 );
}
if ( ! isset ( $_COOKIE[ 'stop' ] ) ){
	echo '<a href="banner.php?stop=true" style="background-color:red;color:white;">Click this button to show it</a>';
}