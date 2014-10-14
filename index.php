<?php $thisPage="Home";
  include('inc/header.php');
?> <!-- Including sections of reusable modular code keeps it clean and readable-->
  <section class="primary_header">
    <div class="primary_title">
      <h1>This is a place for those who explore</h1>
    <!--   <img src="img/title2.png" alt="Breaking the Ice" class="large">
    <img src="img/titleSmall.png" alt="Breaking the Ice" class="small"> -->
    </div>
  </section>
  <main class="main_wrapper" role="main">
    <a id="skip"> </a>
    <h1>About Us</h1>
    <article class="l_main_content left">
      <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies. Mumblecore YOLO mlkshk salvia, single-origin coffee fashion axe leggings selfies swag sartorial Bushwick Pinterest Truffaut trust fund Schlitz. Put a bird on it PBR&B YOLO bespoke cliche, Thundercats swag mlkshk locavore polaroid next level fap. Messenger bag cardigan authentic, paleo plaid Truffaut slow-carb. Hoodie plaid McSweeney's letterpress polaroid, Thundercats Truffaut locavore jean shorts next level deep v Godard farm-to-table occupy.</p>
    </article>
    <aside class="right">
      <h2>See what people are doing in Iceland</h2>
      <div id="instafeed"></div>
      <div id="load-more"></div>
    </aside>
  </main>
  <footer>
    <p class="copyright">&#169; 2014 Nichole Dwight</p>
  </footer>

<script src="js/main.js"></script>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'iceland',
        tagName: 'IcelandSecret',
        sortBy: 'most-recent',
        limit: 9,
        clientId: '681cd94df6e14db197a650403668c10b'
    });
    feed.run();
</script>
<noscript>
  <link rel="stylesheet" type="text/css" href="css/nojs.css"><!--css styles for when javascript is disabled-->
</noscript>
</body>
</html>
