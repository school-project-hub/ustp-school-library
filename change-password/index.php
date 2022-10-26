<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>
</head>
<body>
<?php include '..\sidenav/index.php'; ?>

<div class="col-md">
    <div class="card">
        <div class="card-body ">
            <div class="card-title mb-5">
                <h1>CHANGE PASSWORD</h1>
            </div>
            <center>
                <form action="process.php" method="post">
            <div class="content col-md-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Current password</span>
                <input name="cpw" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">New password</span>
                <input name="npw" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Confirm password</span>
                <input name="fpw" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"required>
            </div>
            <button name="btn-cpw" class="btn btn-warning "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg> Save changes</button>
            </div>
            </form></center>
            
        </div>
    </div>
</div>
    
</body>
</html>

<style>
    .btn{
        font-size: larger;
        font-weight: bolder;
    }
</style>