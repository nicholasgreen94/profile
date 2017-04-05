
<?php include('inc/header.php') ?>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="hero">
        <article class="contact_section text-left column two-thirds">
          <h1>Let's get in touch</h2>
          <p>
            I’m currently available for any type of freelance projects whether it be a website, logo, print, poster, 
            branding, etc. If you have a project in mind, let me know and we’ll create amazing things. 
            Or if you want to say hi or collaborate, then let's get in contact with each other.
          </p>
          </div>
        </div>
      </div>
      <form id="contact-form" method="post" action="email.php">
        <div class="container">
          <div class="row">
            <div class="inputs">
              <div class="top-inputs">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"  required>
              </div>
              <label for="comments">Comments</label>
              <textarea name="comments" id="comments" value="comments"  required></textarea>
              <input type="submit" id="contact-submit" value="Submit"></a>
            </div>
          </div><!-- .row -->
        </div><!-- .container -->
      </form>
    </article><!-- .contact-section -->
</section><!-- .main-contact -->

<?php include('inc/social-media.php') ?>
<?php include('inc/footer.php') ?>

