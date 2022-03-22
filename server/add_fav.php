<?php
 session_start();


   include("pdo_config.php");

   // connect to mysql database PDO

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}


$query = "INSERT INTO favorites (id_user, country_id, country_name) VALUES (:id_user, :id_country, :name_country)";

		$stmt = $conn->prepare($query);
		$stmt->bindParam(':id_user', $_POST['id_user'], PDO::PARAM_INT);
		$stmt->bindParam(':id_country', $_POST['id_country'], PDO::PARAM_INT);
		$stmt->bindParam(':name_country', $_POST['name_country'], PDO::PARAM_STR);
		if($stmt->execute()){
			header("Location: ../favorites.php");
		}


?>