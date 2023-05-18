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

   <div class="login_form">
			<form action="admin-confirm.php" method="post">
				<h3>welcome to your it support system</h3>
               <label for="role"></label>
               <select name="heading" id="role">
					<option value="Halifax">Halifax</option>
					<option value="Sydney">Sydney</option>
					</select><br>
					<input type="text" name="trip_date" required placeholder="Trip-date"><br>
					<input type="text" name="duration" required placeholder="Duration"><br>
               <input type="text" name="summary" required placeholder="Summary"><br>
					
					
					<input type="submit" class="form-btn">

   <!-- Add footer -->
   <?php include('phpblocks/footer.php'); ?>
   <!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>