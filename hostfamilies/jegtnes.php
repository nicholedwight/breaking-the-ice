<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/jeg1.jpg" data-lightbox="jegtnes">
  <section class="host_hero host_jeg"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/jegtnes.jpg" alt="Alex" class="host_profile_image">
        <h2 class="host_name">Alex Jegtnes</h2>
        <p class="location">Reyðarfjörður, Iceland</p>
      </div>

      <article class="about_host">
        <h3>About Alex</h3>
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
            <a href="/project1/assets/img/galleries/jeg2.jpg" data-lightbox="jegtnes">
              <img src="/project1/assets/img/galleries/jeg2.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/jeg3.jpg" data-lightbox="jegtnes">
              <img src="/project1/assets/img/galleries/jeg3.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/jeg4.jpg" data-lightbox="jegtnes">
              <img src="/project1/assets/img/galleries/jeg4.jpg">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Reyðarfjörður</h3>
        <p>
          In the Prettiest Fjord pageant, Reyðarfjörður could never quite manage to take home the sash and crown. It’s a relatively new settlement, which only came into existence – as a trading port – in the 20th century. More recently, however, Reyðarfjörður garnered attention when Alcoa installed a giant 2km-long aluminium smelter just beyond the town along the fjord. Conservationists were up in arms, but the infusion of foreign workers has added a small splash of international flavour in Reyðarfjörður and the surrounding towns.
        </p>
      </article>

      <aside class="surf_data">
        <h3>Surf Forecast</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php include("../inc/reyosurfdata.php");
          $imgsrc = $data[0]['charts']['swell'];
          ?>
          <img src="<?php echo $imgsrc; ?>" id="chart">

      </aside>
    </div>
  </div>
</main>


<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
