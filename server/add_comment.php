<?php
 session_start();


   include("pdo_config.php");

   // connect to mysql database PDO

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}

$date = date('Y:m:d H:i:s');

$query = "INSERT INTO comments (id_user, country_name, comment, created_at) VALUES (:id_user, :country_name, :comment, :created_at)";

		$stmt = $conn->prepare($query);
		$stmt->bindParam(':id_user', $_POST['id_user'], PDO::PARAM_INT);
		$stmt->bindParam(':country_name', $_POST['name_country'], PDO::PARAM_INT);
		$stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
		$stmt->bindParam(':created_at', $date, PDO::PARAM_STR);
		if($stmt->execute()){
			header("Location: ../comments.php");
		}


?>