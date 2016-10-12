<a href="index.html">home</a>
<br>
<br>
<br>
<form name="authorization" action="" method="post">
	<label>Name : </label>
	<input type="text" name="name" required />
	<br>
	<label>Email : </label>
	<input type="email" name="email" required />
	<br>
	<label>Password : </label>
	<input type="password" name="password" required />
	<br>
	<input type="submit" value="ok">
</form>
<?php
if ( ! empty( $_POST ) ){
	$fileNamePattern = '/(^' . $_POST[ 'name' ] . ')*(\.dat\z)/';
	$dir = opendir( getcwd() );
	while( false !== ( $fileName = readdir( $dir ) ) ){
		if ( preg_match( $fileNamePattern, $fileName ) ){
			$user = explode( ';', file_get_contents( $fileName ) );
			if ( strcmp( $user[ 0 ], $_POST[ 'name' ] ) == 0 &&
				 strcmp( $user[ 3 ], $_POST[ 'email' ] ) == 0 &&
			     strcmp( $user[ 4 ], $_POST[ 'password' ] ) == 0 ){
				header( 'Location:welcome.php?name=' . $_POST[ 'name' ] );
			}
		}
	}
	echo "You are not registered user! Enter valid data or create new user!";
}