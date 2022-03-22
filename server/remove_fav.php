<?php
 session_start();


   include("pdo_config.php");

   // connect to mysql database PDO

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}
          			

		$query = "DELETE FROM favorites WHERE id_user=:remove_id AND country_name=:name_country";

		$stmt = $conn->prepare($query);
		$stmt->execute(['remove_id' => $_POST['id_user'], 'name_country' => $_POST['name_country']]);		

		if($stmt->execute()){
			header("Location: ../favorites.php");
		}


?>