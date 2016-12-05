
<?php include("inc/header.php");?>
  <div id="index">
    <!-- .hero -->
    <section class="hero">
      <div class="row">
        <div class="small-offset-1 small-10 medium-offset-1 large-offset-0">
                    <h1 class="large-offset-0"><?php echo "$first_name " . "$last_name"; ?></h1>
          <span>web developer and designer
          <br><div class="left-indent">living in Tucson, Arizona</div></span>
        </div>
      </div>
    </section><!-- .hero -->
    <!-- services -->
    <section class="services">
      <div class="row">
        <h2 class="small-offset-1 small-10 medium-offset-2 medium-8 text-center">I create and develop websites, logos, brands, and designs.</h2>
      </div>
    </section><!-- .services -->
    <!-- .main-about -->
    <section class="main-about" data-equalizer data-equalize-on="large">
      <div class="row">
        <h2 class="text-center show-for-large">A little about myself</h2>
        <div class="small-12 large-4 columns text-center my-about" data-equalizer-watch>
          <h2 class="text-center hide-for-large">A little about myself</h2>
          <p class="small-offset-1 small-10 text-left">
            My name is Nicholas Green. I am a self-taught web designer/developer that is currently living in Tucson, Arizona. 
            Originally from Salt Lake City, Utah. However, at the age of 21, I sought out new scenery, adventure, and climate, 
            and moved down to the valley of the sun. My interest in web design and development grew after reading a book about 
            the subject. It had me staying up all night reading. After that, I became consumed by the matter, learning from 
            various resources when coming home from a full-time job. The main resource for learning was 
            learning from their videos, quizzes, and exercises.
            My passion has only grown. The more subjects studied, the more my interest is peaked in the vast world of web 
            design and development. While studying web design and development, I became more interested in design 
            and started creating side projects as a way for me to express my creativity. 
          </p>
          <a href="about.php">Read More</a>
        </div>
        <div class="small-12 large-8 columns text-center my-about-pic" data-equalizer-watch>
        </div>
      </div>
    </section><!-- .main-about -->
    <!-- .main-work -->
    <section class="main-work">
      <div class="row">
        <h2 class="text-center">Work</h2>
        <!-- .web -->
        <div class="small-12 medium-6 columns">
          <article class="web text-center">
            <h3>Web Development</h3>
            <hr class="small-4">
            <p class="text-center small-offset-1 small-10 large-offset-2 large-8">
              But I must explain to you how all this mistaken idea of denouncing pleasure and 
              praising pain was born and I will give you a complete account of the system.
              But I must explain to you how all this mistaken idea of denouncing pleasure and 
              praising pain was born and I will give you a complete account of the system.
            </p>
            <a class="btn" href="web.php">View</a>
          </article>
        </div><!-- .web -->
        <!-- .design -->
        <div class="small-12 medium-6 columns">
          <article class="design text-center">
            <h3>Design</h3>
            <hr class="small-4">
            <p class="text-center small-offset-1 small-10 large-offset-2 large-8">
              But I must explain to you how all this mistaken idea of denouncing pleasure and 
              praising pain was born and I will give you a complete account of the system.
              But I must explain to you how all this mistaken idea of denouncing pleasure and 
              praising pain was born and I will give you a complete account of the system.
            </p>
            <a class="btn" href="design.php">View</a>
          </article>
        </div><!-- .design -->
      </div><!-- .row -->
    </section><!-- .main-work -->
  </div><!-- #index -->
<?php include("inc/contact.php"); ?>
<?php include("inc/footer.php");?>