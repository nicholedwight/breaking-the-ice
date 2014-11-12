<?php $thisPage = "Hosts";
  include('../inc/header.php');
  $today = date('d/m/Y');
  $tomorrow = new DateTime($today);
  $tomorrow->modify('+1 day');

?>

<a href="/project1/assets/img/galleries/jeg1.png" data-lightbox="jegtnes">
  <section class="host_hero host_jeg"></section>
</a>
<main role="main" class="host_main">
  <div class="host_header">
    <img src="/project1/assets/img/jeg_profile.jpg" alt="Alex" class="host_profile_image">
    <h2>Alex</h2>
    <p>Reykjavik, Iceland</p>
    <p>4 Guests</p>
    <p>2 Beds</p>
  </div>

  <div class="host_profile">
    <article class="listing_details">
      <h3>About Alex</h3>
      <p>Hi im Rut, and my husband's Ole!</p>
      <p>We love travelling, meeting new people, outdoor activities, surfing, skiing, yoga, and lots of other things.</p>
      <p>For the past 5 years we´ve lived in Dubai, Scotland, and England and travelled alot, and recently moved back home to our gorgeous island.
        We're looking forward to being your host and will do our absolute best to make you feel comfortable and happy :)</p>
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
    </ul>
  </aside>
</main>


<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
