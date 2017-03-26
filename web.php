
<?php 
  $title = "Development";
  include("inc/header.php"); 
?>


<div id="web-page">
  <!-- .hero -->
  <section class="hero web-hero">
    <div class="row">
      <div class="small-offset-1 small-10 medium-offset-1 text-left">
        <h1 class="large-offset-0"><?php echo "$title"; ?></h1>
        <span>Websites that I have developed</span>
      </div>
    </div>
  </section><!-- .hero -->
  <!-- .web-work -->
  <section class="web-work" data-equalizer data-equalize-on="small">
    <div class="row expanded">
      <div class="small-12">
        <article class="web-project text-center" id="dapper">
          <div class="small-12">
              <img class="preview-photo" src="img/dapper_wireframe.jpg" alt="preview of Dapper project"/>
              <h3>Dapper</h3>
              <p class="text-left small-offset-2 small-8 medium-offset-2 medium-8 large-offset-3 large-6">
                Being a person who is continually inspired by men’s fashion. I designed and coded this website 
                to experiment with minimalism and fashion. It’s a simple layout with much white space use to 
                add that feel of modernism and minimalism. It’s a simple, straightforward project. I designed 
                the logo along with the category name.
              </p>
              <p><span class="created">Created With:</span> HTML, CSS, SASS, JavaScript, jQuery</p>
            <a class="btn" href="https://dapper-mens.herokuapp.com/index.html" target="_blank">View</a>
          </div>
        </article>
      </div><!-- .web -->
      <hr class="gold-bar small-6">
    </div><!-- .row -->
    <!-- .web -->
    <div class="row expanded">
      <div class="small-12">
        <article class="web-project text-center" id="aerom">
          <div class="small-12">
              <img class="preview-photo" src="img/aerom_landing_page.jpg" alt="preview of Aerom project"/>
              <h3>Aerom</h3>
              <p class="text-left small-offset-2 small-8 medium-offset-2 medium-8 large-offset-3 large-6">
                This project was me working on creating a website for notebooks. I’m a writer and being interested 
                in writing I designed a fictional site that allowed me to express that passion. It’s a small site and 
                experiments with intriguing cuts on the tops of each page. It’s small, but modern and great for 
                it’s current needs with room to grow.
              </p>
              <p><span class="created">Created With:</span> HTML, CSS, SASS</p>
            <a class="btn" href="https://aerom.herokuapp.com/" target="_blank">View</a>
          </div>
        </article>
      </div><!-- .web -->
      <hr class="gold-bar small-6">
    </div><!-- .row -->
    <div class="row expanded">
      <div class="small-12">
        <article class="web-project text-center" id="digim">
          <div class="small-12">
              <img class="preview-photo" src="img/digim_wireframe.jpg" alt="Mockup of Digim Marketing"/>
              <h3>Digim Marketing</h3>
              <p class="text-left small-offset-2 small-8 medium-offset-2 medium-8 large-offset-3 large-6">
                Digim Marketing was when I first starting out in designing and coding websites. I sketched out this site, 
                came up with a name and finished the whole site. This was my first time completing a whole site and 
                experimenting with capabilities of website creation. It’s a fictional small marketing firm that has a 
                modern feel.
              </p>
              <p><span class="created">Created With:</span> HTML, CSS, JavaScript, jQuery</p>
            <a class="btn" href="https://digim-marketing.herokuapp.com/" target="_blank">View</a>
          </div>
        </article>
      </div><!-- .web -->
    </div><!-- .row -->
      <!-- .web -->
      
  </section><!-- .web-work -->  
</div><!-- #web-page -->

<?php include("inc/contact.php"); ?>  
<?php include("inc/footer.php");?>