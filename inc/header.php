<?php
  if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1" && $_SERVER['REMOTE_ADDR'] !=  "::1") { //If I'm running on the uni servers
    $base_url = '/a2-dwight/project1';
  } else {
    //Running from localhost at home
    $base_url = '/project1';
  };
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Breaking The Ice</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/main.css">
  <link href="<?php echo $base_url; ?>/assets/css/lib/lightbox.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/img/favicon.ico">
</head>

<body class="nojs">
  <a href="#skip" class="skiplink focusable visuallyhidden">Skip to Content</a><!-- provides accessibility for screen readers/tab-users who don't want to go through the nav over and over-->
  <?php if ($thisPage === "Home") { ?>
  <header class="l_index_header" role="banner">
  <?php } else {?>
  <header class="l_secondary_header" role="banner">
  <?php } ?>
    <div class="logo">
      <a href="<?php echo $base_url; ?>/index" class="to_home">
        <p class="logo_text">breaking the ice</p>
        <?php include("logo.svg"); ?>
      </a>
    </div>
    <nav role="navigation" aria-label="Main menu">
      <a class="menu_button" href="#" onclick="toggleNav(); return false;">
        <span>&#9776;</span>
      </a>
      <ul class="navigation" id="navigation_list" role="menubar">
          <li class="color_transition">
            <a href="<?php echo $base_url; ?>/index"
              <?php if ($thisPage === "Home") echo "class='current'"; ?>>
              Home
            </a>
          </li>
          <li class="color_transition has_dropdown" aria-haspopup="true">
            <a href="<?php echo $base_url; ?>/hosts" id="changeableBorder1" class="
              <?php if ($thisPage === 'Hosts') echo 'current';?>">
              Our Hosts
            </a>
            <ul aria-hidden="true"
              <?php if ($thisPage === "Home") {
              echo "class='nav_dropdown_transparent host_dropdown has_text_shadow'"; }
              else { echo "class='nav_dropdown host_dropdown'"; } ?>> <!--host_dropdown class is for JS function of adding the current class when hovering over children-->
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/vilhjalmsson" class="color_transition">
                  Rut &#38; Ole
                </a>
              </li>
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/jegtnes" class="color_transition">
                  Alex
                </a>
              </li>
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/ronhovde" class="color_transition">
                  Ville
                </a>
              </li>
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/oskar" class="color_transition">
                  Rolf &#38; Ada
                </a>
              </li>
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/arnason" class="color_transition">
                  Gunnar
                </a>
              </li>
              <li>
                <a href="<?php echo $base_url; ?>/hostfamilies/eklund" class="color_transition">
                  Anders
                </a>
              </li>
            </ul>
          </li>
          <li class="has_dropdown color_transition" aria-haspopup="true">
            <a href="<?php echo $base_url; ?>/info" id="changeableBorder2" class=" <?php if ($thisPage === 'FAQ') echo 'current'; ?>">
              Practical Info
            </a>
              <ul aria-hidden="true"
                <?php if ($thisPage === "Home") {
                echo "class='nav_dropdown_transparent info has_text_shadow'"; }
                else { echo "class='nav_dropdown info'"; } ?>>
                <!--info class is for JS function of adding the current class when hovering over children-->
                <li>
                  <a href="<?php echo $base_url; ?>/info" class="color_transition">
                    Our Story
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url; ?>/info#how-to-get-here" class="color_transition">
                    Getting Here
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url; ?>/info#weather" class="color_transition">
                    Icelandic Weather
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url; ?>/info#accommodation" class="color_transition">
                    Accommodation
                  </a>
                </li>
                <li>
                  <a href="<?php echo $base_url; ?>/info#inspiration" class="color_transition">
                    Inspiration
                  </a>
                </li>
              </ul>
          </li>
          <li class="color_transition">
            <a href="<?php echo $base_url; ?>/contact" <?php if ($thisPage === "Contact") echo "class='current'"; ?>>
              Contact
            </a>
          </li>
      </ul>
    </nav>
  </header>
