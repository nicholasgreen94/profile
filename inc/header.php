
  <?php 
    $first_name = "Nicholas";
    $last_name = "Green";
    $full_name = $first_name . " " . $last_name;
    $page_title = "$full_name - Web Developer & Graphic Designer - Tucson, Arizona";
  ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title; ?></title>
    <!-- CSS -->
    <script src="https://use.typekit.net/phl2bvx.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    <link rel="stylesheet" href="css/screen.css">
  </head>
  <body>
    <div class="row" id="top">
      <header class="main-header small-offset-0 medium-offset-1 large-offset-0">
        <div class="title-bar" data-responsive-toggle="navigation" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="menu-centered">
            <a class="title-bar-title logo top-logo" href="#">NG</a>
          </div>
        </div>
        <nav class="main-nav top-bar-right" id="navigation">
          <ul class="dropdown menu " data-dropdown-menu>
            <li class="first-nav-item"><a class="first-nav-item" href="index.php">Home</a></li>
            <li><a href="web.php">Web</a></li>
            <li><a href="design.php">Design</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
      </header>
    </div>
  