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




<script id='song-template' type='text/x-handlebars-template'>



   <div class="song">
     <img src="{{ img }}" alt="image" />

    <div class="song-text title">{{ title }}</div>
       <div class="song-text artist">{{ artist }}</div>
       <div class="song-text year">{{ year }}</div>
   </div>
   </script>



  </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
<script src="dist/js/main.js" charset="utf-8"></script>

  </body>
</html>
