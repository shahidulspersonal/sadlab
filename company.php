<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/company.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="companyupdate.php">Update Information</a>
  <a href="job.php">Post Job For Jobseeker</a>
<a href="jsjob.php">Find Employee</a>
  <a href="companyLogout.php" id="logout">Logout</a>
</div>

<div id="main">













  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<h2 class="text-primary">
  <?php

  session_start();

  if ($_SESSION['name']==true)
  {
    echo "Wellcome to "." ".$_SESSION['name']." Dashboard";



  }
  else
  {
    header('location:clogin.php');
  }

   ?>
   </h2>



     <div class="a">


     <div class="col-sm-4">
       <div class="panel panel-primary">
         <div class="panel-heading"><a class="link"href="readjs.php">Total Registered Job Seeker</a></div>
         <div class="panel-body">

           <h3 class="text-center"><b>

                    <?php
                    $connection = mysqli_connect("localhost","root","","jobmaker");

                    $query = "SELECT id FROM jobseeker ORDER BY id";
                    $query_run = mysqli_query($connection,$query);
                    $row = mysqli_num_rows($query_run);

                    echo "$row";
                     ?>

                  </b></h3>



         </div>
       </div>
     </div>









<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

</body>
</html>
