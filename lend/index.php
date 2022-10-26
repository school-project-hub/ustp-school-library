<?php require '..\auth/index.php'; ?>
<?php require_once "..\config/index.php"; ?>
 <?php
$select = "SELECT * FROM book ";
$result = $conn->query($select);
$option = '<option value="">SELECT BOOK</option>';
while($row = $result->fetch_object()){
    $option .= '<option value="'.$row->id.'">'.$row->call_no.'</option>';
}
?> 
<?php
$select2 = "SELECT * FROM borrower ";
$result2 = $conn->query($select2);
$option2 = '<option value="">SELECT STUDENT</option>';
while($row2 = $result2->fetch_object()){
    $option2 .= '<option value="'.$row2->id.'">'.$row2->school_id.'</option>';
}
?>
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
    <?php require_once '..\assets/cdnjs/ajax.php'; ?>

</head>
<body>
<?php include '..\sidenav/index.php'; ?>
<div class="col-md-6">
    <div class="p-5">
        <div class="card-body">
            <div class="card-title"><h3>LEND A BOOK HERE </h3>
           
            <div class="lend">
                <P>BOOK DETAILS</P>
                
                <script type="text/javascript">
            function getData(id, divid){
                $.ajax({
                    url: 'autoload.php?id='+id, 
                    success: function(html) {
                        var ajaxDisplay = document.getElementById(divid);
                        ajaxDisplay.innerHTML = html;
                    }
                });
            }
        </script>
				<script type="text/javascript">
            function getData2(id2, divid){
                $.ajax({
                    url: 'autoload2.php?id='+id2, 
                    success: function(html) {
                        var ajaxDisplay = document.getElementById(divid);
                        ajaxDisplay.innerHTML = html;
                    }
                });
            }
        </script>
<form action="process.php" method="post" class="col-md">
<div class="input-group mb-3">
  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></span>
<div class="form-floating">
<select name="bookid" id="id"  class="form-control" onchange="getData(this.value, 'displaydata')">
              <?php echo $option;
              ?> 
            </select>
</div>
  
</div>

	
		<div class="details">
			<div id="displaydata">
            </div>
				<hr class="divider">

		</div>
                            

            </div>
            </div>
            <div class="return">
						<div class="lend">
                <P>BORROWER</P>
<div class="input-group mb-3">
  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></span>
<div class="form-floating">
<select name="borrowerid" id="id2"  class="form-control" onchange="getData2(this.value, 'displaydata2')">
              <?php echo $option2;
              ?> 
            </select>
</div>
  
</div>

<div class="details">
			<div id="displaydata2">
            </div>
				<hr class="divider">

		</div>
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirm to borrow a book.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="submit" name="btn-borrow" class="btn btn-primary">CONFIRM</button>
      </div>
    </div>
  </div>
</div>
		</form>
	<button class="btn btn-primary" style="float: right;"  data-bs-toggle="modal" data-bs-target="#exampleModal">BORROW <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index" viewBox="0 0 16 16">
  <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435a4.9 4.9 0 0 1 .106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
</svg> </button>


            </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card mt-5">
        <div class="card-body">
            <div class="row p-3">
              <h3>Books in lend</h3>
    
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
								<th ><c style="float: right;">Action</c></th>
               
            </tr>
        </thead>
        <tbody>
        
				<?php 																																							
							$query = "SELECT borrowed.id, book.call_no, book.author, book.title, borrower.school_id, concat(borrower.f_name,' ',borrower.m_name,' ',borrower.l_name) as student, borrowed.date_borrowed FROM borrowed inner join book inner join borrower where borrowed.id_book = book.id AND borrowed.id_borrower = borrower.id AND borrowed.status = 'BORROWED' order by borrowed.date_borrowed desc ";
							$result = mysqli_query($conn, $query); 
																																																
							while($row = mysqli_fetch_array($result)) {

                 $id =$row["id"]; ?> 
            <tr>
                <td> <c class="text-secondary"> <?php echo  $row["call_no"]; ?></c></td>
                <td><?php echo  $row["author"]; ?></td>
                <td><?php echo  $row["title"]; ?></td>
								<td> <c class="text-primary"> <?php echo  $row["school_id"]; ?></c></td>
								<td><?php echo  $row["student"]; ?></td>
								<td><?php echo  $row["date_borrowed"]; ?></td>
								<td>
                <?php echo "<a class='btn btn-warning btn-d ' onClick=\"javascript: return confirm('Confirm to return book.');\" href='process.php?return_id=".$row['id']."'>"; ?> Return book </a>
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