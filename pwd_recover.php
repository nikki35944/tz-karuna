<?php
require("config/connection.php");

if (isset($_POST['submit'])){
  $errors = [];
  //Check if pwd <8 chars
  if (strlen($_POST['password']) < 8)
  {
    $errors[] = "Password should be at least 8 characters";
  }
  // check pwd chars
  if (!preg_match("/^[a-zA-Z0-9]+$/",$_POST['password']))
  {
      $errors[] = "Password may contain only from english characters";
  }
  //check if passwords match
  if ($_POST['password'] != $_POST['password_confirm'])
  {
    $errors[] = "Entered passwords do not match";
  }

  $email = $_POST['email'];
  $query = mysqli_query($link, "SELECT * FROM `users` WHERE `email`= '".$email."' ");
  while ($row = mysqli_fetch_assoc($query))
  {
    $dbemail = $row['email'];
  }
  //check if email exists
  if ($_POST['email'] != $dbemail)
  {
    $errors[] = "Entered email does not exist in the base";
  }
  // If there is no errors we change password
  if (count($errors) == 0)
  {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = mysqli_query($link, "UPDATE `users` SET `password` = '".$password."' WHERE `users`.`email` = '".$email."'");
    include("view/pwd_changed.php");
  }
}

include("view/pwd_recover.php");
include("config/errors.php");
