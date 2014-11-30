<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/arn1.jpg" data-lightbox="arnason">
  <section class="host_hero host_arn"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <a id="skip"> </a>
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/arn_profile.jpg" alt="Gunnar" class="host_profile_image">
        <h2 class="host_name">Gunnar Arnason</h2>
        <p class="location">Reykjanesbær, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h3>About Gunnar</h3>
        <p>I'm Gunnar!</p>
        <p>I'm a fun guy from the Land of Fire and Ice, Iceland. I am also a professor in Icelandic language and literature - and a professional tourist guide, specialized in geology, history and culture. Beside running the guesthouse and welcoming my guests, I offer private excursion to the ocean for surf trips in a private vehicle for up to 8 passengers.</p>
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
            <a href="/project1/assets/img/galleries/arn2.jpg" data-lightbox="arnason">
              <img src="/project1/assets/img/galleries/arn2_thumb.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/arn3.jpg" data-lightbox="arnason">
              <img src="/project1/assets/img/galleries/arn3.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/arn4.jpg" data-lightbox="arnason">
              <img src="/project1/assets/img/galleries/arn4_thumb.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/arn5.jpg" data-lightbox="arnason">
              <img src="/project1/assets/img/galleries/arn5_thumb.jpg">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Reykjanesbær</h3>
        <p>
          The twin towns of Keflavík and Njarðvík, on the coast about 50km west of Reykjavík, are a rather ugly expanse of suburban boxes and fast-food outlets – a rather inauspicious welcome to the island. Together they’re known simply as ‘Reykjanesbær’. Although they aren’t somewhere you’d want to spend a massive amount of time unless you're the adventurous type, they comprise the largest settlement on the peninsula and make a good base for exploring the area. If you’ve an early flight, they’re handy for the airport.
        </p>

      </article>

      <aside class="surf_data">
        <h3>Surf Forecast for Reykjanesbær</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '2998'; //Setting the spot_id for the API call in the data file
          include("../inc/surfdata.php");
          $firstImgsrc = $data[0]['charts']['swell'];
          $firstChartTime = date("l, F d HA", $data[0]["timestamp"]);
          ?>
          <h1  class="swell">Swell Chart</h1>
          <h2><?php echo $firstChartTime; ?></h2>
          <img src="<?php echo $firstImgsrc; ?>" id="chart" alt="Swell Charts">
          <input type="range" value="0" max="40" id="swell_slider">
      </aside>
    </div>
  </div>
</main>
<?php include('../inc/footer.php'); ?>
