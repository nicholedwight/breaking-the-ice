<?php $thisPage = "Hosts";
  include('../inc/header.php');

?>

<a href="/project1/assets/img/galleries/ekl1.jpg" data-lightbox="eklund">
  <section class="host_hero host_ekl"></section>
</a>
<main role="main" class="host_main">
  <div class="host_profile">
    <img src="/project1/assets/img/ekl_profile.jpg" alt="Anders" class="host_profile_image">
    <h2 class="host_name">Anders</h2>

    <article class="listing_details">
      <h3>About Anders</h3>
      <p>Hi im Rut, and my husband's Ole!</p>
      <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
      <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
        We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
      <a href="#"><div class="request_button">Request Booking</div></a>
    </article>

    <div class="review_wrapper">
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Henrik Stoltz</h3>
        <p class="comment_content">Utrolig sentralt, rent, pent og ryddig. Enkelt å finne frem til. 5min å gå fra sentrum. Billig parkering i gata utenfor og alltid ledig plass til bil. Kjempehyggelig vert og enkel å kommunisere med. Anbefales!</p>
        <p class="comment_post_date">October 2014</p>
      </div>
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Bobby</h3>
        <p class="comment_content">He was a very nice and considerate host. He was extremely responsive, and was really understanding when we were accidentally a little late leaving in the morning. The place is very nice, clean, and modern.</p>
        <p class="comment_post_date">October 2014</p>
      </div>
      <div class="review_item">
        <img src="/project1/assets/img/jegtnes.jpg" alt="comment image" class="comment_image">
        <h3 class="comment_user">Henrik Stoltz</h3>
        <p class="comment_content">Feel like home! Lovely house, adequate space, helpful and thoughtful host, great surf scene, ocean-side located, with everything we need. Highly recommended!!!</p>
        <p class="comment_post_date">September 2014</p>
      </div>
    </div>
  </div>


  <aside class="listing_gallery">
    <ul class="list_neutral">
      <li>
        <a href="/project1/assets/img/galleries/ekl2.jpg" data-lightbox="eklund">
          <img src="/project1/assets/img/galleries/ekl2_thumb.jpg">
        </a>
      </li>
      <li>
        <a href="/project1/assets/img/galleries/ekl3.jpg" data-lightbox="eklund">
          <img src="/project1/assets/img/galleries/ekl3_thumb.jpg">
        </a>
      </li>
      <li>
        <a href="/project1/assets/img/galleries/ekl4.jpg" data-lightbox="eklund">
          <img src="/project1/assets/img/galleries/ekl4_thumb.jpg">
        </a>
      </li>
    </ul>
  </aside>
</main>


<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
