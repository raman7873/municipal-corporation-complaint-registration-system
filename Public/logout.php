<?php
@session_start();
unset($_SESSION["publicuserisloggedin"]);	 	   
header('Location:login.php');
?>