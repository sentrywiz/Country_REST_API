<?php
   session_start();

   include_once("pdo_config.php");

   // connect to mysql database PDO



// check hashed password

$password = $_POST['password'];
$username = $_POST['username'];

/*$hash = password_hash($password, PASSWORD_DEFAULT);*/

          $stmt = $conn->prepare("SELECT * from users where username=:usern");
          $stmt->execute(['usern' => $username]); 


             while($row = $stmt->fetch(SQLITE3_ASSOC) ){
               	$id_user = $row['id'];
                $password_check=$row['password'];
            }



if (password_verify($password, $password_check)) {
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $id_user;
	header("Location: ../member.php");
} else {
	$_SESSION['error'] = "Password mismatch!";
	header("Location: ../login.php");
}


?>