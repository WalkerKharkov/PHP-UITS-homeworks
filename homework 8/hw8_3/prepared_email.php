<?php
session_start();
if ( isset( $_SESSION[ 'email' ] ) ){
	$email = $_SESSION[ 'email' ];
}?>
<form name="regform" action="" method="post">
	<label>Enter name</label>
	<input type="text" name="name" />
	<br>
	<label>Enter surname</label>
	<input type="text" name="surname" />
	<br>
	<label>Enter email</label>
	<input type="email" name="email" value="<?php if ( isset( $email ) ) echo $email; ?>" required />
	<br>
	<label>Enter password</label>
	<input type="password" name="password" />
	<br>
	<input type="submit" value="send" />
</form>
<?php
if ( ! empty( $_POST ) ){
	$_SESSION[ 'email' ] = $_POST[ 'email' ];
}