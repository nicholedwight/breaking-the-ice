<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Breaking The Ice</title>
  <link rel="stylesheet" type="text/css" href="/project1/css/main.css">
  <link rel="icon" type="image/png" href="/project1/img/favicon.png">
  <script type="text/javascript" src="/project1/js/instafeed.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body>
  <header class="l_main_header">
    <div class="logo">
      <a href="index.php">
        <p class="logo_text">breaking the ice</p>
        <?php include("logo.svg"); ?>
      </a>
    </div>
    <nav>
      <a href="#skip" class="offscreen">Skip to Content</a><!-- provides accessibility for screen readers who don't want to go through the nav over and over-->
      <a class="menu_button" href="#" onclick="toggleNav(); return false;">
        <span>&#9776;</span>
      </a>
      <ul class="navigation" id="navigation_list" role="navigation">
          <li><a href="/project1/index.php"
            <?php if ($thisPage === "Home") echo "class='current'"; ?>>Home</a>
          </li>
          <li><a href="/project1/hosts.php"
            <?php if ($thisPage === "Hosts") echo "class='current'"; ?>>Our Hosts</a>
          </li>
          <li class="has_dropdown" id="contact_has_dropdown">
            <a href="#" id="changeableBorder_contact">Contact</a>
            <div class="contact_dropdown">
              <div class="inner">
                <p>
                  <i class="icon icon_mail"></i>
                  <a href="mailto:nicholedwight@gmail.com">nicholedwight@gmail.com</a>
                </p>
                <p>
                  <i class="icon icon_phone"></i>
                  +44 1234 123456
                </p>
                <p>
                  <i class="icon icon_twitter"></i>
                  <a href="https://twitter.com/breakingiceland">@breakingiceland</a>
                </p>
              </div>
            </div>
          </li>
          <li class="has_dropdown"><a href="/project1/faq.php" id="changeableBorder"
            <?php if (substr($thisPage, 0, 3) === "FAQ") echo "class='current'"; ?>>Practical Info</a>
              <ul class="nav_dropdown">
                <li><a href="/project1/faq.php">General Info</a></li>
                <li><a href="/project1/faq/how-to-get-here.php">Getting Here</a></li>
                <li><a href="/project1/faq/weather.php">Weather</a></li>
                <li><a href="/project1/faq/accommodation.php">Accommodation</a></li>
                <li><a href="/project1/faq/testimonials.php">Testimonials</a></li>
              </ul>
          </li>
      </ul>
    </nav>
  </header>
