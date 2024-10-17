<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


//header.php
$url = 'C:\xampp\htdocs\library_management_system\upload\lib2.jpg';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title style="font-size: large;">Online Library Management System in PHP</title>
        <link rel="canonical" href="">
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>asset/css/simple-datatables-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>asset/css/styles.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>asset/js/font-awesome-5-all.min.js" crossorigin="anonymous"></script>
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="" sizes="180x180">
        <link rel="icon" href="" sizes="32x32" type="image/png">
        <link rel="icon" href="" sizes="16x16" type="image/png">
        <link rel="manifest" href="">
        <link rel="mask-icon" href="" color="#7952b3">
        <link rel="icon" href="">
        <meta name="theme-color" content="#7952b3">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
           
           .login{
            background-image:url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            background-repeat: no-repeat;
    background-size: 100% 100%;
           }
           .frontpage{
            background-image:url('https://thumbs.dreamstime.com/b/opened-book-stack-books-panorama-reading-education-literature-good-copy-space-opened-book-stack-books-panorama-127889909.jpg');
            background-repeat: no-repeat;
    background-size: 100% 100%;
           }
           .home{
            background-image:url('https://thumbs.dreamstime.com/b/opened-book-stack-books-panorama-reading-education-literature-good-copy-space-opened-book-stack-books-panorama-127889909.jpg');
            background-repeat: no-repeat;
    background-size: 100% 100%;
           
           }
           *{
            margin:0;
            padding:0;
            font-size: 15px;
           }
        </style>
    </head>

    <?php 

    if(is_admin_login())
    {

    ?>

<body class="p-0 m-0" >
  <div class="sb-nav">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0 py-3" syle="font-size: large;">
  <!--a class="navbar-brand" href="profile.php"><img src=image.png></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button-->


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Admin Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book.php">Books volume</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Project Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="project.php">Project</a>
          <a class="dropdown-item" href="project_cd.php">Project cd</a>
          <!--div class="dropdown-divider"></div>
          <a class="dropdown-item" href="category.php">Books categories</a>
        </div-->

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Book Category
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="author.php">By Aurthor</a>
          <a class="dropdown-item" href="category.php">By Subject</a>
          
        
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         User details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="user.php">Users profiles</a>
          <a class="dropdown-item" href="issue_book.php">Issue book</a>
          
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setting.php">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
      
 
     <il class="nav-link"> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="submit" name="submit" value="send messages">
</form></il>

<?php
if (isset($_POST['submit'])) {
    // Perform the function when the button is clicked
    function myFunction() {
      $connect = new PDO("mysql:host=localhost; dbname=lms", "root", "");
 $query ="SELECT user_email_address FROM lms_user WHERE user_unique_id IN (SELECT user_id FROM lms_issue_book WHERE book_issue_status = 'issue' AND DATEDIFF(CURDATE(), expected_return_date) = 0)"; 

      $statement = $connect->prepare($query);      
      $statement->execute();

      
       foreach($statement->fetchAll() as $book_row) {
                               
        $mail =new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username ='lokeshkumarmuvvala@gmail.com';
        $mail->Password ='pvvnxelwqmqgklaj';
        $mail->SMTPSecure ='ssl';
        $mail->Port =465;
        $mail->setFrom('lokeshkumarmuvvala@gmail.com');
        $mail->addAddress($book_row['user_email_address']);
        $mail->isHTML(true);
        $mail->Subject = 'you';
        $mail->Body = "done";
        $mail->send();
  
               }
    }
  
    myFunction();
  }

?>

 
      
    
    </ul>
    
  </div>
</nav>

<!--nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    < Navbar Brand>
    <a class="navbar-brand ps-3" href="index.php">Library System</a>
      
  
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="profile.php">Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item nav-link" href="project.php">project</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!--ul class="nav-item active">
        <li>
      <a class="nav-link" href="category.php">book Category</a>
      <a class="nav-link" href="project.php">Project</a>
    </li>
    </ul>
      <li class="nav-item">
      <a class="nav-link" href="author.php">Author</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="location_rack.php">Location Rack</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="user.php">User</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="book.php">Book</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="issue_book.php">Issue Book</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="setting.php">Settings</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
      </li>
    
    </ul>
  </div>
</nav-->
    </div>
    <div id="layoutSidenav_content">
        <main>

    <?php 
    }
    else
    {

    ?>

    <body>

    	<main>

    		<div class="container py-4">

    			<header class="pb-3 mb-4 border-bottom" style="font-size: large;">
                    <div class="row">
        				<div class="col-md-6">
                            <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none" style="font-size: large;">
                                <span  class="fw-bold" style=" font-size:30px ;">Library Management System</span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php 

                            if(is_user_login())
                            {
                            ?>
                            <ul class="list-inline mt-4 float-end">
                                <li class="list-inline-item"><?php echo $_SESSION['user_id']; ?></li>
                                <li class="list-inline-item"><a href="issue_book_details.php">Issue Book</a></li>
                                <li class="list-inline-item"><a href="search_book.php">Search Book</a></li>
                                <li class="list-inline-item"><a href="profile.php">Profile</a></li>
                                <li class="list-inline-item"><a href="logout.php">Logout</a></li>
                            </ul>
                            <?php 
                            }

                            ?>
                        </div>
                    </div>

    			</header>
    <?php 
    }
    ?>