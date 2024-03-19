<?php
@session_start();
include ("../common/db.php");


if(isset($_POST['submit'])){

				unset($_SESSION["adminisloggedin"]);
				$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
				$formpassword = mysqli_real_escape_string($conn, $_POST['password']);

				 $sql2 = "SELECT * FROM adminmaster WHERE emailId = '".$email."'";

				$res = $conn->query($sql2);
				if ($res->num_rows>0)
						 {
						 	
						 	 $row = $res->fetch_assoc();

						 	 		  $dbpass =  $row['password'];
						 	 		  "<br/>".$formpassword;

							 	 	if ($formpassword==$dbpass) {
							 	 		
							 	 	$_SESSION["adminisloggedin"] = 1; 
						 	 		$_SESSION["adminid"] = $row ['id'];
	    							header("location:registration2.php");
	    							}

									else {
										
	 							   echo 'Invalid credentials.';
	 							   echo "<a href = 'login.php'> Go back </a>";
											}

						 
						 }
				else {
					
				echo "user not found<br> Contact System Administrator";

			 	
			 	 }		 	 
}

	if (!isset($_SESSION["adminisloggedin"]))
		{
			
		echo "You are not authorised <br>";
     	echo "<a href = 'login.php'> Login to continue </a>";
     	exit();
		}
?>

















