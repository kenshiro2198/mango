<?php
include('assets/php/connection.php');

$sql = "SELECT * FROM department_tbl";
$result = mysqli_query($conn, $sql);

$dept = '<select name="departmentId" class="form-control" id="departmentId">';
while($row = mysqli_fetch_array($result))
{
	$dept .= '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
}
$dept .= '</select>';
?>