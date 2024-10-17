<?php

//search_book.php

include 'database_connection.php';

include 'function.php';

if(!is_user_login())
{
	header('location:user_login.php');
}

$query = "
	SELECT * FROM lms_book 
    WHERE book_status = 'Enable' 
    ORDER BY book_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();


include 'header.php';

?>

<div class="container-fluid py-4" style="min-height: 700px;">

	<h1>Search Book</h1>
       <form action="" method="GET">
         <div class="input-group mb-3">
             <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="search data">
             <button type="submit" class="btn btn-primary">Search</button>
         </div>
        <form>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Book Name</th>
                                    <th>ISBN NO.</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Location Rack</th>
                                    <th>Status</th>
                                    <th>Added On</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","lms");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM lms_book WHERE CONCAT(BookName,ISBNNO.,Category,Author,LocationRack,Status,AddedOn) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['book_name']; ?></td>
                                                    <td><?= $items['book_isbn_number']; ?></td>
                                                    <td><?= $items['book_category']; ?></td>
                                                    <td><?= $items['book_author']; ?></td>
                                                    <td><?= $items['book_location_rack']; ?></td>
                                                    <td><?= $items['book_status']; ?></td>
                                                    <td><?= $items['book_added_on']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">
					<i class="fas fa-table me-1"></i> Book List
				</div>
				<div class="col col-md-6" align="right">

				</div>
			</div>
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
					<tr>
						<th>Book Name</th>
						<th>ISBN No.</th>
						<th>Category</th>
						<th>Author</th>
						<th>Location Rack</th>
						<th>No. of Available Copy</th>
						<th>Status</th>
						<th>Added On</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Book Name</th>
						<th>ISBN No.</th>
						<th>Category</th>
						<th>Author</th>
						<th>Location Rack</th>
						<th>No. of Available Copy</th>
						<th>Status</th>
						<th>Added On</th>
					</tr>
				</tfoot>
				<tbody>
				<?php 

				if($statement->rowCount() > 0)
				{
					foreach($statement->fetchAll() as $row)
					{
						$book_status = '';
						if($row['book_no_of_copy'] > 0)
						{
							$book_status = '<div class="badge bg-success">Available</div>';
						}
						else
						{
							$book_status = '<div class="badge bg-danger">Not Available</div>';
						}
						echo '
							<tr>
								<td>'.$row["book_name"].'</td>
								<td>'.$row["book_isbn_number"].'</td>
								<td>'.$row["book_category"].'</td>
								<td>'.$row["book_author"].'</td>
								<td>'.$row["book_location_rack"].'</td>
								<td>'.$row["book_no_of_copy"].'</td>
								<td>'.$book_status.'</td>
								<td>'.$row["book_added_on"].'</td>
							</tr>
						';
					}
				}
				else
				{
					echo '
					<tr>
						<td colspan="8" class="text-center">No Data Found</td>
					</tr>
					';
				}

				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php 

include 'footer.php';

?>