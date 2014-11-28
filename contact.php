<?php $thisPage = "Contact";
  include('inc/header.php');
?>
<main class="contact" role="main">
  <a id="skip"> </a>
  <div class="content_width">
    <h1>Contact Us</h1>
    <p>We encourage our guests to get in touch with our hosts in order to secure acommodation and pricing, however, we know this isn't always the easiest! So we will do our best to communicate with our hosts on your behalf if you are unable.</p>
  </div>

  <div class="hcard"><!-- add email-->
    <!-- Below is the hCard -->
    <p class="vcard">
      <a class="fn org url" href="<?php echo $base_url; ?>" title="Contact Information for Breaking the Ice">
      <span class="organization-name">Breaking the Ice</span>
      </a><br>
      <a href="mailto:nicholedwight@gmail.com">
        <span class="email">nicholedwight@gmail.com</span>
      </a><br>
      <span class="street-address">Sigtún 38</span>,
      <span class="locality">105 Reykjavík</span>,
      <strong class="country">Iceland</strong><br>
      <span class="tel">Telephone:
      <span class="value">+35-123-1234</span></span>
    </p>
  </div>
  <div class="contact_wrapper">
    <form class="contact_form quarter_transparent" action="/project1/inc/FormMail.php" method="POST" name="breaking_the_ice_form">
  		<ul class="list_neutral">
  			<li>
  				<input class="half_transparent" type="text" name="name" id="name" placeholder="Name:" required>
  			</li>
  			<li>
  				<input class="half_transparent" type="email" name="email" id="email" onChange="emailvalidation(this,'The email given is not valid');" placeholder="Email:" required>
  			</li>
  			<li>
  				<textarea class="half_transparent" name="message" id="message" rows="6" cols="40" placeholder="Questions or Comments:" required></textarea>
  			</li>
        <li>
          <select name="host">
            <option value="" selected>Desired Host</option><!--UPDATE to make placeholder -->
            <option value="rutole">Rut &#38; Ole</option>
            <option value="alex">Alex</option>
            <option value="ville">Ville</option>
            <option value="rolfada">Rolf &#38; Ada</option>
            <option value="gunnar">Gunnar</option>
            <option value="anders">Anders</option>
          </select>
        </li>
        <li>
          <button class="submit" type="submit">Submit</button>
        </li>
  		</ul>
  	</form>

    <aside class="twitter_feed">
      <a class="twitter-timeline" href="https://twitter.com/nicholedwight/lists/breaking-the-ice" data-widget-id="535453835008180224">Tweets from https://twitter.com/nicholedwight/lists/breaking-the-ice</a>
      <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
      </script>
    </aside>
  </div>
</main>
<?php include('inc/footer.php'); ?>

<script>
    // Below script found at echoecho.com, used to validate the email input.
    function emailvalidation(entered, alertbox) {
    // E-mail Validation by Henrik Petersen / NetKontoret
    // Explained at www.echoecho.com/jsforms.htm
    // Please do not remove this line and the two lines above.
    with (entered) {
      apos=value.indexOf("@");
      dotpos=value.lastIndexOf(".");
      lastpos=value.length-1;
      if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2)
      {if (alertbox) {alert(alertbox);} return false;}
      else {return true;}
      }
    }
  </script>
