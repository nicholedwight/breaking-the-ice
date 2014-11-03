<?php $thisPage = "Contact";
  include('inc/header.php');
?>
<main class="secondary_wrapper contact" role="main">
  <a id="skip"> </a>
  <div class="contact_form">

  </div>
  <form class="contact_form" action="/project1/inc/FormMail.php" method="POST" name="breaking_the_ice_form">
		<span class="required">* Required</span>
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" required>
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" onChange="emailvalidation(this,'The email given is not valid');" required>
			</li>
			<li>
				<label for="age">How old are you?</label>
				<select name="age" id="age" required>
					<option selected="selected"> </option>
					<optgroup label="Teenager">
						<option>13-15</option>
						<option>16-19</option>
					</optgroup>
					<optgroup label="Adult">
						<option>20-25</option>
						<option>25-30</option>
						<option>30+</option>
					</optgroup>
				</select>
			</li>
			<li>
				<label for="continent">Where are you from?</label>
				<select name="continent" id="continent">
					<option> </option>
					<optgroup label="Americas">
						<option>North America</option>
						<option>South America</option>
					</optgroup>
					<optgroup label="Eurasia">
						<option>Europe</option>
						<option>Asia</option>
					</optgroup>
						<option>Africa</option>
						<option>Australia</option>
						<option>Antarctica</option>
			</select>
			</li>
			<li>
				<label for="message">Message:</label>
				<textarea name="message" id="message" rows="6" cols="40" required></textarea>
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
