<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" >
    <title>Country REST API (PHP/BOOTSTRAP)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="i/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>


      </head> 
  <body>
<!-- Navigation 1 -->

<?php include('client/nav.html'); ?>

<!-- Feature 2 -->

<section class="feature_2 bg-light pt-105 pb-45 text-center">
  <div class="container px-xl-0">
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Country List</span>

      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Name</th>
            <th>Region</th>
            <th>Population</th>
          </tr>
        </thead>
        <?php
        $jsonurl = "https://restcountries.com/v3.1/all";
        $json = file_get_contents($jsonurl);
        $neso = json_decode($json, TRUE);
        $array_len = sizeof($neso);

        for ($i=0; $i < $array_len; $i++) { 
          echo "<tr><td>".$neso[$i]['name']['official']."</td>";
          echo "<td>".$neso[$i]['region']."</td>";
          echo "<td>".$neso[$i]['population']."</td>";         
          echo "</tr>";            
        }
        ?>
      </table>
    </div>
  </div>
</div>
  </div>
</section>






<script>
$(document).ready( function () {
  var table = $('#datatable').DataTable();
} );</script>

</body>
</html>
