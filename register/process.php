<!--register user -->
<?php
if(isset($_POST["btn-register"])){
	require_once "../config/index.php";
	$school_id = $_POST['school_id'];
	$f_name = $_POST['fname'];
    $m_name = $_POST['mname'];
    $l_name = $_POST['lname'];
    $birth = $_POST['birth'];
	$sex = $_POST['sex'];   
    $phone = $_POST['phone'];
    $email = $_POST['email'];
	$username = $_POST['username'];
	$pw = md5($_POST['pw']);
	
	$sql = " INSERT INTO `user`( `f_name`, `m_name`, `l_name`, `birth`, `sex`, `phone`, `email`, `school_id`, `username`, `pw`) VALUES 
	('$f_name','$m_name','$l_name','$birth','$sex','$phone','$email','$school_id','$username','$pw') ";
	if ($conn->query($sql) === TRUE) {
		// echo "<script>alert('User Successfully Registered.'); window.location.href='index.php';</script>";
		header('Location: index.php?message=successadd');
	} else {
        echo "<script>alert('School ID or Username Already exist! Please try again.'); window.location.href='index.php';</script>";
	}}

?>