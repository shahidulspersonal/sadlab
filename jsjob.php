<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jobseeker List</title>
   <!-- Add Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

   <style media="screen">
     body{
       background-color: #FAF9D0;
     }
   </style>
</head>
<body>
   <div class="container">
      <h1 class="text-center">Jobseeker List</h1>
      <table class="table">
         <thead>
            <tr>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Gender</th>
               <th>Phone</th>
               <th>Address</th>
               <th>NID</th>
               <th>SSC</th>
               <th>HSC</th>
               <th>Graduation</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $conn = mysqli_connect('localhost','root','','jobmaker') or die('connection failed');

               $select = mysqli_query($conn, "SELECT fname, lname, gender, phn, address, nid, SSC, hsc, gra FROM jsinfo") or die('query failed');

               while($row = mysqli_fetch_assoc($select)){
                  echo "<tr>";
                  echo "<td>" . $row['fname'] . "</td>";
                  echo "<td>" . $row['lname'] . "</td>";
                  echo "<td>" . $row['gender'] . "</td>";
                  echo "<td>" . $row['phn'] . "</td>";
                  echo "<td>" . $row['address'] . "</td>";
                  echo "<td>" . $row['nid'] . "</td>";
                  echo "<td>" . $row['SSC'] . "</td>";
                  echo "<td>" . $row['hsc'] . "</td>";
                  echo "<td>" . $row['gra'] . "</td>";
                  echo "</tr>";
               }

               mysqli_close($conn);
            ?>
         </tbody>
      </table>
   </div>
   <!-- Add Bootstrap JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
