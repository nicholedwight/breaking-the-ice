<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/ekl1.jpg" data-lightbox="eklund">
  <section class="host_hero host_ekl"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/ekl_profile.jpg" alt="Anders" class="host_profile_image">
        <h2 class="host_name">Anders Eklund</h2>
        <p class="location">Reykjanesbær, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h3>About Anders</h3>
        <p>Hi im Rut, and my husband's Ole!</p>
        <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
        <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
          We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
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
            <a href="/project1/assets/img/galleries/ekl2.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl2.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ekl3.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl3.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/ekl4.jpg" data-lightbox="eklund">
              <img src="/project1/assets/img/galleries/ekl4.jpg">
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
          $imgsrc = $data[0]['charts']['swell'];
          ?>
          <img src="<?php echo $imgsrc; ?>" id="chart">
          <input type="range" value="0" max="40" id="swell_slider">
      </aside>
    </div>
  </div>
</main>


<?php include('../inc/footer.php'); ?>
<script src="/project1/assets/js/chartcycle.js.php"></script>

<script>
var chartImages = <?php echo json_encode($chart_images); ?>;

$('#swell_slider').on('input change', function() {
  console.log($(this).val());
  changeChartFrame($('#chart'), $(this).val(), chartImages); //Calls the function to change chart image based on slider position
});

  $('#chart').click(function(){
    chartsCycle(1, chartImages); //Calls the function with a count of 1 since 0 is set in the html above
  });
</script>
