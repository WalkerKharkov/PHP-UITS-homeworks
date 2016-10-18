<?php

require_once 'db_settings.php';

$query = 'DROP TABLE IF EXISTS `test`.`pages`';
if ( ! mysqli_query( $con, $query ) ) {
	die ( 'Error database deleting!' );
}

$query = 'CREATE TABLE `test`.`pages` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `author` VARCHAR(30) NOT NULL ,' .
         ' `article` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
if ( ! mysqli_query( $con, $query ) ) {
	die ( 'Error database creating!' );
}

$pages = array(
	array( 'Петров', 'В своей статье рассказывает о машинах.' ),
	array( 'Иванов', 'Написал статью об инфляции.' ),
	array( 'Сидоров', 'Придумал новый химический элемент.' ),
	array( 'Осокина', 'Также писала о машинах.' ),
	array( 'Ветров', 'Написал статью о том, как разрабатывать элементы дизайна.' ),
);
$query   = '';
foreach ( $pages as $page ) {
	$query .= "INSERT INTO pages (author, article) VALUES ('$page[0]', '$page[1]');";
}
if ( ! mysqli_multi_query( $con, $query ) ) {
	echo 'Error inserting data in database!';
}
mysqli_close( $con );

if ( ! $con = @mysqli_connect( $server, $user, $password, $db_name ) ) {
	die ( 'Error database connection!' );
}

$query = 'SELECT * FROM pages';
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
			<td>author</td>
			<td>article</td>
		</tr>
		<?php
		if ( mysqli_num_rows( $result ) > 0 ){
			while ( $row = mysqli_fetch_assoc( $result ) ){
				echo "<tr><td>$row[id]</td><td>$row[author]</td><td>$row[article]</td></tr>";
			}
		}?>
	</table>
<?php

// task 38
echo '<br>-----------------------------------------------------------------<br>task 38<br><br>';
$query = 'SELECT * FROM pages WHERE author LIKE "%ов"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "id: $row[id] Author: $row[author] Article: $row[article]<br>";
	}
}

// task 39
echo '<br>-----------------------------------------------------------------<br>task 39<br><br>';
$query = 'SELECT * FROM pages WHERE article LIKE "%элемент%"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "id: $row[id] Author: $row[author] Article: $row[article]<br>";
	}
}