<?php
$mysqli = new mysqli("localhost", "root", "", "test");

$sql = "INSERT INTO workers (name, age, salary) VALUES('aaa', 20, 1000);";
$sql .= "SELECT * FROM workers;";

$mysqli->multi_query($sql);

do {
	if ($res = $mysqli->store_result()) {
		var_dump($res->fetch_all(MYSQLI_ASSOC));
		$res->free();
	}
} while ($mysqli->more_results() && $mysqli->next_result());
