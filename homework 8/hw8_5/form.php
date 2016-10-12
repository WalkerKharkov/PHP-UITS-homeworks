<?php
session_start();
$age = ( isset( $_SESSION[ 'age' ] ) ) ? $_SESSION[ 'age' ] : '';
$city = ( isset( $_SESSION[ 'city' ] ) ) ? $_SESSION[ 'city' ] : '';
?>
<form name="form" action="" method="post">
	<label>Enter name</label>
	<input type="text" name="name" required />
	<br>
	<label>Enter age</label>
	<input type="text" name="age" value="<?php echo $age; ?>" required />
	<br>
	<label>Enter city</label>
	<input type="text" name="city" value="<?php echo $city; ?>" required />
	<br>
	<input type="submit" value="send" />
</form>
<br>
<a href="index.php">back</a>
