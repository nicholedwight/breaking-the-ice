<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/ekl1.jpg" data-lightbox="eklund">
  <div class="host_hero host_ekl"></div>
</a>
<main role="main" class="host_profile_main_wrapper">
  <a id="skip"> </a>
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/ekl_profile.jpg" alt="Anders" class="host_profile_image">
        <h2 class="host_name">Anders Eklund</h2>
        <p class="location">Reykjanesbær, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h1>About Anders</h1>
        <p>Hi I'm Anders</p>
        <p>I like to surf on the bodacious waves that crash right outside my cabin windows. I like to salsa dance and am a carpenter for my day job. I am one of the band members for Ásgeir at night and have toured with Björk a few times. I also taught myself play the mandolin.</p>
        <p>If you stay with me we could spend much time in the sauna after going for long days of surfing and other outdoor activities.</p>
      </article>
    </div>

    <div class="host_details cf">
        <div class="review_wrapper">
          <h2>Reviews</h2>
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
        <h2>Gallery</h2>
        <ul class="list_neutral">
          <li>
            <a href="/project1/assets/img/galleries/ekl2.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl2.jpg" alt="Open living area and dining area">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ekl3.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl3.jpg" alt="Cozy stove in the corner of bedroom">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ekl4.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl4.jpg" alt="Rustic kitchen area">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ekl5.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl5.jpg" alt="View of bathroom">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h2>About Reykjanesbær</h2>
        <p>
          The twin towns of Keflavík and Njarðvík, on the coast about 50km west of Reykjavík, are a rather ugly expanse of suburban boxes and fast-food outlets – a rather inauspicious welcome to the island. Together they’re known simply as ‘Reykjanesbær’. Although they aren’t somewhere you’d want to spend a massive amount of time unless you're the adventurous type, they comprise the largest settlement on the peninsula and make a good base for exploring the area. If you’ve an early flight, they’re handy for the airport.
        </p>

      </article>

      <aside class="surf_data">
        <h2>Surf Forecast for Reykjanesbær</h2>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '2998'; //Setting the spot_id for the API call in the data file
          include("../inc/surfdata.php");
          $firstImgsrc = $data[0]['charts']['swell'];
          $firstChartTime = date("l, F d HA", $data[0]["timestamp"]);
          ?>
          <h1 class="swell">Swell Chart</h1>
          <h2><?php echo $firstChartTime; ?></h2>
          <img src="<?php echo $firstImgsrc; ?>" id="chart" alt="Swell Charts">
          <input type="range" value="0" max="40" id="swell_slider">
          <!-- If navigating through the page via tabbing, the slider input is usable, but it won't have all the images loaded through from the API, so it may show nothing, but give it some time and it will load them all-->
      </aside>
    </div>
  </div>
</main>
<?php include('../inc/footer.php'); ?>
