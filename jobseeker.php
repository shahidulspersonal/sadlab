<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/jsprofile.css">


</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="jsdata.php">Add Information for Job</a>
  <a href="jsupdate.php">Update Information</a>
  <a href="readjob.php">Apply for Job</a>
  <a href="courseread.php">Enroll Course</a>
  <a href="logout.php" id="logout">Logout</a>
</div>




  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<div id="main">
  <div class="a">


  <h2 class="text-primary">
    <?php

    session_start();

    if ($_SESSION['name']==true)
    {
      echo "Welcome :"." ".$_SESSION['name']."!";
      echo "<br>";

      echo "User id :"." ".$_SESSION['id'];

    }
    else
    {
      header('location:jobseekerlogin.php');
    }

     ?>
     </h2>
       </div>


<div class="container">
 <div class="row">
     <div class="col-md-6">
         <h1>Welcome to Jobseeker Profile</h1>
         <p>"Nothing in the world can take the place of Persistence. Talent will not; nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not; the world is full of educated derelicts. The slogan 'Press On' has solved and always will solve the problems of the human race." —Calvin Coolidge.</p>
     </div>
 </div>
</div>

<br>

<br>



<div class="container">
<div class="row">

  <div class="a">





  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading"><a href="cownerread.php" class="link2">TOTAL Registerd Company</a></div>
      <div class="panel-body">

        <h3 class="text-center"><b>

              <?php
              $connection = mysqli_connect("localhost","root","","jobmaker");

              $query = "SELECT id FROM cowner ORDER BY id";
              $query_run = mysqli_query($connection,$query);
              $row = mysqli_num_rows($query_run);

              echo "$row";
               ?>

            </b></h3>



      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-primary">
    <div class="panel-heading"><a href="courseread.php" class="link">Total Courses</a></div>
      <div class="panel-body">

        <h3 class="text-center"><b>

                 <?php
                 $connection = mysqli_connect("localhost","root","","jobmaker");

                 $query = "SELECT name FROM course ORDER BY name";
                 $query_run = mysqli_query($connection,$query);
                 $row = mysqli_num_rows($query_run);

                 echo "$row";
                  ?>

               </b></h3>



      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-success">
      <div class="panel-heading">  <a href="readjob.php" class="link2">Total JOBS Post</a></div>
      <div class="panel-body">


                  <h3 class="text-center"><b>

                    <?php
                    $connection = mysqli_connect("localhost","root","","jobmaker");

                    $query = "SELECT cname FROM job ORDER BY cname";
                    $query_run = mysqli_query($connection,$query);
                    $row = mysqli_num_rows($query_run);

                    echo "$row";
                     ?>

                  </b></h3>



      </div>
    </div>
  </div>








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
