<?php
@session_start();
include ("../common/db.php");


if(isset($_POST['submit'])){

				unset($_SESSION["publicuserisloggedin"]);
				$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
				$formpassword = mysqli_real_escape_string($conn, $_POST['password']);

				 $sql2 = "SELECT * FROM public_user_master WHERE emailId = '".$email."'";

				$res = $conn->query($sql2);
				if ($res->num_rows>0)							/*If a user is found(after registration)*/
						 {
						 	
						 	 		$row = $res->fetch_assoc();

						 	 		
						 	 		$dbpass =  $row['password'];
						 	 		 "<br/>".$formpassword;

							 	 	if (password_verify($formpassword, $dbpass)) {
							 	 		
							 	 	$_SESSION["publicuserisloggedin"] = 1; 
						 	 		$_SESSION["publicuserid"] = $row ['id'];
	    							header("location:home.php");
	    							}

									else {
										
	 							   echo 'Invalid credentials.';
	 							   echo "<br>";
	 							   echo "<a href = 'login.php'> Go back </a>";
											}

						 
						 }
				else {
					
				echo "user not found <br>";

			 	echo "<a href = 'registration1.php'> Register for an account </a>";
			 	echo "<br>";
			 	 }		 	 
}

	if (!isset($_SESSION["publicuserisloggedin"]))
		{
				
		echo "You are not authorised <br>";
     	echo "<a href = 'login.php'> Login to continue </a>";
     	exit();
		}
?>

















