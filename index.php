<?php $thisPage="Home";
  include('inc/header.php');
?> <!-- Including sections of reusable modular code keeps it clean and readable-->
  <section class="primary_hero">
    <div class="primary_title">
      <h1>The ultimate tour for those who explore</h1>
      <div class="headingBorder">
        <span></span>
      </div>
      <p>We're looking for adventurous travelers. Make this your story.</p>
    </div>
  </section>
  <main class="main_wrapper cf" role="main">
    <a id="skip"> </a>
    <h1>About Us</h1>
    <article class="l_main_content left">
      <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies. Mumblecore YOLO mlkshk salvia, single-origin coffee fashion axe leggings selfies swag sartorial Bushwick Pinterest Truffaut trust fund Schlitz. Put a bird on it PBR&B YOLO bespoke cliche, Thundercats swag mlkshk locavore polaroid next level fap. Messenger bag cardigan authentic, paleo plaid Truffaut slow-carb. Hoodie plaid McSweeney's letterpress polaroid, Thundercats Truffaut locavore jean shorts next level deep v Godard farm-to-table occupy.</p>
    </article>
    <aside class="right">
      <h2>See what people are doing in Iceland</h2>
      <div id="instafeed"></div>
    </aside>
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
