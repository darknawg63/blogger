<?php
$posts = ['What on earth do you think might be wrong with the computer sytems in this day in age after all this time?', 'Where is Erik?'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Skeleton Haha</title>
  <meta name="Pilot project on Skeleton" content="">
  <meta name="darknawg63" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="public/css/normalize.css">
  <link rel="stylesheet" href="public/css/skeleton.css">
  <link rel="stylesheet" href="public/css/layout.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="public/images/favicon.png">
</head>
<body>
  <!-- .container is main centered wrapper -->
  <div class="container">
    <div id="nav" class="twelve columns">
    <header>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    </header>
    <h1>Blogger <small><?php echo 'My own shameless plug...'; ?></small></h1>
    <hr>
    <?php foreach ($posts as $post): ?>
    <div class="row">
      <div class="eight columns"><span><?php echo $post; ?></span><p><i>02-12-2014</i></p></div>
      <div class="four columns"><span></span></div>
    </div>
    <hr>
  <?php endforeach ?>
</body>
</html>