<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once '..\assets/cdnjs/toplink.php'; ?>   
    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>


</head>
<body>
<?php include '..\sidenav/index.php'; ?>

<div class="col-md-12">
    <div class="card mt-5">
        <div class="card-body">
            <div class="row p-3">
              <a href="form.php" name="addbook" class="btn btn-primary cols col-2 p-2" style="float: right;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Register Borrower</a>
    
            </div>
        <table id="datatableid" class="table table-bordered table-primary col-md-12">
        <thead>
            <tr>
                <th>Academic</th>
                <th>School ID</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Phone</th>
                <th>E-mail</th>
								<th ><p style="float: right;">Action</p></th>
               
            </tr>
        </thead>
        <tbody>
				<?php 																																							
							$query = "SELECT `id`, `academic`, concat(`f_name`,' ', `m_name`,' ', `l_name`) as userinfo, `school_id`, `course`, `phone`, `email` FROM borrower";
							$result = mysqli_query($conn, $query); 
																																																
							while($row = mysqli_fetch_array($result)) { $id =$row["id"]; ?> 
            <tr>
                <td><?php echo  $row["academic"]; ?></td>
                <td><?php echo  $row["school_id"]; ?></td>
                <td><?php echo  $row["userinfo"]; ?></td>
                <td><?php echo  $row["course"]; ?></td>
                <td><?php echo  $row["phone"]; ?></td>
                <td><?php echo  $row["email"]; ?></td>

								<td><?php echo "<a class='btn btn-danger btn-d ' onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='process.php?delete=".$row['id']."'>"; ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
														<a href="form.php?edit=<?php echo $row["id"];?>" class="btn btn-warning btn-e"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a> 
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
            searchPlaceholder: "Search Record",
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