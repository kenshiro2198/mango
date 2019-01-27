<?php
include('connection.php');

if(isset($_GET['delete']))
{
	$id = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_GET['id']))));
	$totalnum = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_GET['totalnum']))));
	$evalstype = stripslashes(trim(htmlspecialchars(mysqli_real_escape_string($conn, $_GET['evalstype']))));
	
	$sql = "UPDATE questionarea_tbl SET archive=1 WHERE area_id=". $id;
	mysqli_query($conn, $sql);
	
	$sql1 = "UPDATE evalstype_tbl SET weight_num='{$totalnum}' WHERE evalstype_id=". $evalstype;
	mysqli_query($conn, $sql1);

	$sql2 = "UPDATE evalsform_tbl SET archive=1 WHERE area_id=". $id;
	mysqli_query($conn, $sql2);
}
?>