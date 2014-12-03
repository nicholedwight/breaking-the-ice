<footer>
  <div class="footer_wrapper" id="contact">
    <p class="color_transition cl-effect-14">
      <a href="<?php echo $base_url; ?>/index">home</a> |
      <a href="<?php echo $base_url; ?>/hosts">hosts</a> |
      <a href="<?php echo $base_url; ?>/contact">contact</a> |
      <a href="<?php echo $base_url; ?>/info">practical info</a>
    </p>

    <p class="copyright color_transition">2014 Nichole Dwight / Made with Love and Caffeine / <a href="<?php echo $base_url; ?>/resources.php">Resources</a></p>
  </div>
</footer>

<script src="<?php echo $base_url; ?>/assets/js/lib/jquery-1.11.0.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/lib/jQuery.headroom.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/lib/lightbox.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/lib/headroom.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/chartcycle.js.php"></script>
<script src="<?php echo $base_url; ?>/assets/js/main.js"></script>


<script type="text/javascript">
//The two variables below create a JS variable from the PHP arrays created on surfdata.php
<?php if(isset($chart_images)) { //Only loads these variables on the Host pages, therefore preventing any JS errors with undefined variables
  echo "var chartImages =" . json_encode($chart_images) . ";";
  echo "var chartTimes =" . json_encode($chartTimes) . ";";
};?>

  $('#swell_slider').on('input change', function() {
    changeChartFrame($('#chart'), $(this).val(), chartImages); //Calls the function to change chart image based on slider position
    changeTimeFrame($(this).val(), chartTimes); //Calls the time changing function to change the time based on the frame value in the slider
  });

  $('#chart').click(function(){
    chartsCycle(1, chartImages);
    chartTimesCycle(1, chartTimes); //Calls the function with a count of 1 since 0 is set in the html above
  });
</script>
</body>
</html>
