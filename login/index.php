<?php
session_start();
if(isset($_POST["btn-login"])){
  require_once "..\config/index.php";
  	$username = $_POST['username'];
    //$pw = md5($_POST['pw']);
		$pw =$_POST['pw'];
                    
    $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username' AND `pw` = '$pw' ");
    $rows = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
       if($rows > 0){
          $_SESSION['id_user'] = $fetch['id'];
          header("location: ..\dashboard/index.php");
                    }else{
                      echo "<script>alert('Incorrect Username or Password! Try again.'); window.location.href='../index.php';</script>";                              
                        }
                    }
?> 