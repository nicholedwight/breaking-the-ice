<?php
$json = file_get_contents("http://magicseaweed.com/api/rha0P5xgEI9Nb9s3YL3M22yMa15ZH6t5/forecast/?spot_id=$location&units=eu"); //This calls the API and pulls the data from MagicSeaweed

//Setting up the empty arrays for echoing out various data in surf forecast table
$chart_images = array();
$chartTimes = array();
$hours = array();
$wave_height = array();
$wind_speed = array();
$wind_direction = array();
$wind_chill = array();

$data = json_decode($json, true); //This is reformatting the JSON data output to a PHP array for me to use later

//Pushing data into the previous arrays to be able to call out in php echoes
foreach ($data as $chart) {
  $chart_images[] = $chart['charts']['swell'];
}
foreach ($data as $time) {
  $chartTimes[] = date("l, F d HA", $time["timestamp"]);
}
foreach ($data as $hour) {
  $hours[] = date("HA", $hour["timestamp"]);
}
foreach ($data as $wave) {
  $wave_height[] = $wave["swell"]["components"]["combined"]["height"];
}
foreach ($data as $speed) {
  $wind_speed[] = $speed["wind"]["speed"];
}
foreach ($data as $direction) {
  $wind_direction[] = round($direction['wind']['direction']/5) * 5;
}
foreach ($data as $chill) {
  $wind_chill[] = $chill["wind"]["chill"] . " &#176C";
}

?>
<!-- outputting the Surf data from the PHP Array pulled from the API  They're in multuple tables because they represent multiple days. This is all live and real data being pulled-->
<div class="table_wrapper_left">
  <span class="table_header"><?php echo date("l, F d", $data[0]["timestamp"]); ?></span>
  <table>
    <tr>
      <th>Time</th>
      <td><?php echo $hours[2]; ?></td>
      <td><?php echo $hours[4]; ?></td>
      <td><?php echo $hours[6]; ?></td>
      <td><?php echo $hours[7]; ?></td>
    </tr>
    <tr>
      <th>Wave height (m)</th>
      <td><?php echo $wave_height[2]; ?></td>
      <td><?php echo $wave_height[4]; ?></td>
      <td><?php echo $wave_height[6]; ?></td>
      <td><?php echo $wave_height[7]; ?></td>
    </tr>
    <tr>
      <th>Wind speed (kph)</th>
      <!-- The below classes have the php round() function in order to create a colour scheme of background colours for the divs in CSS, without having 50+ CSS rules. To avoid that, they're rounded to the nearest multiple of 5 for the class, but the real value is echoed -->
      <td class="wind-speed-<?php echo round($wind_speed[2]/5) * 5; ?>">
        <?php echo $wind_speed[2]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[4]/5) * 5; ?>">
        <?php echo $wind_speed[4]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[6]/5) * 5; ?>">
        <?php echo $wind_speed[6]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[7]/5) * 5; ?>">
        <?php echo $wind_speed[7]; ?>
      </td>
    </tr>
    <tr>
      <th>Wind direction</th>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[2];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[4];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[6];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[7];?>"></span>
      </td>
    </tr>
    <tr>
      <th>Wind chill</th>
      <td><?php echo $wind_chill[2]; ?></td>
      <td><?php echo $wind_chill[4]; ?></td>
      <td><?php echo $wind_chill[6]; ?></td>
      <td><?php echo $wind_chill[7]; ?></td>
    </tr>
  </table>
</div>

<div class="table_wrapper_right">
  <span class="table_header"><?php echo date("l, F d", $data[8]["timestamp"]); ?></span>
  <table>
    <tr>
      <th>Time</th>
      <td><?php echo $hours[10]; ?></td>
      <td><?php echo $hours[12]; ?></td>
      <td><?php echo $hours[14]; ?></td>
      <td><?php echo $hours[15]; ?></td>
    </tr>
    <tr>
      <th>Wave height (m)</th>
      <td><?php echo $wave_height[10]; ?></td>
      <td><?php echo $wave_height[12]; ?></td>
      <td><?php echo $wave_height[14]; ?></td>
      <td><?php echo $wave_height[15]; ?></td>
    </tr>
    <tr>
      <th>Wind speed (kph)</th>
      <!-- The below classes have the php round() function in order to create a colour scheme of background colours for the divs in CSS, without having 50+ CSS rules. To avoid that, they're rounded to the nearest multiple of 5 for the class, but the real value is echoed -->
      <td class="wind-speed-<?php echo round($wind_speed[10]/5) * 5; ?>">
        <?php echo $wind_speed[10]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[12]/5) * 5; ?>">
        <?php echo $wind_speed[12]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[14]/5) * 5; ?>">
        <?php echo $wind_speed[14]; ?>
      </td>
      <td  class="wind-speed-<?php echo round($wind_speed[15]/5) * 5; ?>">
        <?php echo $wind_speed[15]; ?>
      </td>
    </tr>
    <tr>
      <th>Wind direction</th>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[10];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[12];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[14];?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo $wind_direction[15];?>"></span>
      </td>
    </tr>
    <tr>
      <th>Wind chill</th>
      <td><?php echo $wind_chill[10]; ?></td>
      <td><?php echo $wind_chill[12]; ?></td>
      <td><?php echo $wind_chill[14]; ?></td>
      <td><?php echo $wind_chill[15]; ?></td>
    </tr>
  </table>
</div>
