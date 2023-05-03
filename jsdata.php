<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit;
}

// Connect to database
$mysqli = new mysqli('localhost', 'root', '', 'jobmaker');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare and bind SQL statement
$stmt = $mysqli->prepare("INSERT INTO jsinfo (id, fname, lname, gender, phn, address, nid, SSC, hsc, gra) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssss", $id, $fname, $lname, $gender, $phn, $address, $nid, $SSC, $hsc, $gra);

// Validate form inputs and execute statement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["id"];
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $gender = trim($_POST["gender"]);
    $phn = trim($_POST["phn"]);
    $address = trim($_POST["address"]);
    $nid = trim($_POST["nid"]);
    $SSC = trim($_POST["SSC"]);
    $hsc = trim($_POST["hsc"]);
    $gra = trim($_POST["gra"]);

    // Validate inputs
    if (empty($fname) || empty($lname) || empty($gender) || empty($phn) || empty($address) || empty($nid) || empty($SSC) || empty($hsc) || empty($gra)) {
        echo "Please fill in all fields.";
    } else {
        // Execute statement and display success message
        if ($stmt->execute()) {
          echo '<span style="color:white;text-align:center;">Data inserted successfully.</span>';


        } else {
            echo "Error inserting data: " . $stmt->error;
        }
    }
}

// Close statement and connection
$stmt->close();
$mysqli->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/jsdata.css">

</head>
<body class="bgb">

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
                  <a class="nav-link active" aria-current="page" href="jobseeker.php">Home </a>
              </li>
          </ul>
      </div>
  </nav>



  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div>

          <h1 style="font-size:40px;color:white; text-align: center;">Personal Information</h1>
          <table class="tclass">
              <td>
                  <labe for="fname">First name:</label>
              </td>
              <td><input type="text" name="fname" placeholder="Enter your First Name"></td>
              <tr>
                  <td><label for="lname">Last name:</label></td>
                  <td><input type="text" name="lname" placeholder="Enter your Last Name"></td>
              </tr>
              <tr>
                  <td>
                      <label style="margin-right: 8px;" for="gender">Gender:</label>
                  </td>
                  <td>
                      <input style="cursor: pointer;" type="radio" id="male" name="gender" value="Male">
                      <label for="male">Male</label>

                      <input style="cursor: pointer" type="radio" id="female" name="gender" value="Female">
                      <label for="female">Female</label>

                      <input style="cursor: pointer;" type="radio" id="others" name="gender" value="Others">
                      <label style="cursor: pointer" for="others">Others</label>
                  </td>

              </tr>



              <tr>
                  <td><label for="phone number">Phone Number:</label></td>
                  <td><input type="text" name="phn" placeholder="Enter your Phone Number"></td>
              </tr>

              <tr>
                  <td><label for="address">Address:</label></td>
                  <td><input type="text" name="address" placeholder="Enter your Address"></td>
              </tr>
              <br>
              <tr>
                  <td><label for="nid no">NID No:</label></td>
                  <td><input type="text" name="nid" placeholder="Enter your NID No"></td>
              </tr>

              <tr>
                  <td><label for="nid no">SSC Result:</label></td>
                  <td><input type="text" name="SSC" placeholder="Enter your SSC GPA"></td>
              </tr>

              <tr>
                  <td><label for="nid no">HSC Result:</label></td>
                  <td><input type="text" name="hsc" placeholder="Enter your HSC GPA"></td>
              </tr>

              <tr>
                  <td><label for="gra">Graduation Result:</label></td>
                  <td><input type="text" name="gra" placeholder="Enter your Graduation result"></td>
              </tr>








              <tr>
                  <td>
                      <input type="submit" value="Insert Data" class="submit">
                  </td>

              </tr>

      </div>


  </form>

</body>
</html>
