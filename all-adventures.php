<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halifax Canoe and Kayak</title>
   <!--Connect to CSS-->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--Header + nav-->
   <?php include('phpblocks/header_and_nav.php'); ?>
   <!-- Add main content -->
   <!-- Test Connection to DB -->
   <?php
      $servername = "localhost";
      $username = "phpdb";
      $password = "123";
      $dbname = "phpdb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
      die("Hmmmm, it looks like something went wrong: " . $conn->connect_error);
      }

      $sql = "SELECT id, heading, trip_date, duration, summary FROM admin_add ORDER BY id DESC LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Name</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["heading"]." ".$row["trip_date"]." ".$row["duration"]." ".$row["summary"]."</td></tr>";
      }
      echo "</table>";
      } else {
       echo "0 results";
      }
      $conn->close();
   ?>

   <!-- Add footer -->
   <?php include('phpblocks/footer.php'); ?>
   <!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>