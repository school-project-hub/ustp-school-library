<!--borrow -->
<?php
if(isset($_POST["btn-borrow"])){
	require_once "../config/index.php";
	$bookid = $_POST['bookid'];
	$borrowerid = $_POST['borrowerid'];
	
	$sql = " INSERT INTO `borrowed`( `id_book`, `id_borrower`)  VALUES ('$bookid','$borrowerid') ";
	if ($conn->query($sql) === TRUE) {
		header("location: index.php");
	} else {
        die("error " . $conn->connect_error);
	}}

?>
