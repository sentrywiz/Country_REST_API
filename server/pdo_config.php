<?php
	$host = 'localhost';
    $dbname = 'country_rest_db';
    $username = 'root';
    $password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}

?>