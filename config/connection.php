<?php
$link = mysqli_connect("localhost", "root", "", "testtz");

if (!$link)
{
  echo "Error" . mysqli_connect_error();
  exit();
}
