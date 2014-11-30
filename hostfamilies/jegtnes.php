<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/jeg1.jpg" data-lightbox="jegtnes">
  <section class="host_hero host_jeg"></section>
</a>
<main role="main" class="host_profile_main_wrapper">
  <a id="skip"> </a>
  <div class="host_profile">
    <div class="host_details cf">
      <div class="name_container">
        <img src="/project1/assets/img/jegtnes.jpg" alt="Alex" class="host_profile_image">
        <h2 class="host_name">Alex Jegtnes</h2>
        <p class="location">Reyðarfjörður, Iceland</p>
        <a href="/project1/contact" class="pulse"><div>Request Booking</div></a>
      </div>

      <article class="about_host">
        <h3>About Alex</h3>
        <p>Hi! I'm Alex. I'm a viking from the deep Arctic fjords of Norway, so I'm used to the cold temperatures. I live in beautiful Reyðarfjörður, Iceland, where I like making things on the web during the day and explore the coast in my freetime.</p>
      </article>
    </div>

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
            <img src="/project1/assets/img/galleries/jeg2_thumb.jpg">
          </a>
        </li>
        <li>
          <a href="/project1/assets/img/galleries/jeg3.jpg" data-lightbox="jegtnes">
            <img src="/project1/assets/img/galleries/jeg3_thumb.jpg">
          </a>
        </li>
        <li>
          <a href="/project1/assets/img/galleries/jeg4.jpg" data-lightbox="jegtnes">
            <img src="/project1/assets/img/galleries/jeg4_thumb.jpg">
          </a>
        </li>
        <li>
          <a href="/project1/assets/img/galleries/jeg5.jpg" data-lightbox="jegtnes">
            <img src="/project1/assets/img/galleries/jeg5_thumb.jpg">
          </a>
        </li>
      </ul>
    </aside>

    <div class="host_details cf">
      <article class="about_city">
        <h3>About Reyðarfjörður</h3>
        <p>
          In the Prettiest Fjord pageant, Reyðarfjörður could never quite manage to take home the sash and crown. It’s a relatively new settlement, which only came into existence – as a trading port – in the 20th century. More recently, however, Reyðarfjörður garnered attention when Alcoa installed a giant 2km-long aluminium smelter just beyond the town along the fjord. Conservationists were up in arms, but the infusion of foreign workers has added a small splash of international flavour in Reyðarfjörður and the surrounding towns.
        </p>
      </article>

      <aside class="surf_data">
        <h3>Surf Forecast for Reyðarfjörður</h3>
        <!-- including the surf data file in order to keep this file relatively clean and legible -->
          <?php
          $location = '4298';
          include("../inc/surfdata.php");
          $firstImgsrc = $data[0]['charts']['swell'];
          $firstChartTime = date("l, F d HA", $data[0]["timestamp"]);
          ?>
          <h1   class="swell"  class="swell">Swell Chart</h1>
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
