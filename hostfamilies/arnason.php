<?php $thisPage = "Hosts";
  include('../inc/header.php');
  $today = date('d/m/Y');
  $tomorrow = new DateTime($today);
  $tomorrow->modify('+1 day');

?>

<a href="/project1/assets/img/galleries/vil1.png" data-lightbox="vilhjalmsson">
  <section class="host_hero host_vil"></section>
</a>
<main role="main" class="host_main">
  <div class="host_header">
    <img src="/project1/assets/img/arn_profile.jpg" alt="Gunnar" class="host_profile_image">
    <h2>Gunnar</h2>
    <p>Reykjanesbær, Iceland</p>
    <p>4 Guests</p>
    <p>2 Beds</p>
  </div>

  <div class="host_profile">
    <article class="listing_details">
      <h3>About Gunnary</h3>
      <p>Hi im Gunnar!</p>
      <p>I'm a fun guy from the Land of Fire and Ice, Iceland. I am also a professor in Icelandic language and literature - and a professional tourist guide, specialized in geology, history and culture. Beside running the guesthouse and welcoming my guests, I offer private excursion to the ocean for surf trips in a private vehicle for up to 8 passengers.</p>
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
          <a href="/project1/assets/img/galleries/arn2.jpg" data-lightbox="vilhjalmsson">
            <img src="/project1/assets/img/galleries/arn2_thumb.jpg">
          </a>
        </li>
        <li>
          <a href="/project1/assets/img/galleries/arn3.jpg" data-lightbox="vilhjalmsson">
            <img src="/project1/assets/img/galleries/arn3_thumb.jpg">
          </a>
        </li>
        <li>
          <a href="/project1/assets/img/galleries/arn4.jpg" data-lightbox="vilhjalmsson">
            <img src="/project1/assets/img/galleries/arn4_thumb.jpg">
          </a>
        </li>
      </ul>
    </aside>
</main>

<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
