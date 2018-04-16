<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Crud App</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head> 

	<body>

	<?php
	//add dbconnection

	include('dbconnect.php');
	//create query
	$query="SELECT * FROM books";
	$result=mysqli_query($conn , $query)


	?>
		<div class="container bg-primary" style="padding-top:20px; padding-bottom:20px;">
			<h3>Bootstrap and php CRUD APP</h3>
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<h3>Insert Books Form </h3>
					<form role="form" action="insert.php" method="post">
						<div class="form-group">
							<label>Book Title</label>
							<input type="text" name="btitle" class="form-control">
						</div>

						<div class="form-group">
							<label>Book price</label>
							<input type="text" name="bprice" class="form-control">
						</div>
						<button type="submit" class="btn btn-info btn-block">Add Books</button>
					</form>
				</div>


				<div class="col-sm-8">
					<h3>Display All Record Table</h3>
					<table class="table">
						<thead>
							<tr>
								<th>Book Title</th>
								<th>Book Price</th>
								<th>Crud Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($row=mysqli_fetch_assoc($result))
							{

							

						?>
							<tr>
								<td><?php echo $row['book_title'];?></td>
								<td><?php echo $row['book_price'];?></td>
								<td>
									<a href="editfrom.php?id=<?php echo $row['book_id'];?>" class="btn btn-success" role="button">Edit Book</a>
									<a href="delete.php?id=<?php echo $row['book_id'];?>" class="btn btn-danger" role="button">Delete Book</a>
								</td>
							</tr>
							<?php
							}
							mysqli_close($conn);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>