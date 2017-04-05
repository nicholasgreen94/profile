
  <?php 
    $first_name = "Nicholas";
    $last_name = "Green";
    $full_name = $first_name . " " . $last_name;
    $page_title = "$full_name - Web Developer & Graphic Designer - Tucson, Arizona";
    $page = "index";
  ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="GOOGLEBOT" content="NOODP, NOSNIPPET, NOARCHIVE">
    <meta name="SLURP" content="NOODP, NOYDIR, NOARCHIVE">
    <meta name="MSNBOT" content="NOODP, NOARCHIVE">
    <meta name="keywords" content="HTML, CSS, JavaScript, Websites, Website Design, Website Developer, Web Designer Phoenix, Web Developer Phoenix, Web Designer Arizona, Web Developer Arizona, Web Developer Tucson, Web Desiginer Tucson, Phoenix, Tucson, Arizona, Nicholas, Green, Nicholas Green">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title><?php echo $page_title; ?></title>
    <!-- CSS -->
    <script>
      (function(d) {
        var config = {
          kitId: 'phl2bvx',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    <style type="text/css">
      .wf-loading .hero {
        /* Hide the blog title and post titles while web fonts are loading */
        visibility: hidden;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="css/screen.css">
  </head>
  <body>
    <div id="top">
      <div class="container">
        <header>
          <nav id="main-nav" id="navigation">
            <ul class="menu">
              <li class="first-nav-item"><a class="first-nav-item" href="index.php">Home</a></li>
              <li><a href="web.php">Web</a></li>
              <li><a href="design.php">Design</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </header>
      </div>
    </div>      
  