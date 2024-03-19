<?php
@session_start();
unset($_SESSION["deptuserisloggedin"]);	 	   
header('Location:login.php');
?>