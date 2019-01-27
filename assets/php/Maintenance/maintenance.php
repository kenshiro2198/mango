<?php
session_start();
include('../connection.php');
$schoolyear = $_SESSION['schoolyear'];
// 1 = add; 2 = edit; 3 = delete; 4 = inactive; 5 = active;

//Schoolyear
	//add
	//edit
	//delete
	//update active
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Department
	if (isset($_POST['department'])){
		//add
			if($_POST['department'] == 1)
			{
				$department = mysqli_real_escape_string($conn, $_POST['depta']);
			    // $schoolyear = mysqli_real_escape_string($conn, $_POST['department_sy']);
			    $schoolyear = 1;
				$countdepartmentsql = "SELECT COUNT(*) AS countdepartment FROM department WHERE department_name = '$department' AND delete_flag = 0";
				$countdepartmentres = mysqli_query($conn,$countdepartmentsql);
				$countdepartmentfet = mysqli_fetch_assoc($countdepartmentres);
				if ($countdepartmentfet['countdepartment'] == 1 ) {
					include('Department/exist.php');
				}
				elseif ($countdepartmentfet['countdepartment'] == 0 ) {
					$sql = "INSERT INTO department (department_name,active,schoolyear_id,created_by,updated_at) VALUES ('$department',1,'$schoolyear','{$_SESSION['id']}',CURRENT_TIMESTAMP)";
					mysqli_query($conn,$sql);
					include('Department/add.php');
				}
			}
		//edit
			if($_POST['department'] == 2)
			{
				$department = mysqli_real_escape_string($conn, $_POST['dept']);
				$substring = substr($_POST['aid'], 5);
				$active = mysqli_real_escape_string($conn, $substring);
						$countdepartmentsql = "SELECT COUNT(*) AS countdepartment FROM department WHERE department_name = '$department'";
						$countdepartmentres = mysqli_query($conn,$countdepartmentsql);
						$countdepartmentfet = mysqli_fetch_assoc($countdepartmentres);
						$departmentsql = "SELECT * FROM department WHERE department = '$active'";
						$departmentres = mysqli_query($conn,$departmentsql);
						$departmentfet = mysqli_fetch_assoc($departmentres);
				$Previous_Department = $departmentfet['department_name'];
						if ($countdepartmentfet['countdepartment'] == 1) {
							include('Department/exist.php');
						}
						elseif ($countdepartmentfet['countdepartment'] == 0 ) {
							$sql = "UPDATE department SET department_name = '$department', updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active'";
							mysqli_query($conn,$sql);
							include('Department/update.php');
						}


			}
		//delete
			if ($_POST['department'] == 3) {
				$checkArr = $_POST['checkArr'];
				$archiveID = "(";
					$i = 1;
					$count = count($checkArr);
					foreach($checkArr as $arr){
						$archiveID .= $arr;

						if($i < $count){
							$archiveID .= ',';
						} else if($i == $count){
							$archiveID .= ')';
						}
						$i++;
					}
					$sql = "UPDATE department SET delete_flag = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id IN $archiveID";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
				include('Department/delete.php');
			}
		//update active
			if ($_POST['department'] == 4) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE department SET active = 0, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
			if ($_POST['department'] == 5) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE department SET active = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Grade
	if (isset($_POST['grade'])){
		//add
			if($_POST['grade'] == 1)
			{
				$grade = mysqli_real_escape_string($conn, $_POST['gra']);
			    // $schoolyear = mysqli_real_escape_string($conn, $_POST['grade_sy']);
			    $schoolyear = 1;
				$countgradesql = "SELECT COUNT(*) AS countgrade FROM grade WHERE grade_name = '$grade' AND delete_flag = 0";
				$countgraderes = mysqli_query($conn,$countgradesql);
				$countgradefet = mysqli_fetch_assoc($countgraderes);
				if ($countgradefet['countgrade'] == 1 ) {
					include('Grade/exist.php');
				}
				elseif ($countgradefet['countgrade'] == 0 ) {
					$sql = "INSERT INTO grade (grade_name,schoolyear_id,created_by,updated_by) VALUES ('$grade','$schoolyear','{$_SESSION['id']}',CURRENT_TIMESTAMP)";
					mysqli_query($conn,$sql);
			
					include('Grade/add.php');
				}
			}
		//edit
			if($_POST['grade'] == 2)
			{
				$grade = mysqli_real_escape_string($conn, $_POST['gr']);
				$substring = substr($_POST['aid'], 3);
				$active = mysqli_real_escape_string($conn, $substring);
						$countgradesql = "SELECT COUNT(*) AS countgrade FROM grade WHERE grade_name = '$grade'";
						$countgraderes = mysqli_query($conn,$countgradesql);
						$countgradefet = mysqli_fetch_assoc($countgraderes);
						$gradesql = "SELECT * FROM grade WHERE id = '$active'";
						$graderes = mysqli_query($conn,$gradesql);
						$gradefet = mysqli_fetch_assoc($graderes);
				$Previous_Grade = $gradefet['grade_name'];
						if ($countgradefet['countgrade'] == 1) {
							include('Grade/exist.php');
						}
						elseif ($countgradefet['countgrade'] == 0 ) {
							$sql = "UPDATE grade SET grade_name = '$grade', updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active'";
							mysqli_query($conn,$sql);
									echo mysqli_error($conn);
							include('Grade/update.php');

						}


			}
		//delete
			if ($_POST['grade'] == 3) {
				$checkArr = $_POST['checkArr'];
				$archiveID = "(";
					$i = 1;
					$count = count($checkArr);
					foreach($checkArr as $arr){
						$archiveID .= $arr;

						if($i < $count){
							$archiveID .= ',';
						} else if($i == $count){
							$archiveID .= ')';
						}
						$i++;
					}
					$sql = "UPDATE grade SET delete_flag = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id IN $archiveID";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
				include('Grade/delete.php');
			}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Section
	if (isset($_POST['section'])){
		//add
			if($_POST['section'] == 1)
			{
				$section = mysqli_real_escape_string($conn, $_POST['sc']);
				$grade = mysqli_real_escape_string($conn, $_POST['gr']);
			    // $schoolyear = mysqli_real_escape_string($conn, $_POST['grade_sy']);
			    $schoolyear = 1;
				$countsectionsql = "SELECT COUNT(*) AS countsection FROM section WHERE section_name = '$section' AND delete_flag = 0";
				$countsectionres = mysqli_query($conn,$countsectionsql);
				$countsectionfet = mysqli_fetch_assoc($countsectionres);
				if ($countsectionfet['countsection'] == 1 ) {
					include('Section/exist.php');
				}
				elseif ($countsectionfet['countsection'] == 0 ) {
					$sql = "INSERT INTO section (section_name,grade_id,active,schoolyear_id,created_by,updated_at) VALUES ('$section','$grade',1,'$schoolyear','{$_SESSION['id']}',CURRENT_TIMESTAMP)";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
					include('Section/add.php');
				}

			}
		//edit
			if($_POST['section'] == 2)
			{
				$section = mysqli_real_escape_string($conn, $_POST['sc']);
				$grade = mysqli_real_escape_string($conn, $_POST['gr']);
				$substring = substr($_POST['aid'], 3);
				$active = mysqli_real_escape_string($conn, $substring);
						$countsectionsql = "SELECT COUNT(*) AS countsection FROM section WHERE section_name = '$grade' AND delete_flag = 0";
						$countsectionres = mysqli_query($conn,$countsectionsql);
						$countsectionfet = mysqli_fetch_assoc($countsectionres);
						$sectionsql = "SELECT * FROM section WHERE id = '$active'";
						$sectionres = mysqli_query($conn,$sectionsql);
						$sectionfet = mysqli_fetch_assoc($sectionres);
						$gradesql = "SELECT * FROM grade WHERE id = '{$sectionfet['grade_id']}'";
						$graderes = mysqli_query($conn,$gradesql);
						$gradefet = mysqli_fetch_assoc($graderes);
				$Previous_Section = $sectionfet['section_name'];
				$Previous_Grade = $gradefet['grade_name'];
						if ($countsectionfet['countsection'] == 1) {
							include('Section/exist.php');
						}
						elseif ($countsectionfet['countsection'] == 0 ) {
							$sql = "UPDATE section SET section_name = '$section',grade_id = '$grade', updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active'";
							mysqli_query($conn,$sql);
							echo mysqli_error($conn);
							include('Section/update.php');
						}


			}
		//delete
			if ($_POST['section'] == 3) {
				$checkArr = $_POST['checkArr'];
				$archiveID = "(";
					$i = 1;
					$count = count($checkArr);
					foreach($checkArr as $arr){
						$archiveID .= $arr;

						if($i < $count){
							$archiveID .= ',';
						} else if($i == $count){
							$archiveID .= ')';
						}
						$i++;
					}
					$sql = "UPDATE section SET delete_flag = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id IN $archiveID";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
				include('Section/delete.php');
			}
		//update active
			if ($_POST['section'] == 4) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE section SET active = 0, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
			if ($_POST['section'] == 5) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE section SET active = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Subject
	if (isset($_POST['subject'])){
		//add
			if($_POST['subject'] == 1)
			{
				$subject = mysqli_real_escape_string($conn, $_POST['sb']);
				$grade = mysqli_real_escape_string($conn, $_POST['gr']);
			    // $schoolyear = mysqli_real_escape_string($conn, $_POST['grade_sy']);
			    $schoolyear = 1;
				$countsubjectsql = "SELECT COUNT(*) AS countsubject FROM subject WHERE subject_name = '$subject' and grade_id = '$grade' AND delete_flag = 0";
				$countsubjectres = mysqli_query($conn,$countsubjectsql);
				$countsubjectfet = mysqli_fetch_assoc($countsubjectres);
				if ($countsubjectfet['countsubject'] == 1 ) {
					include('Subject/exist.php');
				}
				elseif ($countsubjectfet['countsubject'] == 0 ) {
					$sql = "INSERT INTO subject (subject_name,grade_id,active,schoolyear_id,created_by,updated_at) VALUES ('$subject','$grade',1,'$schoolyear','{$_SESSION['id']}',CURRENT_TIMESTAMP)";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
					include('Subject/add.php');
				}

			}
		//edit
			if($_POST['subject'] == 2)
			{
				$subject = mysqli_real_escape_string($conn, $_POST['sb']);
				$grade = mysqli_real_escape_string($conn, $_POST['gr']);
				$substring = substr($_POST['aid'], 3);
				$active = mysqli_real_escape_string($conn, $substring);
						$countsectionsql = "SELECT COUNT(*) AS countsection FROM section WHERE section_name = '$grade' AND delete_flag = 0";
						$countsectionres = mysqli_query($conn,$countsectionsql);
						$countsectionfet = mysqli_fetch_assoc($countsectionres);
						$sectionsql = "SELECT * FROM section WHERE id = '$active'";
						$sectionres = mysqli_query($conn,$sectionsql);
						$sectionfet = mysqli_fetch_assoc($sectionres);
						$gradesql = "SELECT * FROM grade WHERE id = '{$sectionfet['grade_id']}'";
						$graderes = mysqli_query($conn,$gradesql);
						$gradefet = mysqli_fetch_assoc($graderes);
				$Previous_Section = $sectionfet['section_name'];
				$Previous_Grade = $gradefet['grade_name'];
						if ($countsectionfet['countsection'] == 1) {
							include('Section/exist.php');
						}
						elseif ($countsectionfet['countsection'] == 0 ) {
							$sql = "UPDATE subject SET subject_name = '$subject', grade_id = '$grade', updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active'";
							mysqli_query($conn,$sql);
							include('Subject/update.php');
						}


			}
		//delete
			if ($_POST['subject'] == 3) {
				$checkArr = $_POST['checkArr'];
				$archiveID = "(";
					$i = 1;
					$count = count($checkArr);
					foreach($checkArr as $arr){
						$archiveID .= $arr;

						if($i < $count){
							$archiveID .= ',';
						} else if($i == $count){
							$archiveID .= ')';
						}
						$i++;
					}
					$sql = "UPDATE subject SET delete_flag = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id IN $archiveID";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
				include('Subject/delete.php');
			}
		//update active
			if ($_POST['subject'] == 4) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE subject SET active = 0, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
			if ($_POST['subject'] == 5) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE subject SET active = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active';";
				mysqli_query($conn,$sql);
			}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Room
	if (isset($_POST['room'])){
		//add
			if($_POST['room'] == 1)
			{
				$room = mysqli_real_escape_string($conn, $_POST['rm']);
			    // $schoolyear = mysqli_real_escape_string($conn, $_POST['department_sy']);
			    $schoolyear = 1;
				$countroomsql = "SELECT COUNT(*) AS countroom FROM room WHERE room_name = '$room' AND delete_flag = 0";
				$countroomres = mysqli_query($conn,$countroomsql);
				$countroomfet = mysqli_fetch_assoc($countroomres);
				if ($countroomfet['countroom'] == 1 ) {
					include('Room/exist.php');
				}
				elseif ($countroomfet['countroom'] == 0 ) {
					$sql = "INSERT INTO room (room_name,active,schoolyear_id,created_by,updated_at) VALUES ('$room',1,'$schoolyear','{$_SESSION['id']}',CURRENT_TIMESTAMP)";
					mysqli_query($conn,$sql);
					include('Room/add.php');
				}
			}
		//edit
			if($_POST['room'] == 2)
			{
				$room = mysqli_real_escape_string($conn, $_POST['rm']);
				$substring = substr($_POST['aid'], 3);
				$active = mysqli_real_escape_string($conn, $substring);
						$countroomsql = "SELECT COUNT(*) AS countroom FROM room WHERE room_name = '$room'";
						$countroomres = mysqli_query($conn,$countroomsql);
						$countroomfet = mysqli_fetch_assoc($countroomres);
						$roomsql = "SELECT * FROM room WHERE id = '$active'";
						$roomres = mysqli_query($conn,$roomsql);
						$roomfet = mysqli_fetch_assoc($roomres);
				$Previous_Room = $roomfet['room_name'];
						if ($countroomfet['countroom'] == 1) {
							include('Room/exist.php');
						}
						elseif ($countroomfet['countroom'] == 0 ) {
							$sql = "UPDATE room SET room_name = '$room', updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id = '$active'";
							mysqli_query($conn,$sql);
							include('Room/update.php');
						}
			}
		//delete
			if ($_POST['room'] == 3) {
				$checkArr = $_POST['checkArr'];
				$archiveID = "(";
					$i = 1;
					$count = count($checkArr);
					foreach($checkArr as $arr){
						$archiveID .= $arr;

						if($i < $count){
							$archiveID .= ',';
						} else if($i == $count){
							$archiveID .= ')';
						}
						$i++;
					}
					$sql = "UPDATE room SET delete_flag = 1, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' WHERE id IN $archiveID";
					mysqli_query($conn,$sql);
					echo mysqli_error($conn);
				include('Room/delete.php');
			}
		//update active
			if ($_POST['room'] == 4) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE room SET active = 0 WHERE id, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' = '$active';";
				mysqli_query($conn,$sql);
			}
			if ($_POST['room'] == 5) {
				$active = mysqli_real_escape_string($conn, $_POST['activeid']);
				$sql = "UPDATE room SET active = 1 WHERE id, updated_at = CURRENT_TIMESTAMP, updated_by = '{$_SESSION['id']}' = '$active';";
				mysqli_query($conn,$sql);
			}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Faculty
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Student
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Faculty Loading
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//User Level
	//add
	//edit
	//delete
	//update active
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
//Evaluation
	//add
	//edit
	//delete
	//update active		
?>