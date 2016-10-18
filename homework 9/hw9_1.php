<?php

require_once 'lib.php';
require_once 'db_settings.php';

refresh_table( $con, $server, $user, $password, $db_name );

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

// task 3
echo '<br>-----------------------------------------------------------------<br>task 3<br><br>';
$query = 'SELECT * FROM workers WHERE age = 23';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 4
echo '<br>-----------------------------------------------------------------<br>task 4<br><br>';
$query = 'SELECT * FROM workers WHERE salary > 400';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 5
echo '<br>-----------------------------------------------------------------<br>task 5<br><br>';
$query = 'SELECT * FROM workers WHERE salary >= 500';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 6
echo '<br>-----------------------------------------------------------------<br>task 6<br><br>';
$query = 'SELECT * FROM workers WHERE salary != 500';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 7
echo '<br>-----------------------------------------------------------------<br>task 7<br><br>';
$query = 'SELECT * FROM workers WHERE salary <= 900';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 8
echo '<br>-----------------------------------------------------------------<br>task 8<br><br>';
$query = 'SELECT * FROM workers WHERE name = "vasya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker vasya, $row[age] years old, have a salary $$row[salary].<br>";
	}
}

// task 9
echo '<br>-----------------------------------------------------------------<br>task 9<br><br>';
$query = 'SELECT * FROM workers WHERE age > 25 AND age <= 28';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 10
echo '<br>-----------------------------------------------------------------<br>task 10<br><br>';
$query = 'SELECT * FROM workers WHERE name = "petya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 11
echo '<br>-----------------------------------------------------------------<br>task 11<br><br>';
$query = 'SELECT * FROM workers WHERE name = "petya" OR name = "vasya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 12
echo '<br>-----------------------------------------------------------------<br>task 12<br><br>';
$query = 'SELECT * FROM workers WHERE name != "petya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 13
echo '<br>-----------------------------------------------------------------<br>task 13<br><br>';
$query = 'SELECT * FROM workers WHERE age = 27 OR salary = 1000';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 14
echo '<br>-----------------------------------------------------------------<br>task 14<br><br>';
$query = 'SELECT * FROM workers WHERE ( age >= 23 AND age < 27 ) OR salary = 1000';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 15
echo '<br>-----------------------------------------------------------------<br>task 15<br><br>';
$query = 'SELECT * FROM workers WHERE ( age >= 23 AND age <= 27 ) OR ( salary >= 400 AND salary <= 1000 )';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 16
echo '<br>-----------------------------------------------------------------<br>task 16<br><br>';
$query = 'SELECT * FROM workers WHERE age = 27 OR salary != 400';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 17
echo '<br>-----------------------------------------------------------------<br>task 17<br><br>';
$query = 'INSERT INTO workers (name, age, salary) VALUES ("nikita", 26, 300)';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error inserting data in database!';
}
$query = 'SELECT * FROM workers WHERE name = "nikita"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 18
echo '<br>-----------------------------------------------------------------<br>task 18<br><br>';
$query = 'INSERT INTO workers SET name = "svetlana", age = 99, salary = 1200';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error inserting data in database!';
}
$query = 'SELECT * FROM workers WHERE name = "svetlana"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 19
echo '<br>-----------------------------------------------------------------<br>task 19<br><br>';
$query = 'SELECT * FROM workers WHERE id = 7';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary] will be deleted from database<br>";
	}
}
$query = 'DELETE FROM workers WHERE id = 7';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error deleting data from database!';
}

// task 20
echo '<br>-----------------------------------------------------------------<br>task 20<br><br>';
$query = 'SELECT * FROM workers WHERE name = "kolya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary] will be deleted from database<br>";
	}
}
$query = 'DELETE FROM workers WHERE name = "kolya"';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error deleting data from database!';
}

// task 21
echo '<br>-----------------------------------------------------------------<br>task 21<br><br>';
$query = 'SELECT * FROM workers WHERE age = 23';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary] will be deleted from database<br>";
	}
}
$query = 'DELETE FROM workers WHERE age = 23';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error deleting data from database!';
}

// task 22
echo '<br>-----------------------------------------------------------------<br>task 22<br><br>';
if ( ! empty( $_GET ) && isset( $_GET[ 'id' ] ) && is_numeric( $_GET[ 'id' ] ) ){
	$query = 'SELECT * FROM workers WHERE id = ' . $_GET[ 'id' ];
	$result = mysqli_query( $con, $query );
	if ( mysqli_num_rows( $result ) > 0 ){
		while ( $row = mysqli_fetch_assoc( $result ) ){
			echo "Worker with id: $_GET[id] is name: $row[name] age: $row[age] salary: $row[salary]<br>";
		}
	}else{
		echo "No worker with id $_GET[id]";
	}
}else{?>
	<form name="get_id" action="" method="get">
		<label>Enter worker's id : </label>
		<input type="text" name="id" />
		<br>
		<input type="submit" value="ok">
	</form>
<?php
}

