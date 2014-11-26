<?php $thisPage="Home";
  include('inc/header.php');
?> <!-- Including sections of reusable modular code keeps it clean and readable-->
  <section class="primary_hero">
    <div class="primary_title">
      <p>Find your escape</p>
    </div>
  </section>
  <main class="main_wrapper cf" role="main">
    <div class="glass">
    <a id="skip"> </a>
    <div class="index_content">
      <div class="content_item">
        <a href="/project1/info">
          <?php include('inc/about-icon.svg'); ?>
          <h2>About</h2>
          <p>We believe in quality and our goal is to make sure that our visitors get the best possible experience.
Enjoy the warm, friendly atmosphere of the surf culture in our beautiful arctic environment. Iceland is open to swells from every direction, with numerous set-ups which can produce world class waves, catching these spots can be life-changing.</p>
        </a>
      </div>
      <div class="content_item">
        <a href="/project1/hosts">
          <?php include('inc/hosts-icon.svg'); ?>
          <h2>Hosts</h2>
          <p>Here at Breaking The Ice, we strive to pair you with your best friend when you come to stay in Iceland. We have surfers and adventurers from all different backgrounds, ages, and numbers; so we're positive you'll find someone that can help you have the best holiday!</p>
        </a>
      </div>
      <div class="content_item">
        <a href="/project1/contact">
          <?php include('inc/contact-icon.svg'); ?>
          <h2>Contact</h2>
          <p>We encourage our guests to get in touch with our hosts in order to secure acommodation and pricing, however, we know this isn't always the easiest! So we will do our best to communicate with our hosts on your behalf if you are unable.</p>
        </a>
      </div>
    </div>
  </div>
  </main>
<?php include('inc/footer.php'); ?>
