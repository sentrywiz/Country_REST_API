<?php


   include_once("pdo_config.php");

   // connect to mysql database PDO


// loop all countries


          $stmt = $conn->prepare("SELECT * from favorites where id_user=:usern ORDER BY created_at DESC");
          $stmt->execute(['usern' => $_SESSION['id']]); 


             while($row = $stmt->fetch(SQLITE3_ASSOC) ){
               	$country_name = $row['country_name'];
                $comment = $row['comment'];
                $created_at = $row['created_at'];
            }


?>