<?php
@session_start();
include ("../common/db.php");
include("usercheck.php");
if(isset($_POST["complaintsubmit"]))
{
	$narration = mysqli_real_escape_string($conn, $_POST['narration']);
	$deptid = mysqli_real_escape_string($conn, $_POST['deptid']);
	$complaintby = $_SESSION["publicuserid"];


	 $sql = "INSERT INTO `complaint` (`deptId`, `complaintNarration`, `complaintBy`, `complaintDate`, `statusId`) VALUES ($deptid,'$narration',$complaintby,now(),1)";
	 $res = $conn->query($sql);

	 if($res)
	 {
	 	echo "The Complaint is registered";	
	 	echo " </br>";
	 	echo "<a href = 'home.php'> Go Back to Home Page</a>";
	 }
	 else
	 {
	 	echo " Complaint couldn't be lodged successfully.";
	 	echo "<a href = 'complaints.php'> Try Again</a>";

	 }
}



else {
	?>
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


<script src="../js/jquery-3.5.1.min.js">
	</script>
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
<a  href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>  
<a class="active" href="complaints.php"><i class="fa fa-fw fa-home"></i> Raise Complaint</a>
<a class="" href="trackcomplaints.php"><i class="fa fa-fw fa-user"></i> Track Complaints</a>
<a href="index.html" style="float: right;"><i class="fa fa-sign-out"></i>Logout</a>
</div>

<div class="card" style="margin-top:20px;">
<center><h1 style="color: tomato;"><b>Register Complaint</b></h2></center>
<form  method="post" class="w3-container">       
        Select Your District <br>

			<select class="form-control" id="district">
				<option value="">Select District</option>
            <?php
            
			$sql = "SELECT * FROM districtmaster order by districtName";
			$res = $conn->query($sql);

			while($row = mysqli_fetch_array($res)) {
			?>
			<option value="<?php echo $row["districtId"];?>"><?php echo $row["districtName"];?></option>
			<?php
			}
			?>

          </select><br/> 
          <br>
        Select Your Department<br>
        <select class="form-control" id="department" name = "deptid">
            
        </select><br>
        <br>	
        Complaint Description
        <br><br>
        <textarea id="subject" name="narration" placeholder="Write something.." style="height:200px; width:100%;resize: vertical;" required></textarea>
        <hr>
        <input type="submit" class="button btn-theme" value="Submit Complaint" name="complaintsubmit" /> 
    </form>
</div>
</body>
<script >
$(document).ready(function(){
    $('#district').on('change', function(){
        var districtId = $(this).val();
        if(districtId){
            $.ajax({
                type:'POST',
                url:'departmentbydistrict.php',
                data:'districtId='+districtId,
                success:function(html){
                    $('#department').html(html);
                    
                }
            }); 
        }else{
            $('#department').html('<option value="">Select district first</option>');
        }
    });
});
</script>
</html>

<?php
}
?>