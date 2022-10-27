<?php
session_start();
if(isset($_POST["btn-cpw"])){
  require_once "..\config/index.php";
  	$cpw = md5($_POST['cpw']);
    $npw = md5($_POST['npw']);
    $fpw = md5($_POST['fpw']);

    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `pw` = '$cpw' ");
    $rows = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);

		if($npw == $fpw){//confirm

    if($rows > 0){ //query
			$query2 = "UPDATE `user` SET `pw`='$fpw' ";
      $result2 = mysqli_query($conn, $query2); 	
        if($result2 ==true){							
          echo "<script>alert('Updated Successfully!'); window.location.href='index.php';</script>";
              }
          else{ echo "<script>alert('Updating password failed!'); window.location.href='index.php';</script>";
					}
    
                }   //query          
                else{
                    echo "<script>alert('Incorrect current password! please try again.');window.location.href='index.php'; </script>";   
                }
							}//confirm
							else{
								echo "<script>alert('Password not match! Please try again.'); window.location.href='index.php';</script>";
							}
}
?> 