<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  </head>
  <body>

<header>
  <div class="navbar">
    <div class="spotify-logo">
    </div>

  </div>
</header>
<main>
  <div class="main-content">
<?php

include_once __DIR__ . '/src/php/songs.php';

 ?>

 <?php

 foreach ($songs as $request) { ?>

   <div class="song">
     <img src="<?php echo $request['img'] ?>" alt="image" />

    <div class="song-text title"><?php echo $request['title'] ?></div>
       <div class="song-text artist"><?php echo $request['artist']  ?></div>
       <div class="song-text year"><?php echo $request['year']  ?></div>


   </div>

 <?php } ?>
  </div>
</main>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="dist/js/main.js" charset="utf-8"></script>
  </body>
</html>
