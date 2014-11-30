<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/osk1.jpg" data-lightbox="oskar">
  <section class="host_hero host_osk"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <a id="skip"> </a>
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/osk_profile.jpg" alt="Rolf and Ada" class="host_profile_image">
        <h2 class="host_name">Rolf and Ada Oskar</h2>
        <p class="location">Siglufjörður, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h3>About Rolf</h3>
        <p>We're Rolf and Ada, a couple in northern Iceland, Siglufjörður!</p>
        <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
        <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
          We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
      </article>
    </div>

    <div class="host_details cf">
      <div class="review_wrapper">
        <h3>Reviews</h3>
        <div class="review_item blockquote_wrapper">
          <blockquote class="comment_content">
            <p>Utrolig sentralt, rent, pent og ryddig. Enkelt å finne frem til. 5min å gå fra sentrum. Billig parkering i gata utenfor og alltid ledig plass til bil. Kjempehyggelig vert og enkel å kommunisere med. Anbefales!</p>
          </blockquote>
          <p class="commentor">Henrik Stoltz - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper">
          <blockquote class="comment_content">
            <p>They were very nice and considerate hosts. They were extremely responsive, and were really understanding when we were accidentally a little late leaving in the morning. The place is very nice, clean, and modern.</p>
          </blockquote>
          <p class="commentor">Bobby - October 2014</p>
        </div>
        <div class="review_item blockquote_wrapper">
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
            <a href="/project1/assets/img/galleries/osk2.jpg" data-lightbox="oskar">
              <img src="/project1/assets/img/galleries/osk2.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/osk3.jpg" data-lightbox="oskar">
              <img src="/project1/assets/img/galleries/osk3_thumb.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/osk4.jpg" data-lightbox="oskar">
              <img src="/project1/assets/img/galleries/osk4.jpg">
            </a>
          </li>
          <li>
            <a href="/project1/assets/img/galleries/osk5.jpg" data-lightbox="oskar">
              <img src="/project1/assets/img/galleries/osk5.jpg">
            </a>
          </li>
        </ul>
      </aside>
    </div>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Siglufjörður</h3>
        <p>
          Sigló (as the locals call it) sits precariously at the foot of a steep slope overlooking a beautiful fjord. Once one of Iceland’s boom towns, it’s now a quiet but endearing place with a dramatic setting, photogenic marina and a wonderful museum detailing the town’s former glory as the herring-fishing capital of Iceland. The recent opening of tunnels linking it with it's sister city, Olafsfjörður, have seen a new spring in the town’s step, and it won’t be long until travellers start paying it more attention.
        </p>

      </article>

      <aside class="surf_data">
        <h3>Surf Forecast for Siglufjörður</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '4297';
          include("../inc/surfdata.php");
          $firstImgsrc = $data[0]['charts']['swell'];
          $firstChartTime = date("l, F d HA", $data[0]["timestamp"]);
          ?>
          <h1  class="swell">Swell Chart</h1>
          <h2><?php echo $firstChartTime; ?></h2>
          <img src="<?php echo $firstImgsrc; ?>" id="chart">
          <input type="range" value="0" max="40" id="swell_slider">
      </aside>
    </div>
  </div>
</main>


<?php include('../inc/footer.php'); ?>
<script src="/project1/assets/js/chartcycle.js.php"></script>

<script>
//The two variables below create a JS variable from the PHP arrays created on surfdata.php
var chartImages = <?php echo json_encode($chart_images); ?>;
var chartTimes = <?php echo json_encode($chartTimes); ?>;

$('#swell_slider').on('input change', function() {
  changeChartFrame($('#chart'), $(this).val(), chartImages); //Calls the function to change chart image based on slider position
  changeTimeFrame($(this).val(), chartTimes); //Calls the time changing function to change the time based on the frame value in the slider
});

  $('#chart').click(function(){
    chartsCycle(1, chartImages);
    chartTimesCycle(1, chartTimes); //Calls the function with a count of 1 since 0 is set in the html above
  });
</script>
