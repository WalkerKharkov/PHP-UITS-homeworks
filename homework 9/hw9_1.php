<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'test';

if ( ! $con = @mysqli_connect( $server, $user, $password, $dbName ) ){
	die ( 'Error database connection!' );
}

$query = 'DROP TABLE IF EXISTS `test`.`workers`';
if ( ! mysqli_query( $con, $query ) ){
	die ( 'Error database deleting!' );
}

$query = 'CREATE TABLE `test`.`workers` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL ,' .
         ' `age` INT(3) NOT NULL , `salary` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
if ( ! mysqli_query( $con, $query ) ){
	die ( 'Error database creating!' );
}

$workers = array( array( 'dima', 23, 400 ),
					array( 'petya', 25, 500 ),
					array( 'vasya', 23, 500 ),
					array( 'kolya', 30, 1000 ),
					array( 'ivan', 27, 500 ),
					array( 'kyrill', 28, 1000 ) );
$query = '';
foreach ( $workers as $worker ){
	$query .= "INSERT INTO workers (name, age, salary) VALUES ('$worker[0]', $worker[1], $worker[2]);";
}
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error inserting data in database!';
}
mysqli_close( $con );                                                   //тут произошла какая-то неведомая хрень.
																		//если не закрыть соединение и не открыть
if ( ! $con = @mysqli_connect( $server, $user, $password, $dbName ) ){  //по новой, дальнейший код дает ошибку, вернее
	die ( 'Error database connection!' );                               //запрос возвращает false. хотя логики ноль, на мой взгляд
}

// task 1
echo '<br>-----------------------------------------------------------------<br>task 1<br><br>';
$query = 'SELECT * FROM workers WHERE id=3';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker's with id = 3 name is $row[name].<br>";
	}
}

// task 2
echo '<br>-----------------------------------------------------------------<br>task 2<br><br>';
$query = 'SELECT * FROM workers WHERE salary = 1000';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}
