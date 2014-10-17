<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Breaking The Ice</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <script type="text/javascript" src="js/instafeed.min.js"></script>
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
          <li><a href="index.php"
            <?php if ($thisPage == "Home") echo "class='current'"; ?>>Home</a>
          </li>
          <li><a href="hosts.php"
            <?php if ($thisPage == "Hosts") echo "class='current'"; ?>>Our Hosts</a>
          </li>
          <li><a href="contact.php"
            <?php if ($thisPage == "Contact") echo "class='current'"; ?>>Contact</a>
          </li>
          <li class="has_dropdown"><a href="faq.php" id="changeableBorder"
            <?php if ($thisPage == "FAQ") echo "class='current'"; ?>>Practical Info</a>
              <ul class="nav_dropdown">
                <li><a href="faq.php">General Info</a></li>
                <li><a href="how-to-get-here.php">Getting Here</a></li>
                <li><a href="weather.php">Weather</a></li>
                <li><a href="accommodation.php">Accommodation</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
              </ul>
          </li>
      </ul>
    </nav>
  </header>
