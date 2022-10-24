<!--add -->
<?php
if(isset($_POST["btn-add"])){
	require_once "../config/index.php";
	$callno = $_POST['callno'];
	$author = $_POST['author'];
    $title = $_POST['title'];
	
	$sql = " INSERT INTO `book`( `call_no`, `author`, `title`)  VALUES ('$callno','$author','$title') ";
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
    	$query = "DELETE FROM book WHERE id  = '$id' ";
      $result = mysqli_query($conn, $query); 	
        if($result ==true){							
						header('location: index.php');
                          }
                          else{ echo "<script>alert('Cannot be deleted. Book is being borrowed'); window.location.href='index.php';</script>";}}
?>

