<?php
require("config/connection.php");
include("view/signup.html");

if (isset($_POST['submit']))
{

    $errors = [];

    //check min value of person name
    if (strlen($_POST['firstname']) > 32 or preg_match_all("/[0-9.-]+/", $_POST['FirstName']))
    {
        $errors[] = "Name can't contain numbers and should be less than 32 characters";
    }

    // check username chars
    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['username']))
    {
        $errors[] = "Username may consist only from english characters";
    }
    //check min value of username
    if (strlen($_POST['username']) < 5 or strlen($_POST['username']) > 25)
    {
        $errors[] = "Username should be at least 5 characters";
    }
    // check if username exists
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $query = mysqli_query($link, "SELECT `id` FROM `users` WHERE `username` ='".$username."' ");
    if (mysqli_num_rows($query) > 0)
    {
        $errors[] = "User with this username already exists";
    }

    // check if email exists
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $query = mysqli_query($link, "SELECT `id` FROM `users` WHERE `email` ='".$email."' ");
    if (mysqli_num_rows($query) > 0)
    {
        $errors[] = "User with such email already exists";
    }

    // check pwd chars
    if (!preg_match("/^[a-zA-Z0-9]+$/",$_POST['password']))
    {
        $errors[] = "Password may contain only from english characters";
    }
    //check min value of pwd
    if (strlen($_POST['password']) < 8 or strlen($_POST['password']) > 32)
    {
        $errors[]= "Password should be at least 8 characters";
    }

    // If there is no errors we add a new user in database
    if (count($errors) == 0)
    {

        $name = $_POST['firstname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        // Убераем лишние пробелы и делаем двойное хеширование
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        mysqli_query($link, "INSERT INTO `users` SET `name`='".$name."', `username`='".$username."', `email`='".$email."', `password`='".$password."' ");
        include("view/usercreated.php"); 
    }
}


include("config/errors.php");
