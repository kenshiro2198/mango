<?php
include('../assets/php/connection.php');

$sql = "SELECT * FROM evaluationtype WHERE id=3";
$result = mysqli_query($conn, $sql);

$num3 = '';
while($row = mysqli_fetch_array($result))
{
	$num3 .= ''.$row['evaluation_weight'].'';
}
$num3 .= '';
?>