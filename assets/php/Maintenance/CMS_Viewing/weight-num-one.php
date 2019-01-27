<?php
include('../assets/php/connection.php');

$sql = "SELECT * FROM evaluationtype WHERE id=1";
$result = mysqli_query($conn, $sql);

$num1 = '';
while($row = mysqli_fetch_array($result))
{
	$num1 .= ''.$row['evaluation_weight'].'';
}
$num1 .= '';
?>