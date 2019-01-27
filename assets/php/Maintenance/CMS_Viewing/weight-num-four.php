<?php
include('../assets/php/connection.php');

$sql = "SELECT * FROM evaluationtype WHERE id=4";
$result = mysqli_query($conn, $sql);

$num4 = '';
while($row = mysqli_fetch_array($result))
{
	$num4 .= ''.$row['evaluation_weight'].'';
}
$num4 .= '';
?>