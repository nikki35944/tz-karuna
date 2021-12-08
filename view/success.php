<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.css" rel="stylesheet">
  <title>Account</title>
</head>
<body>
  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-4"></div>
      <!--Greetings container -->
      <div class="col-md-4 text-center border border-light p-5">
        <p class="h4 mb-4">Login completed</p>
        <p class="h6 mb-4">Greetings, <?php echo $_SESSION['session_guestname']; ?></p>
        <small class="text text-muted mb-4">You can <a href="/logout.php">Logout</a> and go to login form.</small>
      </div>
      <!--Greetings container end -->
      <div class="col-md-5"></div>
    </div>
  </div>
</body>
</html>
