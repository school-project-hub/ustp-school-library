<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
 
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>
</head>
<body>
<?php include '..\sidenav/index.php'; ?>

<div class="col-md">
    <div class="card">
        <div class="cardbody">
            <div class="row">
                <div class="card-title text-center">
                    <h1>MY ACCOUNT</h1>
										<div class="content">
											<img src="..\assets/images/user.png" style="margin: 0; height:20vh;" alt="" srcset="">
											
										</div>
                </div>
								<div class="profile p-5 container-fluid col-md-5 text-default p-5 ">
											<?php   
                                            echo 'School ID:';
											echo '<b class="profileinfo">'. $_SESSION['school_id'].'</b>'.'</br>';      
											echo 'Name:';
                                            echo '<b class="profileinfo">'. $_SESSION['librarian'].'</b>'.'</br>';
                                             echo 'Birth date: ';
                                             echo '<b class="profileinfo">'. $_SESSION['birth'].'</b>'.'</br>';
                                             echo 'Gender:';
                                             if($_SESSION['sex'] == "M"){
                                                echo '<b class="profileinfo">'."MALE".'</b>'.'</br>';
                                             }if($_SESSION['sex'] == 'F'){
                                                echo '<b class="profileinfo">'."FEMALE".'</b>'.'</br>';
                                             }
                                             echo 'Phone:';
                                             echo '<b class="profileinfo">'.$_SESSION['phone']   .'</b>'.'</br>';    
                                             echo 'Email:';
                                             echo '<b class="profileinfo">'.$_SESSION['email']    .'</b>'.'</br>' ; 
											?> 
											</div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

<style>
 .profile{
    background-color: lightblue;
    font-size: large;
    border-radius: 10px;
 }
 .profileinfo{
    float: right;
 }
</style>