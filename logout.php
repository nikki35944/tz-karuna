<?php
	session_start();
	unset($_SESSION['session_guestname']);
	session_destroy();
	header("Location:login.php");
