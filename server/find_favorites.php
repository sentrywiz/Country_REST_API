<?php


   include_once("pdo_config.php");

   // connect to mysql database PDO


// loop all countries


$fav_list = [];
$fav_size = 0;

          $stmt = $conn->prepare("SELECT * from favorites where id_user=:usern");
          $stmt->execute(['usern' => $_SESSION['id']]); 


             while($row = $stmt->fetch(SQLITE3_ASSOC) ){
               	$country_name = $row['country_name'];
                $fav_list[$fav_size] = $country_name;
                $fav_size++;
            }


?>