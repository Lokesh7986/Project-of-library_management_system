<?php

include 'database_connection.php';
include 'function.php';

if(is_user_login())
{
	header('location:issue_book_details.php');
}
echo '<div class="frontpage">';
include 'header.php';



?>
<div class="p-5 mb-4 bg-light rounded-3" style="height:500px;">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000" width=100vw height=100px >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://wallpaper.dog/large/20542088.jpg" width="470" height="450">
	  <!--img class="d-block w-100" src="C:\xampp\htdocs\library_management_system\library_management_system\asset\images\home1.jpg"-->
    </div>

	<div class="carousel-item">
		<img class="d-block w-100" src="https://www.cteindia.org/wp-content/uploads/2017/04/book-wallpaper-22133-22689-hd-wallpapers.jpg" width="470" height="450">
    </div>
	
    <div class="carousel-item">
      <img class="d-block w-100" src="https://w0.peakpx.com/wallpaper/609/342/HD-wallpaper-books-on-the-shelf-graph.jpg" width="470" height="450">
    </div>

  </div>
</div>
</div>
<!--div class="p-5 mb-4 bg-light rounded-3">

	<div class="container-fluid py-5">

		<h1 class="display-5 fw-bold">Library Management System</h1>

		<p class="fs-4">This is simple Library Management System which use for maintain the record of the library. This Library Managment System has been made by using PHP script, MySQL Database, Vanilla JavaScript and Bootstrap 5 framework. This is PHP Project on Online Library Management System.</p>

	</div>

</div-->

<div class="row align-items-md-stretch ">

	<div class="col-md-6">

		<div class="h-100 p-5 text-white bg-dark rounded-3" style="">

			<h4  style="font-size: 20px;">Admin Login</h4>
			<p></p>
			<a href="admin_login.php" class="btn btn-outline-light"  style="font-size: 25px;">Admin Login</a>

		</div>

	</div>

	<div class="col-md-6">

		<div class="h-100 p-5 bg-light border rounded-3" style="">

			<h4 style="font-size: 20px;">User Login</h4>

			<p></p>

			<a href="user_login.php" class="btn btn-outline-secondary fw-bold" style="font-size: 25px;">User Login</a>
			<user_login.php   user_registration.php>

			<a href="user_registration.php" class="btn btn-outline-primary"  style="font-size: 25px;">User Sign Up</a>

		</div>

	</div>

</div>
</div>

<?php
include 'footer.php';

?>
