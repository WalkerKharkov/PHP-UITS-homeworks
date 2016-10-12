<form name="interview" action="" method="post">
	<label>Choose your favourite color : </label>
	<select name="color" required>
		<option value="red" style="background-color: red"><b>red</b></option>
		<option value="green" style="background-color: green"><b>green</b></option>
		<option value="blue" style="background-color: blue"><b>blue</b></option>
	</select>
	<input type="submit" value="ok">
</form>
<?php
if ( ! empty( $_POST ) ){
	session_start();
	$_SESSION[ 'color' ] = $_POST[ 'color' ];
	echo '<a href="shop.php">go to the shop</a>';
}
