<?php
session_start();
if(isset($_POST["btn-login"])){
  require_once "..\config/index.php";
  	$username = $_POST['username'];
    //$pw = md5($_POST['pw']);
		$pw =$_POST['pw'];
                    
    $query = mysqli_query($conn, "SELECT `id`, concat(`f_name`,' ', `m_name`,' ', `l_name`) as librarian, `username`, `pw`,school_id, `birth`, `sex`, `phone`, `email`  FROM `user` WHERE `username` = '$username' AND `pw` = '$pw' ");
    $rows = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
       if($rows > 0){
          $_SESSION['id_user'] = $fetch['id'];
          $_SESSION['librarian'] = $fetch['librarian'];
          $_SESSION['school_id'] = $fetch['school_id'];
          $_SESSION['birth'] = $fetch['birth'];
          $_SESSION['sex'] = $fetch['sex'];
          $_SESSION['phone'] = $fetch['phone'];
          $_SESSION['email'] =  $fetch['email'];
          header("location: ..\dashboard/index.php");
                    }else{
                      echo "<script>alert('Incorrect Username or Password! Try again.'); window.location.href='../index.php';</script>";                              
                        }
                    }
?> 