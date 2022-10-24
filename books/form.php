<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once '..\assets/cdnjs/toplink.php'; ?>   
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>


</head>
<body>
<?php include '..\sidenav/index.php'; ?>

<div class="col-md-12">
<?php
          if(isset($_GET['edit'])){
            $id =$_GET['edit'];  

						$query = " SELECT * from book WHERE id = '$id' ";
						$result = mysqli_query($conn, $query); 
          	$row = mysqli_fetch_assoc($result);
          		
            echo '<h1>'."UPDATE BOOK".'</h1>';
          
          ?>
    <div class="card mt-5">    
        <div class="card-body">
        
        <form action="" method="post">
			<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="CALL NO." name="callno" value="<?php echo $row['call_no'];?>">
  <label for="floatingInput">Call No.</label>
</div>
<div class="row">
<div class="form-floating mb-3 cols col-6">
  <input type="text" class="form-control" id="floatingInput" placeholder="AUTHOR" name="author" value="<?php echo $row['author'];?>">
  <label for="floatingPassword">&nbsp;&nbsp;&nbsp; Author</label>
</div>
<div class="form-floating cols col-6">
    <input type="text" class="form-control" id="floatingInput" placeholder="TITLE" name="title" value="<?php echo $row['title']; ?>">
  <label for="floatingPassword"> &nbsp;&nbsp;&nbsp; Title</label>
</div>
</div>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary" style="margin-bottom: 1%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
</svg> Cancel</a>
<button type="submit" class="btn btn-warning" style="margin-left: 1%; margin-right: 1%; margin-bottom:1%;" name="btn-update"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg> Update</button>
				</form>
   <?php }else{ ?>

   <!-- ADD BOOK -->
   <?php
    echo '<h1>'."ADD BOOK".'</h1>';
  ?>
  <div class="card mt-5">    
        <div class="card-body">
   <form action="process.php" method="post">
			<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="CALL NO." name="callno">
  <label for="floatingInput">Call No.</label>
</div>
<div class="row">
<div class="form-floating mb-3 cols col-6">
  <input type="text" class="form-control" id="floatingInput" placeholder="AUTHOR" name="author" >
  <label for="floatingPassword">&nbsp;&nbsp;&nbsp; Author</label>
</div>
<div class="form-floating cols col-6">
  <input type="text" class="form-control" id="floatingInput" placeholder="TITLE" name="title" >
  <label for="floatingPassword"> &nbsp;&nbsp;&nbsp; Title</label>
</div>
</div>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary" style="margin-bottom: 1%;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
</svg> Cancel</a>
        
        <button type="submit" class="btn btn-primary" style="margin-left: 1%; margin-right: 1%; margin-bottom:1%;" name="btn-add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
  <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
  <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
</svg> Save</button>
				</form>
    <?php } ?>

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
            searchPlaceholder: "Search book",
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
</style>
<?php
if(isset($_POST['btn-update']) ) {   
  require "..\config/index.php";
    
		if(isset($_GET['edit'])){        
      	$id =$_GET['edit'];  
	  	$callno = $_POST['callno'];
		$author = $_POST['author'];
    	$title = $_POST['title'];

    	$query2 = "UPDATE `book` SET `call_no`='$callno',`author`='$author',`title`='$title' WHERE `id` = '$id' ";
      $result2 = mysqli_query($conn, $query2); 	
        if($result2 ==true){							
          echo "<script>alert('Updated Successfully!'); window.location.href='index.php';</script>";
              }
          else{ echo "<script>alert('Cannot be Updated. Book is being borrowed'); window.location.href='index.php';</script>";}}}
?>