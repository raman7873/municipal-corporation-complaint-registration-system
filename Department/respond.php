<?php
@session_start();
include ("../common/db.php");
include("usercheck.php");
/*print_r($_POST);      (Learn this once) */


if(isset($_POST["btnsubmit1"]))
{	
		$id =  $_POST['id'];				
		$response = $_POST['response'];
		$status = $_POST['status'];
		$responseby = $_SESSION["deptuserid"];

	 $sql6 = "INSERT INTO  `response` (`complaintId`, `response`,`status`, `responseBy`, `responseDate`) VALUES ('$id', '$response','$status', $responseby,now())";

	$res6 = $conn->query($sql6); 

	$sql7 = "UPDATE complaint SET statusId = $status WHERE complaintId = $id "; 
	$res7 = $conn->query($sql7);

	if($res6 && $res7 ){ 
		echo "<br>";
		echo "Updated Succesfully";
		echo "<br>";
		echo "<br>";
		echo "<a href= 'showcomplaints.php'>Go back to Complaints Page </a>";
	}

}
elseif (isset($_POST["response"])) {
$sql4 = "SELECT * from vwcomplaint WHERE complaintId = ".$_POST['id'];  
$res4 = $conn->query($sql4);
$row2=$res4->fetch_assoc();
?>
<center><h1 style="color: tomato;"><b>Respond Complaints </b></h2></center>
    <br><br><br>
    <form method="post">
    <table border="10px solid black" align="center">

    <input name = 'id' type='hidden' value="<?php echo $row2['complaintId'];?>" >
	<tr><th>Complaint Id</th>
		<?php
 echo "<td>".$row2['complaintId']."</td></tr>";
 		?>

	<tr><th>Narration</th>
	<?php
 echo "<td>".$row2['complaintNarration']."</td></tr>";
 		?>	


	<tr><th>Response</th>
	<?php
 echo "<td><textarea name ='response'></textarea></td></tr>";
 		?>	

	<tr><th>Status</th>
			<td>
			<select class="form-control" name="status">
			<option value="">Select Status</option>
            <?php
            
			$sql5 = "SELECT * FROM statusmaster";
			$res5 = $conn->query($sql5);

			while($row3 = mysqli_fetch_array($res5)) {
			?>
			<option value="<?php echo $row3["statusId"];?>"><?php echo $row3["status"];?></option>
			<?php
			}
			?>
			</select>
			</td>      
</tr>

             <tr>       
             	<td>
            <button class="btn btn-theme" type="submit" name="btnsubmit1" value="submit" onclick="return valid();">Submit</button> <!--name was change---> </td></tr>
</table>
</form>
<?php
}

?>


