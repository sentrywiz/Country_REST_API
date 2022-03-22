<?php session_start(); 

if(!empty($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" >
    <title>Country REST API (PHP/BOOTSTRAP)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="i/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>


      </head> 
  <body>
<!-- Navigation 1 -->

<?php include('client/nav.html'); ?>

<!-- Feature 2 -->


<?php

 include_once("server/pdo_config.php");

   // connect to mysql database PDO


// loop all countries


          $stmt = $conn->prepare("SELECT * from comments where id_user=:usern ORDER BY country_name DESC");
          $stmt->execute(['usern' => $_SESSION['id']]); 
?>

<div class="container">
<span class="table-title">Comments</span>
<?php
             while($row = $stmt->fetch(SQLITE3_ASSOC) ){
                $country_name = $row['country_name'];
                $comment = $row['comment'];
                $created_at = $row['created_at'];
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button
        class="accordion-button"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#collapseOne"
        aria-expanded="true"
        aria-controls="collapseOne"
      >
        <?php echo $country_name; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $comment; ?>
        <br>
        <strong><?php echo $created_at; ?></strong>
      </div>
    </div>
  </div>
  
  </div>

  <?php } ?>

</div>





</body>
</html>
<?php 
} else {
  header("Location: index.php");
}
?>