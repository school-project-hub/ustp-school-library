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
<h1> REPORTS</h1>
    <div class="card mt-5">
       
        <div class="card-body">
            <div class="row p-3">
              
    
            </div>
        <table id="datatableid" class="table table-bordered table-primary col-md-12">
        <thead>
            <tr>
            <th>Call No.</th>
                <th>Author</th>
                <th>Title</th>
				<th>School ID</th>
				<th>Borrower</th>
				<th>Date borrowed</th>
                <th>Date returned</th>
                <th>Status</th>
                <th>AssistedBy</th>
               
            </tr>
        </thead>
        <tbody>
				<?php 																																							
							$query = "SELECT  borrowed.id, book.call_no, book.author, book.title, borrower.school_id, concat(borrower.f_name,' ',borrower.m_name,' ',borrower.l_name) as student, borrowed.date_borrowed, borrowed.date_returned, borrowed.status, borrowed.assisted_by FROM borrowed inner join book inner join borrower where borrowed.id_book = book.id AND borrowed.id_borrower = borrower.id AND borrowed.status = 'RETURNED' order by borrowed.date_borrowed desc ";
							$query2= "SELECT count(id) AS total from borrowed where status = 'RETURNED' ";
                            $result = mysqli_query($conn, $query); 
                            $result2 = mysqli_query($conn, $query2); 
																																																
							while($row = mysqli_fetch_array($result)) { $id =$row["id"]; ?> 
            <tr>
            <td> <c class="text-secondary"> <?php echo  $row["call_no"]; ?></c></td>
                <td><?php echo  $row["author"]; ?></td>
                <td><?php echo  $row["title"]; ?></td>
				<td> <c class="text-primary"> <?php echo  $row["school_id"]; ?></c></td>
				<td><?php echo  $row["student"]; ?></td>
				<td><?php echo  $row["date_borrowed"]; ?></td>
                <td><?php echo  $row["date_returned"]; ?></td>
                <td><?php echo  $row["status"]; ?></td>
                <td><?php echo  $row["assisted_by"]; }?></td>
               
            </tr>
            
								
        </tbody>
      
    </table>
    <?php
            while($row2 = mysqli_fetch_array($result2)){ ?>
            <?php echo 'Total Reports: '. $row2['total']; }?>

        </div>
    </div>
    <a href="print.php" name="btn-print" class="btn btn-success cols col-2 p-2 mt-5" style="float: right; margin-right:1%;" >PRINT REPORT <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg> </a>
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
</style>