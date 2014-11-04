<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Breaking The Ice</title>
  <link rel="stylesheet" type="text/css" href="/project1/assets/css/main.css">
  <link href="/project1/assets/css/lib/lightbox.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="/project1/img/favicon.ico">
</head>
<body>
  <?php if ($thisPage === "Home") { ?>
  <header class="l_index_header" role="banner">
  <?php } else {?>
  <header class="l_secondary_header" role="banner">
  <?php } ?>
    <div class="logo">
      <a href="/project1/index.php">
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
          <li>
            <a href="/project1/contact.php"
            <?php if ($thisPage === "Contact") echo "class='current'"; ?>>Contact</a>
          </li>
          <li class="has_dropdown"><a href="/project1/faq.php" id="changeableBorder"
            <?php if (substr($thisPage, 0, 3) == "FAQ") echo "class='current'"; ?>>Practical Info</a>
              <ul <?php if ($thisPage === "Home") { echo "class='nav_dropdown_transparent'"; } else { echo "class='nav_dropdown'"; } ?>>
                <li><a href="/project1/faq.php">General Info</a></li>
                <li><a href="/project1/faq/how-to-get-here.php">Getting Here</a></li>
                <li><a href="/project1/faq/weather.php">Icelandic Weather</a></li>
                <li><a href="/project1/faq/accommodation.php">Accommodation</a></li>
                <li><a href="/project1/faq/testimonials.php">Testimonials</a></li>
              </ul>
          </li>
      </ul>
    </nav>
  </header>
