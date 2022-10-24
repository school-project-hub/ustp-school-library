<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lend a book</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once '..\assets/cdnjs/toplink.php'; ?>   
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>


</head>
<body>
<?php include '..\sidenav/index.php'; ?>
<div class="col-md-6">
    <div class="p-5">
        <div class="card-body">
            <div class="card-title"><h3>LEND A BOOK HERE </h3>
            <div class="lend">
                <P>BOOK DETAILS</P>
                <div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" placeholder="CALL NO." name="callno">
								<label for="floatingInput">Call No.</label>
							</div>

							<form action="process.php" method="post">
							<div class="details">
							<b>Call No. :</b> </br>
							<b>Author :</b></br>
							<b>Title :</b></br>
							<hr class="divider">
							</div>

            </div></div>
            <div class="return">
						<div class="lend">
                <P>BORROWER</P>
                <div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" placeholder="CALL NO." name="student_id">
								<label for="floatingInput">STUDENT ID</label>
							</div>

							<div class="details">
							<b>Academic :</b> </br>
							<b>School ID :</b></br>
							<b>Name :</b></br>
							<b>Course :</b></br>
							<b>Contact :</b></br>
							<hr class="dropdown-divider">
							</div>
	<button class="btn btn-primary" style="float: right;">CONFIRM <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
  <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> </button>
</form>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card mt-5">
        <div class="card-body">
            <div class="row p-3">
              <h3>Borrowed Books</h3>
    
            </div>
        <table id="datatableid" class="table table-bordered table-primary col-md-12">
        <thead>
            <tr>
                <th>Call No.</th>
                <th>Author</th>
                <th>Title</th>
								<th ><p style="float: right;">Action</p></th>
               
            </tr>
        </thead>
        <tbody>
				<?php 																																							
							$query = "SELECT * FROM book";
							$result = mysqli_query($conn, $query); 
																																																
							while($row = mysqli_fetch_array($result)) { $id =$row["id"]; ?> 
            <tr>
                <td><?php echo  $row["call_no"]; ?></td>
                <td><?php echo  $row["author"]; ?></td>
                <td><?php echo  $row["title"]; ?></td>
								<td>
										<a href="form.php?edit=<?php echo $row["id"];?>" class="btn btn-warning btn-e"> Return book</a> 
                            </td>
               
            </tr>
								<?php }?>
        </tbody>
      
    </table>


        </div>
    </div>
</div>
 
<?php require_once '..\assets/cdnjs/index.php'; ?>
<script>
    $(document).ready(function () {
    $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search",
        }
    });
});
</script>
</body>
</html>
<style>
  .btn-d, .btn-e{
    float: right;
    margin-right: 2%;
  }
	.details{
		margin-left: 2%;
	}
</style>