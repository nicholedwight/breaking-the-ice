<?php $thisPage = "Hosts";
  include('../inc/header.php');
?>

<a href="/project1/assets/img/galleries/vil1.png" data-lightbox="vilhjalmsson">
  <section class="host_hero host_vil"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/vil_profile.jpg" alt="Rut" class="host_profile_image">
        <h2 class="host_name">Rut Vilhjalmsson</h2>
        <p class="location">Reykjavik, Iceland</p>
      </div>

      <article class="about_host">
        <h3>About Rut</h3>
        <p>Hi im Rut, and my husband's Ole!</p>
        <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
        <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
          We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
        <a href="/project1/contact"><div class="button">Request Booking</div></a>
      </article>
    </div>
    <div class="host_details cf">
      <div class="review_wrapper">
        <h3>Reviews</h3>
        <div class="review_item blockquote_wrapper blockquote_wrapper">
          <blockquote class="comment_content">
            <p>Utrolig sentralt, rent, pent og ryddig. Enkelt å finne frem til. 5min å gå fra sentrum. Billig parkering i gata utenfor og alltid ledig plass til bil. Kjempehyggelig vert og enkel å kommunisere med. Anbefales!</p>
          </blockquote>
          <p class="commentor">Henrik Stoltz - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper blockquote_wrapper">
          <blockquote class="comment_content">
            <p>He was a very nice and considerate host. He was extremely responsive, and was really understanding when we were accidentally a little late leaving in the morning. The place is very nice, clean, and modern.</p>
          </blockquote>
          <p class="commentor">Bobby - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper blockquote_wrapper">
          <blockquote class="comment_content">
            <p>Feel like home! Lovely house, adequate space, helpful and thoughtful host, great surf scene, ocean-side located, with everything we need. Highly recommended!!!</p>
          </blockquote>
          <p class="commentor">Ana Biagi - September 2014</p>
        </div>
      </div>

      <aside class="listing_gallery">
        <h3>Gallery</h3>
        <ul class="list_neutral">
          <li>
            <a href="/project1/assets/img/galleries/vil2.jpg" data-lightbox="vilhjalmsson">
              <img src="/project1/assets/img/galleries/vil2.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/vil3.jpg" data-lightbox="vilhjalmsson">
              <img src="/project1/assets/img/galleries/vil3.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/vil4.jpg" data-lightbox="vilhjalmsson">
              <img src="/project1/assets/img/galleries/vil4.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/vil4.jpg" data-lightbox="vilhjalmsson">
              <img src="/project1/assets/img/galleries/vil4.jpg">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Reykjavik</h3>
        <p>
          The world’s most northerly capital combines colourful buildings, quirky people, a wild nightlife and a capricious soul to devastating effect. Most visitors fall helplessly in love, returning home already saving to come back.</p>
        <p>
          The city’s charm lies in its many peculiar contrasts, which, like tectonic plates clashing against one another, create an earthquake of energy. Reykjavík offers a bewitching combination of village innocence and big-city zeal. It’s populated by darkly cynical citizens (a quality brought very much to the fore by the country's recent near-bankruptcy) who are, in spite of everything, filled with unstoppable creativity and enduring spirit. In summer the streets are washed by 22 hours of daylight; in winter they’re scoured by blizzards and doused in never-ending night. Reykjavík is a city that treasures its Viking past but wants the future now.</p>

      </article>

      <aside class="surf_data">
        <h3>Surf Forecast</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php include("../inc/reyksurfdata.php");
          $imgsrc = $data[0]['charts']['swell'];
          ?>
          <img src="<?php echo $imgsrc; ?>" id="chart">
        <pre style="text-align: left;">
          <?php var_dump($data); ?>
        </pre>

      </aside>
    </div>
  </div>




</main>


<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>

<script>

 $('#chart').click(function(){
   var counter = 0;
   while (counter < 30) {
    $('#chart').attr('src', "<?php echo $data[1]['charts']['swell']; ?>");
    console.log("<?php echo counter; ?>");
    counter++;
  }
});

</script>
