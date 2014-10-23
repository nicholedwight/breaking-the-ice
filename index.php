<?php $thisPage="Home";
  include('inc/header.php');
?> <!-- Including sections of reusable modular code keeps it clean and readable-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="blur">
      <feGaussianBlur stdDeviation="5" />
    </filter>
  </defs>
</svg>
  <section class="primary_hero">
    <img src="/project1/assets/img/surfgirl.jpg" class="hero">
    <div class="primary_title">
      <p>The ultimate tour for those who explore, who want to live a life of adventure. Make this your story. </p>
  </section>
  <main class="main_wrapper cf" role="main">
    <div class="glass">
    <a id="skip"> </a>
    <div class="main_content">
      <div class="content_item">
        <h2><a href="#">About</a></h2>
        <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
      </div>
      <div class="content_item">
        <h2><a href="#">Hosts</a></h2>
        <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
      </div>
      <div class="content_item">
        <h2><a href="#">Contact</a></h2>
        <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies.</p>
      </div>
    </div>
    <!-- <h1>What We Do</h1>
    <article class="l_main_content left">
      <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies. Mumblecore YOLO mlkshk salvia, single-origin coffee fashion axe leggings selfies swag sartorial Bushwick Pinterest Truffaut trust fund Schlitz. Put a bird on it PBR&B YOLO bespoke cliche, Thundercats swag mlkshk locavore polaroid next level fap. Messenger bag cardigan authentic, paleo plaid Truffaut slow-carb. Hoodie plaid McSweeney's letterpress polaroid, Thundercats Truffaut locavore jean shorts next level deep v Godard farm-to-table occupy.</p>
    </article>
    <aside class="right">
      <h2>See what people are doing in Iceland</h2>
      <div id="instafeed"></div>
    </aside> -->
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
