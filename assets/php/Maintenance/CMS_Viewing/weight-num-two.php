<?php
include('../assets/php/connection.php');

$sql = "SELECT * FROM evaluationtype WHERE id=2";
$result = mysqli_query($conn, $sql);

$num2 = '';
while($row = mysqli_fetch_array($result))
{
	$num2 .= ''.$row['evaluation_weight'].'';
}
$num2 .= '';
?>