
<?php include("inc/header.php");?>
  <div id="index">
    <!-- .hero -->
    <section class="hero">
      <div class="container">
        <div class="u-full-width text-left">
          <h1><?php echo "$first_name " . "$last_name"; ?></h1>
          <span>I'm a freelance web designer and developer that specializes in creating websites, user experiences, user interfaces, branding, and graphics.</span>
        </div>
      </div>
    </section><!-- .hero -->
    <!-- .main-about -->
    <section id="main-about">
      <div class="container">
        <div class="row">
          <div class="column">
            <div class="my-about text-center">
              <p class="text-left">
                My name is Nicholas Green, and I am a freelance web designer living in Tucson, Arizona. I
                worked in the finance sector for a few years and graduated (insert college name here) with two
                associate’s degrees. While working in the finance sector, I realized I wanted to find a job where
                I would be able to use my natural creativity every day, a job that I was passionate about. During
                my search I discovered web development and design, and I knew I had found the field I wanted
                to specialize in. After months of late night study sessions as well as more than my share of cups
                of coffee, I learned how to design and code websites. I filled notebook after notebook with
                ideas for designing desktop sites, as well as sites for tablets and mobile devices.
              </p>  
              <p class="text-left">
                When I am not developing or designing websites, I am usually out at my local coffee shop
                reading books, writing stories, and taking photographs of all sorts of things. I have also been
                helping my wife design and develop a fashion blog we run together, which you can check out at
                  <a class="vnstyle" href="http://vandnstyle.co/" target="_blank">V&amp;N Style</a>.
                </p>
                <a class="read-more" href="about.php">Read More</a>
            </div><!-- .my-about -->
        </div><!-- .column-->
      </div><!-- .row -->
    </section><!-- .main-about -->
    <div id="main-photo">
      <div class="container">
        <div class="row">
          <img class="preview-photo u-full-width" src="img/mount_lemmon2.jpg" alt="Picture of me">
        </div>
      </div>
    </div>
    <!-- .main-work -->
    <section id="main-work">
      <div class="container">
        <div class="row">
          <h2 class="text-left">Work</h2>
          <!-- .web -->
          <div class="column one-half">
            <article class="web text-center">
              <h3>Web Development</h3>
              <!-- <hr class="small-4">
              <p class="text-left small-offset-1 small-10 medium-offset-2 medium-8">
                A collection of some websites that I designed and created. All the sites shown are responsive for mobile 
                and look great on any device. I list out what the project is about, who it resonates to. and the reason for 
                designing the site the way it is, mentioning as well the coding languages behind the site with a preview 
                of what the landing page looks like. 
              </p>
              <a class="btn" href="web.php">View</a> -->
            </article>
          </div><!-- .web -->
          <!-- .design -->
          <div class="column one-half">
            <article class="design text-center">
              <h3>Design</h3>
              <!-- <hr class="small-4">
              <p class="text-left small-offset-1 small-10 medium-offset-2 medium-8">
                My portfolio of projects that I have designed. All the projects listed mention what the project was, 
                such as a logo, print, website design (but not yet coded), etc. The project name is listed followed 
                by a short description of the project. The two programs that I use right now are Adobe Photoshop and Inkscape. 
              </p>
              <a class="btn" href="design.php">View</a> -->
            </article>
          </div><!-- .design -->
        </div><!-- .row -->
      </div>
    </section><!-- .main-work -->
  </div><!-- #index -->
<?php include("inc/social-media.php");?>
<?php include("inc/footer.php");?>