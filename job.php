<?php

$conn = mysqli_connect('localhost','root','','jobmaker') or die('connection failed');

if(isset($_POST['submit'])){

   $cname = mysqli_real_escape_string($conn, $_POST['cname']);
   $post = mysqli_real_escape_string($conn, $_POST['post']);
  $salary = mysqli_real_escape_string($conn, $_POST['salary']);
$workhour = mysqli_real_escape_string($conn, $_POST['workhour']);



   $insert = mysqli_query($conn, "INSERT INTO `job`(cname, post, salary, workhour) VALUES('$cname', '$post', '$salary', '$workhour')") or die('query failed');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Job Post</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/jobpost.css">

</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">


      </a>
      <ul class="navbar-nav">
          <h1 class="navbar-brand" href="#">Job Maker</h1>
      </ul>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item text-white">
                  <a class="nav-link active" aria-current="page" href="Company.php">Home </a>
              </li>
          </ul>
      </div>
  </nav>


<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
     <div class="a">
       <h3>Post a Job</h3>
     </div>

      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="cname" placeholder="enter Company Name" class="box" required>
      <input type="text" name="post" placeholder=" your company available post" class="box" required>
      <input type="text" name="salary" placeholder="Salary For this job" class="box" required>
      <input type="text" name="workhour" placeholder="Working Hour" class="box" required>


      <input type="submit" name="submit" value="Post This Job" class="btn">

   </form>

</div>

</body>
</html>
