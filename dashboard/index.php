<?php require '..\auth/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require '..\sidenav/index.php'; ?>

			<div class="col-md-12">
				<div class="">
					<div class="card-body">
						<div class="card-title">
					<h1 style="font-family: Jazz LET, fantasy; color:GREY;">SCHOOL LIBRARY BOOK BORROWING SYSTEM</h1>
					</div>
					<div class="clock">
			<div class="outer-clock-face">
				<div class="marking marking-one"></div>
				<div class="marking marking-two"></div>
				<div class="marking marking-three"></div>
				<div class="marking marking-four"></div>
					<div class="inner-clock-face">
						<div class="hand hour-hand"></div>
						<div class="hand min-hand"></div>
						<div class="hand second-hand"></div>
					</div>
			</div>
    </div>

		<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
			<a href="..\books/"><img src="..\assets/images/book-lists.png" alt="" class="myIcon"></a>
			<p class="card-text">Books</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
			<a href=""><img src="..\assets/images/borrower.png" alt="" class="myIcon"></a>
			<p class="card-text">Borrower-lists </p>
      </div>
    </div>
  </div>

	<div class="col-sm-3">
    <div class="card">
      <div class="card-body">
			<a href=""><img src="..\assets/images/borrowed.png" alt="" class="myIcon"></a>
			<p class="card-text">Borrowed books </p>
      </div>
    </div>
  </div>


<div class="col-sm-3">
    <div class="card">
      <div class="card-body">
			<a href=""><img src="..\assets/images/returns.png" alt="" class="myIcon"></a>
			<p class="card-text">Returns </p>
      </div>
    </div>
  </div>

</div>

					</div>
				</div>
			</div>	

		<div class="footer">
  <p>All Rights Reserved 	&#174; rRenzoy Developer</p>
</div>

    <script src="index.js"></script>
</body>
</html>