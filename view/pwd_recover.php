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
  <title>Remind Password</title>
</head>
<body>
  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-4"></div>
      <!-- Password recovery block -->
      <form class="text-center border border-light p-5" id="signinform" method="POST">

          <p class="h4 mb-4">Recover your password</p>
          <small class="text text-muted mb-4">Enter your email to send password there.</small>
          <!-- Email -->
          <input type="email" id="defaultLoginFormEmail" class="form-control mb-2" placeholder="Email" name="email" required>

          <!-- New Password -->
          <small class="text text-muted mb-2">Enter new password twice.<br>At least 8 characters.</small>
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-2" placeholder="Password" name="password" required>
          <!-- New password confirmation -->
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-2" placeholder="Pasword confirmation" name="password_confirm" required>


          <!-- Recover button -->
          <button class="btn btn-info btn-block my-4" type="submit" name="submit">Recover</button>

      </form>
      <!-- Password recovery -->
      <div class="col-md-5"></div>
    </div>
  </div>
</body>
</html>
