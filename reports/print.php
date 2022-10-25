<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/images/library-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once '..\assets/getbootstrap v5.2/index.php'; ?>
    <style type="text/css" media="print">
			@media print{
				.noprint, .noprint *{
					display: none; !important;
				}
			}
		</style>
</head>
<body onload="print()">
  <div class="container">
		<center>
			<h3 style="margin: top 30px;"> SUMMARY REPORT</h3>
			<hr>
		</center>
		<div class="btn btn-danger mb-3 noprint" type="" style="width: 100%;" onclick="window.location.replace('index.php') "> CANCEL PRINTING</div>
		<table id="ready" class="table table-striped table-bordered" style="width: 100%;" >
			<thead>
				<tr>
					<th>Call No.</th>
      	  <th>Author</th>
  	      <th>Title</th>
					<th>School ID</th>
					<th>Borrower</th>
					<th>Date borrowed</th>
          <th>Date returned</th>
   
           <th>AssistedBy</th>
				</tr>
			</thead>
			<tbody>
			<?php 																																							
							$query = "SELECT borrowed.id, book.call_no, book.author, book.title, borrower.school_id, concat(borrower.f_name,' ',borrower.m_name,' ',borrower.l_name) as student, borrowed.date_borrowed, borrowed.date_returned,  borrowed.assisted_by FROM borrowed inner join book inner join borrower where borrowed.id_book = book.id AND borrowed.id_borrower = borrower.id AND borrowed.status = 'RETURNED' order by borrowed.date_borrowed desc ";
							$result = mysqli_query($conn, $query); 
																																																
							while($row = mysqli_fetch_array($result)) { $id =$row["id"]; ?> 
            <tr>
            <td> <c class="text-secondary"> <?php echo  $row["call_no"]; ?></c></td>
                <td><?php echo  $row["author"]; ?></td>
                <td><?php echo  $row["title"]; ?></td>
				<td> <c class="text-primary"> <?php echo  $row["school_id"]; ?></c></td>
				<td><?php echo  $row["student"]; ?></td>
				<td><?php echo  $row["date_borrowed"]; ?></td>
                <td><?php echo  $row["date_returned"]; ?></td>
             
                <td><?php echo  $row["assisted_by"]; ?></td>
               
            </tr>
								<?php }?>
			</tbody>
	</table>
	</div>
    
</body>
</html>