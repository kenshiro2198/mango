<?php
session_start();include('connection.php');$un=mysqli_escape_string($conn,$_POST['username']);$pw2=mysqli_escape_string($conn,$_POST['password']);$pw=mysqli_escape_string($conn,password_hash($_POST['password'],PASSWORD_BCRYPT));$usersql="SELECT * FROM user WHERE user_id = '$un' || user_name = '$un' ";$userres=mysqli_query($conn,$usersql);$userfet=mysqli_fetch_assoc($userres);$usercount=mysqli_num_rows($userres);$sql="UPDATE user SET active = 1, password = '$pw',updated_by = '{$userfet['id']}' WHERE user_id = '$un' ";$versql="SELECT COUNT(active) FROM user WHERE active = 0 AND id = '$un' ";$verres=mysqli_query($conn,$versql);$vercount=mysqli_num_rows($verres);echo $userfet['usertype_id'];if($vercount==1){if($usercount==1){if(mysqli_query($conn,$sql)){$users="SELECT * FROM user WHERE user_id = '$un' || user_name = '$un' ";$userr=mysqli_query($conn,$users);$user=mysqli_fetch_assoc($userr);$username=$user['User_ID'];$usertypecount=$user['usertype_id'];$studsql="SELECT * FROM student WHERE user_id = '$username'";$studres=mysqli_query($conn,$studsql);$faculsql="SELECT * FROM teacher WHERE user_id = '$username'";$faculres=mysqli_query($conn,$faculsql);$guidsql="SELECT * FROM guidance WHERE user_id = '$username'";$guidres=mysqli_query($conn,$guidsql);$adminsql="SELECT * FROM admin WHERE user_id = '$username'";$adminres=mysqli_query($conn,$adminsql);if($user['usertype_id']==1){if(password_verify($pw2,$user['password'])){$student=mysqli_fetch_assoc($studres);setcookie('Username',$student['user_id'],time()+60*60*7);$_SESSION['user']=$_COOKIE['Username'];$_SESSION['login']=true;$_SESSION['usertype']=$user['usertype_id'];$_SESSION['name']=$student['firstname'];$_SESSION['username']=$username;$_SESSION['user_id']=$user['user_id'];$_SESSION['unique_id']=$user['unique_id'];$_SESSION['id']=$user['id'];header("Location:../../home");}else {header("Location:../../login?Login_Attempt=1");}}elseif($user['usertype_id']==2){if(password_verify($pw2,$user['password'])){$faculty=mysqli_fetch_assoc($faculres);setcookie('Username',$faculty['user_id'],time()+60*60*7);$_SESSION['user']=$_COOKIE['Username'];$_SESSION['login']=true;$_SESSION['usertype']=$user['usertype_id'];$_SESSION['name']=$faculty['firstname'];$_SESSION['username']=$username;$_SESSION['user_id']=$user['user_id'];$_SESSION['unique_id']=$user['unique_id'];$_SESSION['id']=$user['id'];header("Location:../../home");}else {header("Location:../../login?Login_Attempt=1");}}elseif($user['usertype_id']==3){if(password_verify($pw2,$user['password'])){$guidance=mysqli_fetch_assoc($guidres);setcookie('Username',$guidance['User_ID'],time()+60*60*7);$_SESSION['user']=$_COOKIE['Username'];$_SESSION['login']=true;$_SESSION['usertype']=$user['usertype_id'];$_SESSION['name']=$guidance['firstname'];$_SESSION['username']=$username;$_SESSION['user_id']=$user['user_id'];$_SESSION['unique_id']=$user['unique_id'];$_SESSION['id']=$user['id'];header("Location:../../home");}else {header("Location:../../login?Login_Attempt=1");}}elseif($user['usertype_id']==4){if(password_verify($pw2,$user['password'])){$admin=mysqli_fetch_assoc($adminres);setcookie('Username',$admin['User_ID'],time()+60*60*7);$_SESSION['user']=$_COOKIE['Username'];$_SESSION['login']=true;$_SESSION['usertype']=$user['usertype_id'];$_SESSION['name']=$admin['firstname'];$_SESSION['username']=$username;$_SESSION['user_id']=$user['user_id'];$_SESSION['unique_id']=$user['unique_id'];$_SESSION['id']=$user['id'];header("Location:../../admin");}else {header("Location:../../login?Login_Attempt=1");}}else {echo "error";}}}else{echo "here";}}elseif($vercount!=1){mysqli_error($conn);header("Location:../../register?Register-Attempt=1");}?>