<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job Maker</title>
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
        
      </li>
      <a class="nav-link active" aria-current="page" href="index.php">BACK<<</a>
    </li>
  </ul>
</div>
</nav>



<h1 class="text-center">Payment</h1>
<br>
<br>


<div class="p1">
  <form  method="post">

    <div class="form-group">
      <br>
      <label for="firstName"><h4>Enter Your Transaction Code</h4></label>
      <input type="text" name="trxid" required  class="form-control" id="firstName" />
    </div>


  <input type="submit" class="btn btn-success" class="al" value="Submit">
    <a class="btn btn-danger" href="logout.php" role="button">logout</a>
  <br>
  </form>


</div>



  </body>
</html>
