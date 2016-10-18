<?php

require_once 'lib.php';
require_once 'db_settings.php';

// task 25
echo '<br>-----------------------------------------------------------------<br>task 25<br><br>';
if ( ! empty( $_GET ) && isset( $_GET[ 'del_id' ] ) ){
	$query = "DELETE FROM workers WHERE id = $_GET[del_id]";
	if ( ! mysqli_multi_query( $con, $query) ){
		echo 'Error deleting data from database!';
	}
}else{
	refresh_table( $con, $server, $user, $password, $db_name );
}
$query = 'SELECT * FROM workers';
$result = mysqli_query( $con, $query );
?>
<style>
	table, th, tr, td{
		border: 1px solid;
	}
</style>
<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>age</td>
		<td>salary</td>
		<td>deleting</td>
	</tr>
	<?php
	if ( mysqli_num_rows( $result ) > 0 ){
		while ( $row = mysqli_fetch_assoc( $result ) ){
			echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[age]</td><td>$row[salary]</td>" .
			     "<td><a href='?del_id=$row[id]'>delete</a></td></tr>";
		}
	}?>
</table>
<a href="hw9_2.php">refresh</a>