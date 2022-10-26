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
            <form action="process.php" method="post">
            <div class=""style=" display: flex; align-items: center; justify-content: center; ">
            <div class="card col-md-6" >
                <div class="card-body ">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">School ID</label>
                    </div>                   
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">First name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Middle name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Last name</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password" min="1980-01-30" max="2050-01-30">
                    <label for="floatingPassword">birth</label>
                    </div>
                    <c>GENDER: &nbsp;&nbsp;&nbsp;</c>
                    <div class="form-check form-check-inline">                       
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">MALE</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">FEMALE</label>
                    </div>

                    
                    <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary" style="float: right;" name="btn-register">REGISTER</button>
                </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>