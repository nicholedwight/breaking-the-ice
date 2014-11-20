<?php $thisPage = "FAQ";
  include('inc/header.php');
?>
  <main class="info_wrapper" role="main">
  <?php include('inc/faq_nav.php'); ?>
    <div class="inner_info_wrapper">
      <a id="skip"> </a>
      <h1>Practical Info</h1>
      <article id="about-us">
        <h2>Our Story</h2>
        <p>At Breaking the Ice, we provide a unique service; we try to match you with one of our fabulous and adventure-seeking hosts. We feel that this is one of the best ways to experience life in Iceland, with the locals! They all have been thoroughly reviewed and are up to our standards of awesome. They'll be able to show you the best surf spots, hiking trails, and all hidden gems of Iceland.</p>
        <p>We believe in quality and our goal is to make sure that our visitors get the best possible experience. Enjoy the warm, friendly atmosphere of the surf culture in our beautiful arctic environment.</p>
        <h2>Where's Iceland?</h2>
        <p>Iceland is a North Atlantic island and the westernmost country in Europe, midway between North America and mainland Europe. It lies about 800 km northwest of Scotland and 970 km west of Norway, and its northern coast is just below the Arctic Circle. From London, Iceland is the same distance as Athens. It is also the same distance from New York to Iceland as from New York to Los Angeles. Reykjavík is the world’s northernmost capital city.</p>
        <div class="info_image_row">
          <img src="/project1/assets/img/icelandmap.jpg" alt="Bonfire by the beach">
        </div>
        <h2>How long is it daylight for in Iceland?</h2>
        <p>Some of our visitors who join us in the Summer ask when it will get dark, they're told "sometime in August". The sun hardly sets at all in the Summer around the southern half of the country, if you stay north of Reykjavík it's daylight 24/7. If you joing us in the Winter, however, do expect only a few, 3-4, hours of daylight; come hunt the lights with us! The Northern Lights are a spectacular part of Iceland in the Winter and many of our hosts enjoy taking our guests out to see them. Spring and Fall daylight hours will be more normal.</p>
        <div class="testimonial">
          <blockquote><p>We booked our holiday through Breaking the Ice and we wouldn't dream of doing it any other way! Our host was so friendly and welcoming, and they were adventurous just like us! It felt like a trip to see some family in Iceland.</p> <strong>- Anna</strong>. Oxford, UK</blockquote>
        </div>

        <div class="info_image_row">
          <img src="/project1/assets/img/bonfire.jpg" alt="Bonfire by the beach">
          <img src="/project1/assets/img/blanketgirl.jpg" alt="Enjoying the scenery">
          <img src="/project1/assets/img/icelandhills.jpg" alt="Enjoying the scenery">
        </div>
      </article>


      <article id="how-to-get-here">
        <h1>How to get to Iceland</h1>
        <p>Frequent flights operate to Iceland from main cities in Europe and North America and many gateways are served daily. Flight times to Europe are two to four hours. Airlines such as <a href="http://www.icelandair.co.uk/">Iceland Air</a> and <a href="http://www.easyjet.com/en/cheap-flights/iceland">EasyJet</a> have regular flights to Iceland.</p>

        <div class="testimonial">
          <blockquote><p>Breaking the Ice has been a great alternative to cookie-cutter hotel rooms and is great for a large or small family. The places usually have much more room, cooking facilities, and other amenities not found at a hotel and it's much more private. Plus all the hosts I've stayed with have been very friendly and go out of their way to make my stay as good as it can be. I'll be booking many more surfing holidays through here!</p> <strong>- Steven</strong>. Atlanta, GA, USA</blockquote>
        </div>

        <div class="info_image_row">
          <img src="/project1/assets/img/sea.jpg" alt="Closeup of some gnarly waves">
          <img src="/project1/assets/img/waves.png" alt="Waves crashing on one another">
          <img src="/project1/assets/img/snowymountains.jpg" alt="A view of the mountains overlooking a small town">
        </div>
      </article>



      <article id="weather">
        <h1>Weather in Iceland</h1>
        <p>Although Reykjavik is the world’s northernmost capital, Iceland is warmed by the Gulf Stream, resulting in a surprisingly mild, coastal climate. The average summer temperature in Reykjavik is 10.6°C/51°F in July, with average highs of 24.3°C/76°F. The warmest months are from June to September when visitors can witness the midnight sun. Alternately, Iceland’s coldest months are November to January, when average winter temperature in Reykjavik are similar to New York City’s, about 0°C/32°F in January (average highs are 9.9°C/50°F).</p>
        <div class="forecast">
          <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="90%" src="http://forecast.io/embed/#lat=64.1474&lon=-21.9340&name=Reykjavík&units=uk&color=#00CD9B"> </iframe>
        </div>
      </article>

      <article id="accommodation">
        <h1>Accommodation while you're here</h1>
        <p>We encourage our guests to get in touch with our <a href="/project1/hosts.php">hosts</a> in order to secure acommodation and pricing, however, we know this isn't always the easiest! So we will do our best to communicate with our hosts on your behalf if you are unable.</p>
        <div class="hosts_photos">
          <a href="hostfamilies/vilhjalmsson" class="has_tooltip">
            <span class="tooltip">Rut and Ole in Reykjavik</span>
            <img src="/project1/assets/img/vil_profile.jpg" alt="Rut and Ole">
          </a>
          <a href="hostfamilies/jegtnes" class="has_tooltip">
            <span class="tooltip">Alex in Reykjanesbær</span>
            <img src="/project1/assets/img/jegtnes.jpg" alt="Alex">
          </a>
          <a href="hostfamilies/ronhovde" class="has_tooltip">
            <span class="tooltip">Ville in Reykjanesbær</span>
            <img src="/project1/assets/img/ron_profile.jpg" alt="Ville">
          </a>
          <a href="hostfamilies/oskar" class="has_tooltip">
            <span class="tooltip">Rolf and Ada in Reykjanesbær</span>
            <img src="/project1/assets/img/osk_profile.jpg" alt="Rolf and Ada">
          </a>
          <a href="hostfamilies/arnason" class="has_tooltip">
            <span class="tooltip">Gunnar in Reykjanesbær</span>
            <img src="/project1/assets/img/arn_profile.jpg" alt="Gunnar">
          </a>
          <a href="hostfamilies/eklund" class="has_tooltip">
            <span class="tooltip">Anders in Reykjanesbær</span>
            <img src="/project1/assets/img/ekl_profile.jpg" alt="Anders">
          </a>
        </div>
      </article>

      <article id="inspiration">
        <h1>See what others are doing in Iceland</h1>
        <div id="instafeed"></div>
      </article>

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
