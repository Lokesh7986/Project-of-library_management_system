<?php

//issue_book_details.php

include 'database_connection.php';

include 'function.php';

if(!is_user_login())
{
 header('location:user_login.php');
}
echo '<script language="javascript">';
echo 'alert("user login  successfull")';
echo '</script>';
$query = "
 SELECT * FROM lms_issue_book 
 INNER JOIN lms_book 
 ON lms_book.book_isbn_number = lms_issue_book.book_id 
 WHERE lms_issue_book.user_id = '".$_SESSION['user_id']."' 
 ORDER BY lms_issue_book.issue_book_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

include 'header.php';

?>
<div class="container-fluid py-4" style="min-height: 700px;">
 <h1>Issue Book Detail</h1>
 <div class="card mb-4">
  <div class="card-header">
   <div class="row">
    <div class="col col-md-6">
     <i class="fas fa-table me-1"></i> Issue Book Detail
    </div>
    <div class="col col-md-6" align="right">
    </div>
   </div>
  </div>
  <div class="card-body">
  <table id="datatablesSimple" style="border: 2px solid; border-radius: 25px;">
          <thead style="border: 2px solid; min-width:200px;">
    <tr style=" border-left: none!important;
    border-right: 1px solid; min-width:200px ;"> 
  <th style=" border-left: none!important;
    border-right: 2px solid ;">Book ISBN No.</th>
       <th style=" border-left: none!important;
    border-right: 2px solid ;">Book Name</th>
  <th style=" border-left: none!important;
    border-right: 2px solid ;">Issue Date</th> <th style=" border-left: none!important;
    border-right: 2px solid ;">Return Date</th> <th style=" border-left: none!important;
    border-right: 2px solid ;">Fines</th> <th style=" border-left: none!important;
    border-right: 2px solid ;">Status</th>
      
      
      
     </tr>
    </thead>
    
    <tbody>
    <?php 
    if($statement->rowCount() > 0)
    {
     foreach($statement->fetchAll() as $row)
     {
      $status = $row["book_issue_status"];
      if($status == 'Issue')
      {
       $status = '<span class="badge bg-warning">Issue</span>';
      }

      if($status == 'Not Return')
      {
       $status = '<span class="badge bg-danger">Not Return</span>';
      }

      if($status == 'Return')
      {
       $status = '<span class="badge bg-primary">Return</span>';
      }

      echo '

      <tr style="border: 2px solid;">
      
      <td style=" border-left: none!important;
      border-right: 2px solid ;">'.$row["book_isbn_number"].'&nbsp&nbsp&nbsp</td>
      <td style=" border-left: none!important;
      border-right: 2px solid;">'.$row["book_name"].'&nbsp&nbsp</td>
      <td style=" border-left: none!important;
      border-right: 2px solid ;">'.$row["issue_date_time"].'&nbsp&nbsp</td>
      <td style=" border-left: none!important;
      border-right: 2px solid ;">'.$row["return_date_time"].'</td>
      <td style=" border-left: none!important;
      border-right: 2px solid ;">'.get_currency_symbol($connect).$row["book_fines"].'</td>
      <td style=" border-left: none!important;
      border-right: 2px solid ;">'.$status.'</td>
      
     
     </tr>
     ';

     }
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