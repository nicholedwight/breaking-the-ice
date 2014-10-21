<?php $thisPage = "FAQ_weather";
  include('../inc/header.php');
?>
<main class="secondary_wrapper" role="main">
  <div class="galleria">
    <img src="/project1/assets/img/jegtnes.jpg">
    <img src="/project1/assets/img/jegtnes.jpg">
    <img src="/project1/assets/img/jegtnes.jpg">
  </div>

  <div class="inner_wrapper">
    <a id="skip"> </a>
    <!-- <img src="http://placekitten.com/g/500/200"> -->
    <?php include('../inc/faq_nav.php');?>
    <article>
      <h1>Weather in Iceland</h1>
      <p>Typewriter drinking vinegar narwhal cardigan. Forage seitan chia craft beer tattooed YOLO viral, bicycle rights kale chips. Tilde roof party DIY Truffaut, gluten-free pickled wayfarers beard readymade banh mi locavore Austin chia selfies. Mumblecore YOLO mlkshk salvia, single-origin coffee fashion axe leggings selfies swag sartorial Bushwick Pinterest Truffaut trust fund Schlitz. Put a bird on it PBR&B YOLO bespoke cliche, Thundercats swag mlkshk locavore polaroid next level fap. Messenger bag cardigan authentic, paleo plaid Truffaut slow-carb. Hoodie plaid McSweeney's letterpress polaroid, Thundercats Truffaut locavore jean shorts next level deep v Godard farm-to-table occupy.</p>
      <div class="forecast">
        <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=64.1474&lon=-21.9340&name=Reykjavík&units=uk&color=#00CD9B"> </iframe>
      </div>
    </article>
  </div>
</main>
<?php include('../inc/footer.php'); ?>
<script src="/project1/assets/js/lib/galleria-1.4.2.min.js"></script>
<script>  Galleria.loadTheme('/project1/assets/galleria/themes/classic/galleria.classic.min.js');
  Galleria.run('.galleria');
</script>