
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
    <link rel="stylesheet" href="css/screen.css">
  </head>
  <body>
    <div class="row" id="top">
      <header class="main-header">
        <div class="title-bar" data-responsive-toggle="navigation" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="menu-centered">
            <a href="#"><img alt="A logo a square with an N inside it" class="title-bar-title logo top-logo" src="img/logo.svg"></a>
          </div>
        </div>
        <nav class="main-nav" id="navigation">
          <ul class="dropdown menu float-right" data-dropdown-menu>
            <li><a href="index.php">Home</a></li>
            <li><a href="web.php">Web</a></li>
            <li><a href="design.php">Design</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
      </header>
    </div>
  