<form name="index" action="" method="post">
	<label>Enter age</label>
	<input type="text" name="age" required />
	<br>
	<label>Enter city</label>
	<input type="text" name="city" required />
	<br>
	<input type="submit" value="send" />
</form>
<?php
session_start();
if ( ! empty( $_POST ) ){
	$_SESSION[ 'age' ] = $_POST[ 'age' ];
	$_SESSION[ 'city' ] = $_POST[ 'city' ];
	header( 'Location:form.php' );
}
