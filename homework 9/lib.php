<?php
function refresh_table( &$con, $server, $user, $password, $db_name ) {
	$query = 'DROP TABLE IF EXISTS `test`.`workers`';
	if ( ! mysqli_query( $con, $query ) ) {
		die ( 'Error database deleting!' );
	}

	$query = 'CREATE TABLE `test`.`workers` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL ,' .
	         ' `age` INT(3) NOT NULL , `salary` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
	if ( ! mysqli_query( $con, $query ) ) {
		die ( 'Error database creating!' );
	}

	$workers = array(
		array( 'dima', 23, 400 ),
		array( 'petya', 25, 500 ),
		array( 'vasya', 23, 500 ),
		array( 'kolya', 30, 1000 ),
		array( 'ivan', 27, 500 ),
		array( 'kyrill', 28, 1000 )
	);
	$query   = '';
	foreach ( $workers as $worker ) {
		$query .= "INSERT INTO workers (name, age, salary) VALUES ('$worker[0]', $worker[1], $worker[2]);";
	}
	if ( ! mysqli_multi_query( $con, $query ) ) {
		echo 'Error inserting data in database!';
	}
	mysqli_close( $con );

	if ( ! $con = @mysqli_connect( $server, $user, $password, $db_name ) ) {
		die ( 'Error database connection!' );
	}
}
