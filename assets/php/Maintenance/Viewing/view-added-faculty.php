<?php
include('assets/php/connection.php');

$sqlfac = "SELECT * FROM teacher_tbl WHERE archive=0 ORDER BY lastname";
$resultfac = mysqli_query($conn, $sqlfac);

$viewfacadd = '';
while($rowfac = mysqli_fetch_array($resultfac))
{
	$sqlfac1 = "SELECT * FROM department_tbl WHERE department_id=".$rowfac['department_id']."";
	$resultfac1 = mysqli_query($conn, $sqlfac1);
	$rowfac1 = mysqli_fetch_array($resultfac1);
	
	$viewfacadd .= '<tr id="'.$rowfac['User_ID'].'">
				<td><input type="checkbox" class="facCheckBox" name="facCheckBox[]" id="facCheckBox'.$rowfac['User_ID'].'" value="'.$rowfac['User_ID'].'"></td>
                <td id="facIdNumber'.$rowfac['User_ID'].'">'.$rowfac['User_ID'].'</td>
                <td id="facFullName'.$rowfac['User_ID'].'">'.$rowfac['lastname'].', '.$rowfac['firstname'].'  '.$rowfac['middlename'].'</td>
                <td id="facdept'.$rowfac['User_ID'].'">'.$rowfac1['department_name'].'</td>
                <input type="hidden" id="facFname'.$rowfac['User_ID'].'" value="'.$rowfac['firstname'].'">
                <input type="hidden" id="facMname'.$rowfac['User_ID'].'" value="'.$rowfac['middlename'].'">
                <input type="hidden" id="facLname'.$rowfac['User_ID'].'" value="'.$rowfac['lastname'].'">
				<input type="hidden" id="facDept'.$rowfac['User_ID'].'" value="'.$rowfac1['department_id'].'">
				<input type="hidden" id="facImage'.$rowfac['User_ID'].'" value="'.$rowfac['image'].'">
                <td style="display:grid;grid-template-columns:auto auto;">
				<button class="btn btn-primary admin-useroptions viewbtn1" data-id="'.$rowfac['User_ID'].'" name="updateFacBtn">Edit</button>
				<button class="btn btn-primary admin-useroptions viewbtn" data-id="'.$rowfac['User_ID'].'" name="archiveFacBtn">Archive</button></td>
				</tr>';
}
$viewfacadd .= '';
?>