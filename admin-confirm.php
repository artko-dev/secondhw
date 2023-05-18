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

   <?php

      $heading = $_POST['heading'];
      $trip = $_POST['trip_date'];
      $duration = $_POST['duration'];
      $summary = $_POST['summary'];

      $servername = "localhost";
      $username = "phpdb";
      $password = "123";
      $dbname = "phpdb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO admin_add (heading, trip_date, duration, summary)
      VALUES ('$heading', '$trip', '$duration', '$summary')";

      if ($conn->query($sql) === TRUE) {
         echo '<h1>Admin - Confirm</h1>';
         echo '<hr>';
         echo '<p class="actext">Data has added succesully to DB</p>';
         echo '<a href="all-adventures.php" class="aclink">"Viev All Adventures"</a>';
         
         


         
      } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
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