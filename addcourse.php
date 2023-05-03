<?php

$conn = mysqli_connect('localhost','root','','jobmaker') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $description = mysqli_real_escape_string($conn, $_POST['description']);

   // Uploading image
   $image = $_FILES['image']['name'];
   $image_tmp = $_FILES['image']['tmp_name'];
   move_uploaded_file($image_tmp,"images/$image");

   $insert = mysqli_query($conn, "INSERT INTO `course`(name,description, image) VALUES('$name', '$description', '$image')") or die('query failed');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Course Post</title>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


   <link rel="stylesheet" href="css/addcourse.css">

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
                  <a class="nav-link active" aria-current="page" href="adminpage.php">Home </a>
              </li>
          </ul>
      </div>
  </nav>

<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
     <div class="a">
       <h3>Post a Course</h3>
     </div>

      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Enter Course Name" class="box" required>
      <textarea name="description" placeholder="Enter Course Description" class="box" required></textarea>
      <input type="file" name="image" accept="image/*" class="box" required>

      <input type="submit" name="submit" value="Post This Course" class="btn">

   </form>

</div>

</body>
</html>
