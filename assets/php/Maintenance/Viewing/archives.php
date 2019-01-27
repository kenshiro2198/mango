<?php
include('assets/php/connection.php');

$sqlgrade = 'SELECT * FROM grade_tbl WHERE archive=1';
$resultgrade = mysqli_query($conn, $sqlgrade);


$gradeA = '';
while($rowgrade = mysqli_fetch_array($resultgrade))
{
	$gradeA .= '<tr>
				<td>'.$rowgrade['grade_name'].'</td>
				</tr>';
}
$gradeA .= '';

$sqlsection = 'SELECT * from section_tbl WHERE archive=1';
$resultsection = mysqli_query($conn, $sqlsection);

$sectionA = '';
while($rowsection = mysqli_fetch_array($resultsection))
{
	$sqlgradeS = 'SELECT * FROM grade_tbl WHERE grade_id='.$rowsection['grade_id'].'';
	$resultgradeS = mysqli_query($conn, $sqlgradeS);
	$rowgradeS = mysqli_fetch_array($resultgradeS);

	$sectionA .= '<tr>
					<td>'.$rowsection['section_name'].'</td>
					<td>'.$rowgradeS['grade_name'].'</td>
				  </td>';
}
$sectionA .= '';

$sqlsubject = 'SELECT * FROM subject_tbl WHERE archive=1';
$resultsubject = mysqli_query($conn, $sqlsubject);

$subjectA = '';
while($rowsubject = mysqli_fetch_array($resultsubject))
{
	$subjectA .= '<tr>
					<td>'.$rowsubject['subject_name'].'
				  </tr>';
}

$subjectA .= '';

$sqlroom = 'SELECT * FROM room_tbl WHERE archive=1';
$resultroom = mysqli_query($conn, $sqlroom);

$roomA = '';
while($rowroom = mysqli_fetch_array($resultroom))
{
	$roomA .= '<tr>
				<td>'.$rowroom['room_name'].'
			   </tr>';
}
$roomA .= '';
?>