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
      <a href="/project1/index">
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
          <li><a href="/project1/index"
            <?php if ($thisPage === "Home") echo "class='current'"; ?>>Home</a>
          </li>
          <li>
            <a href="/project1/hosts"
            <?php if ($thisPage === "Hosts") echo "class='current'"; ?>>Our Hosts</a>
            <ul <?php if ($thisPage === "Home") {
              echo "class='nav_dropdown_transparent has_text_shadow'"; }
              else { echo "class='nav_dropdown'"; } ?>>
              <li>
                <a href="/project1/hostfamilies/vilhjalmsson">Rut &#38; Ole</a>
              </li>
              <li>
                <a href="/project1/hostfamilies/jegtnes">Alex</a>
              </li>
              <li>
                <a href="/project1/hostfamilies/ronhovde">Ville</a>
              </li>
              <li>
                <a href="/project1/hostfamilies/oskar">Rolf &#38; Ada</a>
              </li>
              <li>
                <a href="/project1/hostfamilies/arnason">Gunnar</a>
              </li>
              <li>
                <a href="/project1/hostfamilies/eklund">Anders</a>
              </li>
            </ul>
          </li>
          <li class="has_dropdown">
            <a href="/project1/info" id="changeableBorder"
              <?php if (substr($thisPage, 0, 3) == "FAQ") echo "class='current'"; ?>>
              Practical Info
            </a>
              <ul <?php if ($thisPage === "Home") {
                echo "class='nav_dropdown_transparent has_text_shadow'"; }
                else { echo "class='nav_dropdown'"; } ?>>
                <li>
                  <a href="/project1/info">Our Story</a>
                </li>
                <li>
                  <a href="/project1/info#how-to-get-here">Getting Here</a>
                </li>
                <li>
                  <a href="/project1/info#weather">Icelandic Weather</a>
                </li>
                <li>
                  <a href="/project1/info#accommodation">Accommodation</a>
                </li>
                <li>
                  <a href="/project1/info#inspiration">Inspiration</a>
                </li>
              </ul>
          </li>
          <li>
            <a href="/project1/contact"
            <?php if ($thisPage === "Contact") echo "class='current'"; ?>>Contact</a>
          </li>
      </ul>
    </nav>
  </header>
