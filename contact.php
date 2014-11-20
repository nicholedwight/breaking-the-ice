<?php $thisPage = "Contact";
  include('inc/header.php');
?>
<main class="contact" role="main">
  <a id="skip"> </a>
  <div class="content_width">
    <h1>Contact Us</h1>
    <p>We encourage our guests to get in touch with our hosts in order to secure acommodation and pricing, however, we know this isn't always the easiest! So we will do our best to communicate with our hosts on your behalf if you are unable.</p>
  </div>

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
          <option value="" selected>Desired Host</option>
          <option value="rutole">Rut &#38; Ole</option>
          <option value="alex">Alex</option>
          <option value="ville">Ville</option>
          <option value="rolfada">Rolf &#38; Ada</option>
          <option value="gunnar">Gunnar</option>
          <option value="anders">Anders</option>
        </select>
      </li>
		</ul>
    <input type="hidden" name="thisPage" value="contactResponse">
		<button class="submit" type="submit">Submit</button>
	</form>

  <div id="instafeed" class="quarter_transparent">
    <h2>See what others are doing in Iceland</h2>
  </div>
</main>
<?php include('inc/footer.php'); ?>

<script type="text/javascript">
//Code found from http://instafeedjs.com/ used for the Instagram feed
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'iceland',
        tagName: 'IcelandSecret',
        sortBy: 'most-recent',
        limit: 10,
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}"></a>',
        clientId: '681cd94df6e14db197a650403668c10b'
    });
    feed.run();
</script>

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
