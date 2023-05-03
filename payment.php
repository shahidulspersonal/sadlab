





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JobMaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/payment.css">


  </head>
  <body>
    <nav class="navbar navbar-expand-lg text-white bg-dark ">
    <div class="container-fluid" >
    <a class="navbar-brand" href="#">Job Maker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item text-white">
          <li class="nav-item">
            <a class="nav-link" href="adminlogin.php">ADMIN LOGIN</a>
          </li>
          <a class="nav-link active" aria-current="page" href="index.php">BACK<<</a>
        </li>
      </ul>
    </div>
    </nav>


<h1 class="text-center">Payment</h1>


<div class="p1">
  <form >
<table>
  <tr>
    <td>
      <h5>Name</h5>
    </td>
    <td>
      <?php
      session_start();

      if($_SESSION['name']==true)
      {
        echo $_SESSION['name'];


      }
      else
      {
        header('location:jobseekerlogin.php');
      }
       ?>
    </td>
  </tr>
  <tr>
    <td>
    <h5>User ID</h5>
    </td>
    <td>
      <?php
        echo $_SESSION['id'];
       ?>
    </td>
  </tr>

  <tr>
    <td>
    <h5>Email</h5>
    </td>
    <td>
      <?php
        echo $_SESSION['email'];
       ?>
    </td>
  </tr>

<tr>
  <td>
<h5>Our Agent number</h5>
  </td>
  <td>
    <h6>01815491313</h6>
  </td>
</tr>

<tr>
  <td>

      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/bkash.png" alt="Rocket logo">
  </td>
  <td>
      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/nogod.png" alt="Rocket logo">
  </td>
  <td>
      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/rocket.png" alt="Rocket logo">
  </td>


</tr>

</table>


  </form>

  <a class="btn btn-primary" href="payment2nd.php" role="button">Pay</a>
  <a class="btn btn-primary" href="logout.php" role="button">logout</a>
</div>
  </body>
</html>
