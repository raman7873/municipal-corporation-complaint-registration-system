<?php
@session_start();
include ("../common/db.php");
include("usercheck.php");

$sql3 = "SELECT * from vwcomplaint WHERE deptId = ".$_SESSION['deptid']; 
$res3 = $conn->query($sql3);


?>


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
<a  href="home.php"><i class="fa fa-fw fa-home"></i> Department Home</a>  
<a  href="showcomplaints.php" class="active" ><i class="fa fa-fw fa-user"></i> Show Complaints </a>  
<a href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>Logout</a>
</div>

<center><h1 style="color: tomato;"><b>Complaints </b></h2></center>
    <br><br><br>
    <table border="10px solid black" align="center" width="75%">
        <tr>
            <th>Date</th>
            <th>Complaint</th>
            <th>Response</th>
            <th>District</th>
            <th>Department</th>
            <th>Status </th>
            <th>Action </th>
        </tr>    



<?php

while($row=$res3->fetch_assoc())
{
	$sql4 = "SELECT * from response WHERE complaintId = ".$row['complaintId'];         
    $res4 = $conn->query($sql4);
    $response = "";
    while($row4=$res4->fetch_assoc())
    {
        $response = $response.$row4['response']."<br>";
    }



	echo "<tr><td>".date("d/m/Y",strtotime($row['complaintDate']))."</td><td>".$row['complaintNarration']."</td><td>".$response."</td><td>".$row['districtName']."</td><td>".$row['deptName']."</td><td>".$row['status']."</td>";
    
    echo "<td><form action='respond.php'    method ='post'>  <input name = 'id' type='hidden' value=".$row['complaintId']." > ";

    if($row['statusId']!=2){
    echo "<input name = 'response' type='submit' value='Response' ></form></td> ";
    }   


    echo "</tr>";
	


}

?>
</table>
</body>
</html>