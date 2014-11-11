<?php $thisPage = "Hosts";
  include('../inc/header.php');
  $today = date('d/m/Y');
  $tomorrow = new DateTime($today);
  $tomorrow->modify('+1 day');

?>
<main role="main">
  <div class="host_header">
    <img src="/project1/assets/img/jegtnes.jpg" alt="Jegtnes" class="host_profile_image">
    <h2>Jegtnes</h2>
    <p>Reykjavik, Iceland</p>
    <p>4 Guests</p>
    <p>2 Beds</p>

  </div>
  <div class="host_profile">
    <article class="listing_details">
      <h3>About Jegtnes</h3>

    </article>

    <aside class="listing_gallery">

    </aside>
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
</main>

<?php include('../inc/host_footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
