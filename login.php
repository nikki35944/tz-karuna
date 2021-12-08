<?php
require("config/connection.php");



if (isset($_SESSION['session_guest']))
{
  header("Location: success.php");
}

if (isset($_POST['submit']))
{
  $errors = [];

  if (isset($_POST['username']) && isset($_POST['password']))
  {
    $username = htmlspecialchars($_POST['username']);
	  $query = mysqli_query($link, "SELECT * FROM `users` WHERE `username`='".$username."' ");
    //creating an array to select username and password from db
    while ($row = mysqli_fetch_assoc($query))
    {
      $dbusername = $row['username'];
      $hash = $row['password'];
      $name = $row['name'];
    }
    if ($username == $dbusername && password_verify($_POST['password'], $hash))
    {
      session_start();
      $_SESSION['session_guestname'] = $name;
      header("Location: view/success.php");
    }else{
      $errors[] = "Invalid username or password";
    }

  }

}

include("view/signin.html");
include("config/errors.php");
