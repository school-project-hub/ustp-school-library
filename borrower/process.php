<!--add -->
<?php
if(isset($_POST["btn-add"])){
	require_once "../config/index.php";
	$academic = $_POST['academic'];
		$f_name = $_POST['fname'];
    	$m_name = $_POST['mname'];
      $l_name = $_POST['lname'];
      $school_id = $_POST['school_id'];
      $course = $_POST['course'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
	
	$sql = " INSERT INTO `borrower`( `academic`, `f_name`, `m_name`, `l_name`, `school_id`, `course`, `phone`, `email`) VALUES ('$academic','$f_name','$m_name','$l_name','$school_id','$course','$phone','$email') ";
	if ($conn->query($sql) === TRUE) {
		header("location: index.php");
	} else {
        die("error " . $conn->connect_error);
	}}

?>
<?php
  require "..\config/index.php";
    if(isset($_GET['delete'])){
                          
      $id =$_GET['delete'];  
    	$query = "DELETE FROM borrower WHERE id  = '$id' ";
      $result = mysqli_query($conn, $query); 	
        if($result ==true){							
						header('location: index.php');
                          }
                          else{ echo "<script>alert('Cannot be deleted. This user has active liabilities'); window.location.href='index.php';</script>";}}
?>

