<?php
if ( ! isset ( $_GET[ 'name' ] ) ){
	die( "Access denied!" );
}?>
<a href="index.html">home</a>
<br>
<br>
<p>Welcome, <?php echo $_GET[ 'name' ]; ?>!</p>
