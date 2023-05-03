<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cowner List</title>
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
      <h1 class="text-center">Cowner List</h1>
      <table class="table">
         <thead>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Image</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $conn = mysqli_connect('localhost','root','','jobmaker') or die('connection failed');

               $select = mysqli_query($conn, "SELECT name, email, image FROM cowner") or die('query failed');

               while($row = mysqli_fetch_assoc($select)){
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo '<td><img src="uploaded_img/'.$row['image'].'" alt="Cowner Image" width="50"></td>';
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
