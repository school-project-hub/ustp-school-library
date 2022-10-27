<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>
</head>
<body>

<div class="col-md bg-secondary">
    <div class="p-5">
        <div class="card-body">
            <div class="card-title text-center">
                <h1 class="mb-5">LIBRARY USER REGISTRATION FORM</h1>
            </div>           
            <!-- get message -->
            <?php
            if(isset($_GET['message'])):
            ?>
            <center>
            <div class="alert alert-success text-center col-md-6" role="alert" id="alert" >
                <?php 
                if($_GET['message']== "successadd" ){
                    echo "Successfully Register";
                }
                ?>
            </div>
            </center>
            <?php endif ?>
            <form action="process.php" method="post">
            <div class=""style=" display: flex; align-items: center; justify-content: center; ">
            <div class="card col-md-6" >
                <div class="card-body ">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="school_id" required>
                    <label for="floatingInput">School ID</label>
                    </div>                   
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="fname" required>
                    <label for="floatingPassword">First name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="mname" >
                    <label for="floatingPassword">Middle name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="lname" required>
                    <label for="floatingPassword">Last name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password" min="1980-01-30" max="2050-01-30" name="birth" required>
                    <label for="floatingPassword">Birth date</label>
                    </div>
                    <c>GENDER: &nbsp;&nbsp;&nbsp;</c>
                    <div class="form-check form-check-inline">                       
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="M">
                    <label class="form-check-label" for="inlineRadio1">MALE</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="F">
                    <label class="form-check-label" for="inlineRadio2">FEMALE</label>
                    </div>

                    
                    <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" placeholder="Password" name="phone" required>
                    <label for="floatingPassword">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="Password" name="email" required>
                    <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="username" required>
                    <label for="floatingPassword">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pw" required>
                    <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary" style="float: right;" name="btn-register">REGISTER</button> </br></br>
                    <a href="..\index.php"style="float: right;">Already have an account?</a>
                </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
<script type="text/javascript">
setTimeout (function(){
    document.getElementById("alert").style.display = "none";
}, 3000);
</script>