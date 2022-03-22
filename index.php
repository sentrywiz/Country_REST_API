<?php session_start(); ?>
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

<div class="container">
  <div class="jumbotron">
    <h1>Country REST API</h1>
    <p>Browse through all the country list, find and add your favorites and leave comments about it. REST data from https://restcountries.com</p>
  </div>
  <p>Login to your profile</p>
  <p>Add countries as your favorites</p>
  <p>Let others know what you think!</p>
</div>


</body>
</html>