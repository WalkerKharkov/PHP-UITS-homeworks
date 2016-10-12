<?php
session_start();
$_SESSION[ 'session' ] = 'session is started';
var_dump( $_SESSION[ 'session' ] );
?>
<p><a href="logout.php">logout</a></p>
