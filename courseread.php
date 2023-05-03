<html>
<head>
    <title>Job Data</title>
    <style>
    body{
      background-color: #FAF9D0;
    }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }



    </style>
</head>
<body>
    <h1>Courses</h1>
    <table>
        <tr>
            <th>Course Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Enroll</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jobmaker";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve data from table
        $sql = "SELECT name, description, image FROM course";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);

        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td><img src='images/" . $row["image"] . "' alt='" . $row["name"] . "' width='100'></td>";
                echo "<td><a href='payment.php'>Enroll</a></td>";
                echo "</tr>";

            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
