
<?php include("inc/header.php");?>
  <div id="index">
    <!-- .hero -->
    <section class="hero">
      <div class="row">
        <div class="small-offset-1 small-10 medium-offset-1 text-left">
          <h1 class="large-offset-0"><?php echo "$first_name " . "$last_name"; ?></h1>
          <span>Web Developer and Designer</span>
        </div>
      </div>
    </section><!-- .hero -->
    <!-- services -->
    <section class="services">
      <div class="row">
        <hr class="gold-bar small-2 medium-2 large-2">
        <div class="text-center medium-offset-4 medium-4">
          <img class="preview-photo" src="img/me-polygon.jpg" alt="Picture of me">
        </div>
        <hr class="gold-bar small-2 medium-1">
        <h2 class="creative small-offset-1 small-10 medium-offset-2 medium-8 text-center">I specialize in creating websites, logos, graphics, and icons.</h2>
      </div>
    </section><!-- .services -->
    <!-- .main-about -->
    <section class="main-about">
      <div class="row">
        <hr class="gold-bar small-2">
        <h2 class="text-left small-offset-1 large-offset-2">A little about myself</h2>
        <div class="small-12 large-offset-2 large-5 text-left my-about">
          <p class="text-left small-offset-1 small-10 medium-7 large-offset-0 large-12">
            Hi there, as stated above my name is Nicholas Green, but I also go by Nick. I’m a freelance web designer 
            and developer from the Salt Lake Valley and now living in Tucson, Arizona after a stop in Phoenix for a 
            couple of years. While working in the financial sector for a few years and graduating with two associate 
            degrees I was on a search for something that would bring more joy where I could use creativity on a daily 
            basis. After months of searching I found web development, which also led me to learn about design. I read 
            books, watched videos, drank lots of coffee and stayed up late teaching myself how to code and design.  
            I filled my notebooks with designs  and ideas for mobile, tablet, and desktop, then coded it out for the web.
          </p>  
          <p class="text-left small-offset-1 small-10 medium-7 large-offset-0 large-12">
            When I am not developing or designing, you can find me sitting at awesome coffee shops, reading, writing, taking photos, 
            traveling and spending time with my wife Valerie and dog Jojo. I also have a fashion blog with my wife that we run 
            together. 
            <br>
            Check it out at <a class="vnstyle" href="http://vandnstyle.co/" target="_blank">V&amp;N Style</a>.
          </p>
          <div class="small-offset-4 medium-offset-1 large-offset-0">
            <a href="about.php">Read More</a>
          </div>
        </div>
      </div><!-- .row -->
      <div class="gold-polygon"></div> <!-- gold-polygon -->
    </section><!-- .main-about -->
    <hr class="gold-bar small-2 medium-4">
    <!-- .main-work -->
    <section class="main-work">
      <div class="row">
        <h2 class="small-offset-1 large-offset-2 text-left">Work</h2>
        <!-- .web -->
        <div class="small-12 medium-offset-1 medium-8 large-offset-1 large-6">
          <article class="web text-center">
            <h3>Web Development</h3>
            <hr class="small-4">
            <p class="text-left small-offset-1 small-10 medium-offset-2 medium-8">
              A collection of some websites that I designed and created. All the sites shown are responsive for mobile 
              and look great on any device. I list out what the project is about, who it resonates to. and the reason for 
              designing the site the way it is, mentioning as well the coding languages behind the site with a preview 
              of what the landing page looks like. 
            </p>
            <a class="btn" href="web.php">View</a>
          </article>
        </div><!-- .web -->
        <hr class="gold-bar medium-2 large-1 hide-for-small-only">
        <!-- .design -->
        <div class="small-12 medium-offset-3 medium-8 large-offset-5 large-6">
          <article class="design text-center">
            <h3>Design</h3>
            <hr class="small-4">
            <p class="text-left small-offset-1 small-10 medium-offset-2 medium-8">
              My portfolio of projects that I have designed. All the projects listed mention what the project was, 
              such as a logo, print, website design (but not yet coded), etc. The project name is listed followed 
              by a short description of the project. The two programs that I use right now are Adobe Photoshop and Inkscape. 
            </p>
            <a class="btn" href="design.php">View</a>
          </article>
        </div><!-- .design -->
      </div><!-- .row -->
    </section><!-- .main-work -->
  </div><!-- #index -->
<?php include("inc/contact.php"); ?>
<?php include("inc/footer.php");?>