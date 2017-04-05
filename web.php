
<?php 
  $title = "Development";
  include("inc/header.php"); 
?>


<div id="web-page">
  <!-- .hero -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="text-left">
          <h1><?php echo "$title"; ?></h1>
          <span>Websites that I have developed</span>
        </div>
      </div>
    </div>
  </section><!-- .hero -->
  <!-- .web-work -->
  <section class="web-work" data-equalizer data-equalize-on="small">
    <div class="container">
      <div class="row">
        <article class="web-project text-center column two-thirds" id="dapper">
          <img class="preview-photo" src="img/dapper_wireframe.jpg" alt="Dapper homepage"/>
          <div class="project">
            <h2>Dapper</h2>
            <p class="text-left">
              Being a person who is continually inspired by men’s fashion. I designed and coded this website 
              to experiment with minimalism and fashion. It’s a simple layout with much white space use to 
              add that feel of modernism and minimalism. It’s a simple, straightforward project. I designed 
              the logo along with the category name.
            </p>
            <p><span class="created">Created With:</span> HTML, CSS, SASS, JavaScript, jQuery</p>
            <a class="btn" href="https://dapper-mens.herokuapp.com/index.html" target="_blank">View</a>
          </div>
        </article>
      </div><!-- .row -->
      <!-- .web -->
      <div class="row">
        <article class="web-project text-center column two-thirds" id="aerom">
          <img class="preview-photo" src="img/aerom_landing_page.jpg" alt="Aerom homepage"/>
          <div class="project">
            <h2>Aerom</h2>
            <p class="text-left">
              This project was me working on creating a website for notebooks. I’m a writer and being interested 
              in writing I designed a fictional site that allowed me to express that passion. It’s a small site and 
              experiments with intriguing cuts on the tops of each page. It’s small, but modern and great for 
              it’s current needs with room to grow.
            </p>
            <p><span class="created">Created With:</span> HTML, CSS, SASS</p>
            <a class="btn" href="https://aerom.herokuapp.com/" target="_blank">View</a>
          </div>
        </article>
      </div><!-- .row -->
      <div class="row">
        <article class="web-project text-center column two-thirds" id="digim">
              <img class="preview-photo" src="img/digim_wireframe.jpg" alt="Digim Marketing website"/>
              <div class="project">
                <h2>Digim Marketing</h2>
                <p class="text-left">
                  Digim Marketing was when I first starting out in designing and coding websites. I sketched out this site, 
                  came up with a name and finished the whole site. This was my first time completing a whole site and 
                  experimenting with capabilities of website creation. It’s a fictional small marketing firm that has a 
                  modern feel.
                </p>
                <p><span class="created">Created With:</span> HTML, CSS, JavaScript, jQuery</p>
              <a class="btn" href="https://digim-marketing.herokuapp.com/" target="_blank">View</a>
            </div>
        </article>
      </div><!-- .row -->
        <!-- .web -->
    </div>
  </section><!-- .web-work -->  
</div><!-- #web-page -->

<?php include("inc/social-media.php"); ?>  
<?php include("inc/footer.php");?>