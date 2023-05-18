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
   <div>
         <!-- First screen banner -->
         <img class="main-img" src="image/canoe.jpeg" alt="Canoe on a butifule lake">
   </div>
   <div>
      <h2 class="main-title">Upcoming Adventures</h2>
      <hr>
   </div>
   <!-- Connection to DB -->
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

      // Select data from MySql
      $sql = "SELECT heading, trip_date, duration, summary FROM admin_add ORDER BY id DESC LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         print('
            <div class="tours">
               <div class="tours-city">
                  <h3>'.$row["heading"] .'</h3>
                  <hr>
               </div>
            <div>
               <p class="tours-date">'.$row["trip_date"]. '</p>
               <p class="tours-time">'.$row["duration"].'</p>
            </div>
            <div class="tours-description">
               <h4 class="tours-title">Summary</h4>
               <p>'.$row["summary"].'</p>
            </div>
         </div>');
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