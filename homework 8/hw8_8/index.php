<form name="ask" action="" method="post">
	<label>Your country : </label>
	<input type="text" name="country" required />
	<br>
	<input type="submit" value="ok" />
</form>
<?php
if ( ! empty( $_POST ) ){
	setcookie( 'country', $_POST[ 'country' ] );
	echo '<p>Visit <a href="test.php">test.php</a></p>';
}