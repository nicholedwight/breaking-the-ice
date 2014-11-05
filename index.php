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
          <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
        </a>
      </div>
      <div class="content_item">
        <a href="/project1/hosts">
          <?php include('inc/hosts-icon.svg'); ?>
          <h2>Hosts</h2>
          <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
        </a>
      </div>
      <div class="content_item">
        <a href="/project1/contact">
          <?php include('inc/contact-icon.svg'); ?>
          <h2>Contact</h2>
          <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
        </a>
      </div>
    </div>
  </div>
  </main>
<?php include('inc/footer.php'); ?>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'iceland',
        tagName: 'IcelandSecret',
        sortBy: 'most-recent',
        limit: 9,
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}"></a>',
        clientId: '681cd94df6e14db197a650403668c10b'
    });
    feed.run();
</script>
