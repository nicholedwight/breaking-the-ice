<?php include('inc/header.php'); ?>
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
  <form class="host_form quarter_transparent" action="/project1/inc/FormMail.php" method="POST" name="host_contact_form">
    <ul class="list_neutral">
      <li>
        <input class="half_transparent" type="text" name="name" id="name" placeholder="Name:" required>
      </li>
      <li>
        <label for="checkin">Check In</label>
        <input id="checkin" class="checkin datepicker" type="text" name="checkin" placeholder="dd-mm-yyyy" required>
      </li>
      <li>
        <label for="checkout">Check Out</label>
        <input id="checkout" class="checkout datepicker" type="text" name="checkout" placeholder="dd-mm-yyyy" required>
      </li>
      <li>
        <input class="half_transparent" type="email" name="email" id="email" onChange="emailvalidation(this,'The email given is not valid');" placeholder="Email:" required>
      </li>
      <li>
        <textarea class="half_transparent" name="message" id="message" rows="6" cols="40" placeholder="Questions or Comments:" required></textarea>
      </li>
    </ul>
    <input type="hidden" name="thisPage" value="contactResponse">
    <button class="submit" type="submit">Submit</button>
  </form>
</div>
<aside class="listing_gallery">

</aside>
<div class="reviews">

</div>
<?php include('inc/footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/project1/assets/js/maps.js"></script>
