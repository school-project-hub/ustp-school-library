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
								<div class="profile p-5">
											<?php      
											echo $_SESSION['school_id'].'</br>';      
											 echo $_SESSION['librarian'];                
											?> 
											</div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>