<?php $thisPage = "Contact";
  include('inc/header.php');
?>
<main class="contact" role="main">
  <a id="skip"> </a>
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
	</script>
<?php include('inc/footer.php'); ?>
