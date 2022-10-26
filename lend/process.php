<!--borrow -->
<?php

if(isset($_POST["btn-borrow"])){
	require_once "../config/index.php";
	$bookid = $_POST['bookid'];
	$borrowerid = $_POST['borrowerid'];
	
	$sql = " INSERT INTO `borrowed`( `id_book`, `id_borrower`, `status`)  VALUES ('$bookid','$borrowerid', 'BORROWED') ";
	if ($conn->query($sql) === TRUE) {
		header("location: index.php");
	} else {
		echo "<script>alert('Empty action.'); window.location.href='index.php';</script>";
	}}

?>
<!--return -->
<?php
session_start();
require_once "../config/index.php";
	if(isset($_GET['return_id'])){
                          
		$id =$_GET['return_id'];  
		$assisted_by = $_SESSION['librarian'];
             
           date_default_timezone_set('Asia/Manila');
           $date = new DateTime();
           $result = $date->format('Y-m-d H:i:s');
           if ($result) {
            echo $result;
          } else { // format failed
            echo "Unknown Time";
          }             

		  $query = " UPDATE `borrowed` SET `assisted_by`='$assisted_by',`status`='RETURNED', `date_returned` = '$result' WHERE id = '$id' ";
		$result = mysqli_query($conn, $query); 	
		  if($result ==true){							
						  header('location: index.php');
							}
							else{ echo "<script>alert('Invalid Action'); window.location.href='index.php';</script>";}
						}

?>