// task 23
echo '<br>-----------------------------------------------------------------<br>task 23<br><br>';
refresh_table( $con, $server, $user, $password, $db_name );
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
	</tr>
<?php
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[age]</td><td>$row[salary]</td></tr>";
	}
}?>
</table>
<?php

// task 24
echo '<br>-----------------------------------------------------------------<br>task 24<br><br>';
?>
<form name="add_worker" action="" method="post">
	<label>Name : </label>
	<input type="text" name="name" required />
	<br>
	<label>Age : </label>
	<input type="text" name="age" required />
	<br>
	<label>Salary : </label>
	<input type="text" name="salary" required />
	<br>
	<input type="submit" value="Add worker" />
</form>
<?php
if ( ! empty( $_POST ) && is_numeric( $_POST[ 'age' ] ) && is_numeric( $_POST[ 'salary' ] ) ){
	$query = "INSERT INTO workers (name, age, salary) VALUES ('$_POST[name]', $_POST[age], $_POST[salary])";
	if ( ! mysqli_query( $con, $query) ){
		echo 'Error inserting data in database!';
	}else{
		echo 'Worker successfully added to database with id ' . mysqli_insert_id( $con );
	}
}

// task 26
echo '<br>-----------------------------------------------------------------<br>task 26<br><br>';
refresh_table( $con, $server, $user, $password, $db_name);
$query = 'UPDATE workers SET salary = 200 WHERE name = "vasya"';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error updating data in database!';
}
$query = 'SELECT * FROM workers WHERE name = "vasya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 27
echo '<br>-----------------------------------------------------------------<br>task 27<br><br>';
refresh_table( $con, $server, $user, $password, $db_name);
$query = 'UPDATE workers SET age = 35 WHERE id = 4';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error updating data in database!';
}
$query = 'SELECT * FROM workers WHERE id = 4';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 28
echo '<br>-----------------------------------------------------------------<br>task 28<br><br>';
refresh_table( $con, $server, $user, $password, $db_name);
$query = 'UPDATE workers SET salary = 700 WHERE salary = 500';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error updating data in database!';
}
$query = 'SELECT * FROM workers WHERE salary = 700';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 29
echo '<br>-----------------------------------------------------------------<br>task 29<br><br>';
refresh_table( $con, $server, $user, $password, $db_name);
$query = 'UPDATE workers SET age = 23 WHERE id > 2 AND id <= 5';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error updating data in database!';
}
$query = 'SELECT * FROM workers WHERE age = 23';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 30
echo '<br>-----------------------------------------------------------------<br>task 30<br><br>';
refresh_table( $con, $server, $user, $password, $db_name);
$query = 'UPDATE workers SET name = "zhenya", salary = 900 WHERE name = "vasya"';
if ( ! mysqli_multi_query( $con, $query) ){
	echo 'Error updating data in database!';
}
$query = 'SELECT * FROM workers WHERE name = "zhenya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 31
//следующие два задания подкорректирую. в таблице всего 6 записей на данный момент, поэтому лимит будет 3 и со 2й по 4ю :)
echo '<br>-----------------------------------------------------------------<br>task 31<br><br>';
$query = 'SELECT * FROM workers LIMIT 3';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 32
echo '<br>-----------------------------------------------------------------<br>task 32<br><br>';
$query = 'SELECT * FROM workers LIMIT 3 OFFSET 1';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 33
echo '<br>-----------------------------------------------------------------<br>task 33<br><br>';
$query = 'SELECT * FROM workers ORDER BY salary ASC';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 34
echo '<br>-----------------------------------------------------------------<br>task 34<br><br>';
$query = 'SELECT * FROM workers ORDER BY salary DESC';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 35
echo '<br>-----------------------------------------------------------------<br>task 35<br><br>';
$query = 'SELECT * FROM workers ORDER BY age ASC LIMIT 5 OFFSET 1';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 36
echo '<br>-----------------------------------------------------------------<br>task 36<br><br>';
$query = 'SELECT COUNT(*) FROM workers';
$result = mysqli_query( $con, $query );
$total = mysqli_fetch_row( $result ) [ 0 ];
echo "Total records in table 'workers' : $total";

// task 37
echo '<br>-----------------------------------------------------------------<br>task 37<br><br>';
$query = 'SELECT COUNT(*) FROM workers WHERE salary = 300 ';
$result = mysqli_query( $con, $query );
$total = mysqli_fetch_row( $result ) [ 0 ];
echo "Total workers who have salary $300 in table 'workers' : $total";

// task 40
echo '<br>-----------------------------------------------------------------<br>task 40<br><br>';
$query = 'SELECT * FROM workers WHERE age LIKE "3_"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}

// task 41
echo '<br>-----------------------------------------------------------------<br>task 41<br><br>';
$query = 'SELECT * FROM workers WHERE name LIKE "%ya"';
$result = mysqli_query( $con, $query );
if ( mysqli_num_rows( $result ) > 0 ){
	while ( $row = mysqli_fetch_assoc( $result ) ){
		echo "Worker, id: $row[id] name: $row[name] age: $row[age] salary: $row[salary].<br>";
	}
}