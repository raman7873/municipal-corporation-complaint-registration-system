<?php
@session_start();
include ("../common/db.php");
include("usercheck.php");

$sql3 = "SELECT * from vwcomplaint WHERE complaintBy = ".$_SESSION['publicuserid']; 
$res3 = $conn->query($sql3);
?>

<!-- HTML CODE -->
<head>
    <title> Track Complaint </title>
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

.center{
margin-left: auto;
margin-right: auto;
}

}
</style>
<body>
<div class="navbar">
<a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>  
<a  href="complaints.php"><i class="fa fa-fw fa-user"></i> Raise Complaint</a>
<a class="active" href="trackcomplaints.php"><i class="fa fa-fw fa-user"></i> Track Complaint </a>  
<a href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>Logout</a>
</div>


<center><h1 style="color: tomato;"><b>Track Complaints</b></h2></center>
    <br>
        <table border="7px solid black" align="center" class="center" width="65%">

            <tr>
                <th>Date</th>
                <th>Complaint</th>
                <th>Response</th>
                <th>District</th>
                <th>Department</th>
                <th>Status </th>
            </tr>
<?php

while($row=$res3->fetch_assoc())
{
	$sql4 = "SELECT * from response WHERE complaintId = ".$row['complaintId'];    /*for response*/
    $res4 = $conn->query($sql4);
    $response = "";
    while($row4=$res4->fetch_assoc())
    {
        $response = $response.$row4['response']."<br>";
    }
    
	echo "<tr><td>".date("d/m/Y",strtotime($row['complaintDate']))."</td><td>".$row['complaintNarration']."</td><td>".$response."</td><td>".$row['districtName']."</td><td>".$row['deptName']."</td><td>".$row['status']."</td></tr>";
	

}

?>
</table>
</body>
</head>
</html>