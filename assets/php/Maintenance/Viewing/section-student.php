<?php
include('assets/php/connection.php');

$sql = "SELECT * FROM section_tbl";
$result = mysqli_query($conn, $sql);

$section = '<select name="sectionId" class="form-control" id="sectionId">';
while($row = mysqli_fetch_array($result))
{
	$section .= '<option value="'.$row['section_id'].'">'.$row['section_name'].'</option>';
}
$section .= '</select>';
?>