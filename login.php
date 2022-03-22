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
  <h2>Login to Country REST API</h2>
  <form action="server/login.php" method="post">
    <div class="form-group">
      <label for="email">Username</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn-lg btn-primary">Login</button>
  </form>
  	<?php if(!empty($_SESSION['error'])) { ?>
	<br><font color="red" class="text center"><?php echo $_SESSION['error']; ?></font>
	<?php } ?>
</div>

<?php include('client/footer.html'); ?>

</body>
</html>