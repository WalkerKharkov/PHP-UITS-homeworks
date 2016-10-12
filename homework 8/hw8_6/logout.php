<?php
session_start();
unset( $_SESSION );
session_destroy();
echo 'session is destroyed -> ';
var_dump( $_SESSION[ 'session' ] );