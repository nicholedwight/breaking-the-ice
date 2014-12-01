<?php $thisPage = "Contact";
  include('inc/header.php');
?>
<main class="contact" role="main" id="skip" tabindex="0">

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
    <form class="contact_form quarter_transparent" action="<?php echo $base_url; ?>/inc/FormMail.php" method="POST" name="contactForm"  onSubmit="isInputEmpty();">
  		<ul class="list_neutral">
  			<li>
  				<input class="half_transparent testing" type="text" name="name" id="name" placeholder="Name:" required>
  			</li>
  			<li>
  				<input class="half_transparent" type="email" name="email" id="email" onChange="emailvalidation(this,'The email given is not valid');" placeholder="Email:" required>
  			</li>
  			<li>
  				<textarea class="half_transparent" name="message" id="message" rows="6" cols="40" placeholder="Message:" required></textarea>
  			</li>
        <li>
          <select name="host" required>
            <option value="" style="display:none;" disabled selected>Desired Host</option> <!--The display:none styling prevents this placeholder option from being shown in dropdown -->
            <option value="1">Rut &#38; Ole</option>
            <option value="2">Alex</option>
            <option value="3">Ville</option>
            <option value="4">Rolf &#38; Ada</option>
            <option value="5">Gunnar</option>
            <option value="6">Anders</option>
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

  function isInputEmpty() {
    var a=document.forms["contactForm"]["name"].value;
    var b=document.forms["contactForm"]["message"].value;
    var c=document.forms["contactForm"]["host"].value;
    var input = document.getElementsByTagName('input');
    if (a==null || a=="",b==null || b=="",c==null || c=="") {
      event.preventDefault();
      alert("Please complete all fields :)");
      return false;
    }
  }
</script>

<?php include('inc/footer.php'); ?>
