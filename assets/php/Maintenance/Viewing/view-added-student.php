<?php
include('assets/php/connection.php');

$sqlstud = "SELECT * FROM student_tbl WHERE archive=0 ORDER BY lastname";
$resultstud = mysqli_query($conn, $sqlstud);

$viewstudadd = '';
while($rowstud = mysqli_fetch_array($resultstud))
{
	$sqlstud1 = "SELECT * FROM section_tbl WHERE section_id=".$rowstud['section_id']."";
	$resultstud1 = mysqli_query($conn, $sqlstud1);
	$rowstud1 = mysqli_fetch_array($resultstud1);
	
	$viewstudadd .= '<tr id="stud'.$rowstud['User_ID'].'">
				<td><input type="checkbox" class="studCheckBox" name="studCheckBox[]" id="studCheckBox'.$rowstud['User_ID'].'" value="'.$rowstud['User_ID'].'"></td>
                <td id="studIdNumber'.$rowstud['User_ID'].'">'.$rowstud['User_ID'].'</td>
                <td id="studFullName'.$rowstud['User_ID'].'">'.$rowstud['lastname'].', '.$rowstud['firstname'].'  '.$rowstud['middlename'].'</td>
                <td id="studsection'.$rowstud['User_ID'].'">'.$rowstud1['section_name'].'</td>
                <input type="hidden" id="studFname'.$rowstud['User_ID'].'" value="'.$rowstud['firstname'].'">
                <input type="hidden" id="studMname'.$rowstud['User_ID'].'" value="'.$rowstud['middlename'].'">
                <input type="hidden" id="studLname'.$rowstud['User_ID'].'" value="'.$rowstud['lastname'].'">
				<input type="hidden" id="studSection'.$rowstud['User_ID'].'" value="'.$rowstud1['section_id'].'">
				<input type="hidden" id="studImage'.$rowstud['User_ID'].'" value="'.$rowstud['image'].'">
                <td style="display:grid;grid-template-columns:auto auto;">
				<button class="btn btn-primary admin-useroptions viewbtn1" data-id="'.$rowstud['User_ID'].'" name="updatestudBtn">Edit</button>
				<button class="btn btn-primary admin-useroptions viewbtn" data-id="'.$rowstud['User_ID'].'" name="archivestudBtn">Archive</button></td>
				</tr>';
}
$viewstudadd .= '';
?>