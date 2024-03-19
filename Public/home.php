<?php
@session_start();
include ("usercheck.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title> Complaint Registration </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/index.css">
            <link rel="stylesheet" href="css/slider.css">
</head>
<style>
.navbar {
width: 100%;
background-color: #313348;
overflow: auto;
}
.navbar a {
float: left;
padding: 12px;
color: white;
text-decoration: none;
font-size: 17px;
}
.navbar a:hover {
background-color:#FE9800;
}
.active {
background-color: #FE9800;
}
.form-control{
    text-align: center;
    color:goldenrod;
}
@media screen and (max-width: 500px) {
.navbar a {
float: none;
display: block;
}
}
</style>
<body>
<div class="navbar">
<a  class = "active" href=""><i class="fa fa-fw fa-home"></i> Home</a>  
<a  href="complaints.php"><i class="fa fa-fw fa-user"></i> Raise Complaints</a>
<a  href="trackcomplaints.php"><i class="fa fa-fw fa-user"></i> Track Complaints </a>  
<a href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>Logout</a>
</div>

