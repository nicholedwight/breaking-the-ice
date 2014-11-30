<?php $thisPage = "Hosts";
  include('../inc/header.php');
?>

<a href="<?php echo $base_url; ?>/assets/img/galleries/jeg1.jpg" data-lightbox="jegtnes">
  <div class="host_hero host_jeg"></div>
</a>
<main role="main" class="host_profile_main_wrapper" id="skip" tabindex="0">
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="<?php echo $base_url; ?>/assets/img/jegtnes.jpg" alt="Alex" class="host_profile_image">
        <h2 class="host_name">Alex Jegtnes</h2>
        <p class="location">Reyðarfjörður, Iceland</p>
        <a href="<?php echo $base_url; ?>/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h1>About Alex</h1>
        <p>Hi! I'm Alex. I'm a viking from the deep Arctic fjords of Norway, so I'm used to the cold temperatures. I live in beautiful Reyðarfjörður, Iceland, where I like making things on the web during the day and explore the coast in my freetime.</p>
      </article>
    </div>

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
          <a href="<?php echo $base_url; ?>/assets/img/galleries/jeg2.jpg" data-lightbox="jegtnes">
            <img src="<?php echo $base_url; ?>/assets/img/galleries/jeg2_thumb.jpg" alt="View of living room">
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url; ?>/assets/img/galleries/jeg3.jpg" data-lightbox="jegtnes">
            <img src="<?php echo $base_url; ?>/assets/img/galleries/jeg3_thumb.jpg" alt="Interior view of kitchen">
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url; ?>/assets/img/galleries/jeg4.jpg" data-lightbox="jegtnes">
            <img src="<?php echo $base_url; ?>/assets/img/galleries/jeg4_thumb.jpg" alt="View of dining area">
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url; ?>/assets/img/galleries/jeg5.jpg" data-lightbox="jegtnes">
            <img src="<?php echo $base_url; ?>/assets/img/galleries/jeg5_thumb.jpg" alt="Shot of a geyser we came across whilst hiking">
          </a>
        </li>
      </ul>
    </aside>

    <div class="host_details cf">
      <article class="about_city">
        <h2>About Reyðarfjörður</h2>
        <p>
          In the Prettiest Fjord pageant, Reyðarfjörður could never quite manage to take home the sash and crown. It’s a relatively new settlement, which only came into existence – as a trading port – in the 20th century. More recently, however, Reyðarfjörður garnered attention when Alcoa installed a giant 2km-long aluminium smelter just beyond the town along the fjord. Conservationists were up in arms, but the infusion of foreign workers has added a small splash of international flavour in Reyðarfjörður and the surrounding towns.
        </p>
      </article>

      <aside class="surf_data">
        <h2>Surf Forecast for Reyðarfjörður</h2>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '4298';
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
