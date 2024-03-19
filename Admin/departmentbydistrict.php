<?php
include ("../common/db.php");
$districtId = $_POST["districtId"];
$sql = "SELECT * FROM departmentmaster  where districtId = $districtId";
$res = $conn->query($sql);

while($row = mysqli_fetch_assoc($res)) {
?>
<option value="<?php echo $row["deptId"];?>"><?php echo $row["deptName"];?></option>
<?php
}
?>