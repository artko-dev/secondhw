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
   <main>
      <div>
         <!-- First screen banner -->
         <img class="main-img" src="image/canoe.jpeg" alt="Canoe on a butifule lake">
      </div>
      <!-- Add main content second screen -->
      <div>
         <h2 class="main-title">Upcoming Adventures</h2>
         <hr>
      </div>
      <!-- Block with separate tours -->
      <section>
         <div class="tours">
            <div class="tours-city">
               <a href="/">
                  <h3>Halifax</h3>
                  <hr>
               </a>
            </div>
            <div>
               <p class="tours-date">Date 2007.04.12</p>
               <p class="tours-time">During 4 days</p>
            </div>
            <div class="tours-description">
               <h4 class="tours-title">Summary</h4>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores voluptatibus autem dolores!
                  Dicta praesentium dolor deserunt porro, harum adipisci est, eligendi iste soluta ad illo ullam
                  excepturi consequatur vero.
                  Deserunt, accusantium. Quisquam reprehenderit nostrum culpa delectus, facere, nulla molestiae non
                  consequatur magni dicta aut maiores! Sequi, voluptas. Quisquam aliquid repellendus consequuntur velit
                  aut accusamus, id veritatis sapiente eaque facere!
                  Eum ipsa temporibus, amet aliquam impedit, quidem numquam dolores tenetur provident maxime doloribus
                  blanditiis adipisci molestiae omnis vero! Adipisci, ducimus quae optio quia sed omnis. Adipisci quis
                  molestias libero architecto?</p>
            </div>
         </div>
         <div class="tours">
            <div class="tours-city">
               <a href="/">
                  <h3>Sydney</h3>
                  <hr>
               </a>
            </div>
            <div>
               <p class="tours-date">Date 2007.05.10</p>
               <p class="tours-time">During 2 days</p>
            </div>
            <div class="tours-description">
               <h4 class="tours-title">Summary</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti atque architecto necessitatibus
                  adipisci, sed eius maxime. Animi dolorem corrupti officiis, vero nihil alias voluptas similique
                  quisquam dolores. Iusto, ab pariatur.
                  At repellendus, necessitatibus aspernatur rem debitis amet, excepturi enim iste molestiae animi sit
                  ipsam mollitia. Aliquid sit magnam vitae at minus? Aliquam esse voluptatum earum molestiae
                  perspiciatis voluptas libero. Quae.
                  Quisquam, expedita adipisci! Error porro iure quidem distinctio qui maxime officiis temporibus vitae
                  vero labore! A quaerat, suscipit sit numquam molestias natus saepe neque assumenda harum
                  exercitationem vitae ratione. Praesentium.</p>
            </div>
            
         </div>
      </section>
   </main>
   <!-- Add footer -->
   <?php include('phpblocks/footer.php'); ?>
   <!-- JS Connect -->
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>