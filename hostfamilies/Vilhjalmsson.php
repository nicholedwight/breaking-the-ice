<?php include('../inc/header.php'); ?>
<div class="host_header">
  <img src="/project1/assets/img/jegtnes.jpg" alt="Jegtnes" class="host_image">
  <h2>Jegtnes</h2>
  <p>Somewhere in Iceland</p>
  <p>4 Guests</p>
  <p>2 Beds</p>
</div>
<article class="listing_details">
  <h3>About Jegtnes</h3>

</article>
<div class="host_contact_form">
  <form class="host_form" action="/project1/inc/FormMail.php" method="POST" name="host_contact_form">
    <ul class="list_neutral">
      <li>
        <label for="checkin">Check In</label>
        <input id="checkin" class="checkin datepicker" type="text" name="checkin" placeholder="dd-mm-yyyy" required>
      </li>
      <li>
        <label for="checkout" class="checkout">Check Out</label>
        <input id="checkout" class="checkout datepicker" type="text" name="checkout" placeholder="dd-mm-yyyy" required>
      </li>
      <li>
        <input class="half_transparent" type="email" name="email" id="email" onChange="emailvalidation(this,'The email given is not valid');" placeholder="Email:" required>
      </li>
      <li>
        <textarea class="half_transparent" name="message" id="message" rows="6" cols="40" placeholder="About Yourself:" required></textarea>
      </li>
    </ul>
    <input type="hidden" name="thisPage" value="contactResponse">
    <button class="submit" type="submit">Submit</button>
  </form>
</div>
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
<?php include('../inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
