<?php
include("usercheck.php");
include ("../common/db.php");
if(isset($_POST["btnsubmit"]))
	{
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$deptid = mysqli_real_escape_string($conn, $_POST['deptid']);
		$contact = mysqli_real_escape_string($conn, $_POST['contact']);		
		$password1 = mysqli_real_escape_string($conn, $_POST['password']);                                
  		$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
		$passwordhash = password_hash($password1, PASSWORD_DEFAULT);
		/*$password = md5($password)*/

		if ($password1 != $confirmpassword)
		{
			echo "The passwords don't match";
		}
		
		 $sql_1 = "SELECT * FROM dept_user_master WHERE emailId='$email'";	
		 $res_1 = $conn->query($sql_1); 

		if (mysqli_num_rows($res_1)>0) {
					echo "Sorry... email already exists";
                    echo "<br>";
					echo "<a href =registration2.php>Go back </a>";
			 		}

	
	else{
	$sql = "INSERT INTO  `dept_user_master` (`Name`, `emailId`,`deptId`, `mobileNo`, `password`) VALUES ('$name', '$email','$deptid', '$contact', '$passwordhash')"; 

			 $res = $conn->query($sql);
			 if ($res){
			 			echo "Account Created Successfully";
			 			echo "<br>";
			 			echo "<a href =registration2.php>Go back </a>";
			 			 
			 		  }

			 	else { 
			 			$conn->error;
			 		}
		}	 		
	}	 	
else{
		?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Department User Creation </title>
<link href="/muni1.css" rel="stylesheet">
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
    
    html,
body {
    height: 100%;
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}


.nav > li > a:hover{
    background-color:#808080;!important
}

.carousel {
    height: 50%;
}

.item,
.active,
.carousel-inner {
    height: 100%;
}


.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    background-image: -moz-linear-gradient();
}

footer {
    margin: 50px 0;
}
h1 {
    margin: .67em 0;
    font-size: larger;
    text-align-: center;
  }
.text-center {
    text-align: center;
    height: 20px;
    position: relative;
    
  }
  .text-justify {
    text-align: justify;
  }
.col-lg-12{
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  .form-control {
    display: block;
    margin:auto;
    width: 27%;
    height: 34px;
    padding: 6px 12px;
    font-size: 10px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }
  .modal-dialog {
    position: relative;
    width: auto;
    margin:5px;
  }
  .modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
            background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
  }
  .modal-title {
    margin: auto;
    align-items: center;
    line-height: 1.42857143;
  }
  .modal-body {
    position: relative;
    padding: 15px;
  }
  .text, h1{
    position: relative;
    height: 10px;
    z-index: 2;
    font-size: larger;
  }
  .pull-right {
    right: auto;
    left: auto;
    margin: auto;
    align-items: center;
  }
  .a{

    align-items: center;
  }
  .modal-header {
    padding: 15px;
    align-items: center;
  }
  .modal-title{
    text-align: center;
    font-size: 40px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color:seagreen;
  }
  .modal-body{
    font-size: 20px;
    padding: 3px;
    color: red;
    text-align: center;
  }
  .modal-footer{
    text-align: center;
    size: 100px;
  }
    </style>
<body>
    <div class="navbar">
        <!-- <a  href="adminhome.php"><i class="fa fa-fw fa-home"></i> Admin Home Page </a>  --> 
        <a class="active" href="registration2.php"  ><i class="fa fa-fw fa-user"></i> Add Users</a>  
        <a  href="" ><i class="fa fa-fw fa-user"></i> Add District </a> 
        <a  href="" ><i class="fa fa-fw fa-user"></i> Add Department </a> 
        <a href="login.php" style="float: right;"><i class="fa fa-sign-out"></i>Logout</a>
        </div>
<div class="a">
<form class="form-login" name="forgot" method="post">
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-header">
<h3 class="modal-title"> Department User Creation</h4>
</div>
<div class="modal-body">
		    <p>Enter the details to create a new user</p>
		    <input type="name" name="name" placeholder="Name" autocomplete="off" class="form-control" required><br>
		    <input type="email" name="email" placeholder="Email ID" pattern=".+@gmail\.com" autocomplete="off" class="form-control" required><br >
		    <input type="text" name="contact" placeholder="Contact Number" maxlength="10" minlength="10" autocomplete="off" class="form-control" required><br>
		    <input type="password" class="form-control" placeholder="Password"  minlength="6" id="password" name="password"  required ><br />
		    <input type="password" class="form-control unicase-form-control text-input" minlength="6" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword"  required >
                
                  <br>     
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
          
        Select Your Department<br>
        <select class="form-control" id="department" name = "deptid">
        	<option value="">Select Department</option>
            
        </select>

    </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-theme" type="submit" name="btnsubmit" onclick="return valid();">Submit</button> <!--name was change---> 
                </div>
            </div>
        </div>
        
    </form>
</div>
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
</body>
</html>

<?php


}

?>

