<?php
$json = file_get_contents('http://magicseaweed.com/api/rha0P5xgEI9Nb9s3YL3M22yMa15ZH6t5/forecast/?spot_id=4297&units=eu'); //This calls the API and pulls the data from MagicSeaweed
$data = json_decode($json, true); //This is reformatting the JSON data output to a PHP array for me to use later
?>
<!-- outputting the Surf data from the PHP Array pulled from the API  They're in multuple tables because they represent multiple days. This is all live and real data being pulled-->
<div class="table_wrapper_left">
  <table>
    <tr class="table_header">
      <?php echo date("l, F d", $data[0]["timestamp"]); ?>
    </tr>
    <tr>
      <th>Time</th>
      <th><?php echo date("HA", $data[2]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[4]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[6]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[7]["timestamp"]); ?></th>
    </tr>
    <tr>
      <th>Wave height</th>
      <td><?php echo $data[2]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[4]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[6]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[7]["swell"]["components"]["combined"]["height"]; ?></td>
    </tr>
    <tr>
      <th>Wind speed</th>
      <td class="wind-speed-<?php echo round($data[2]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[2]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[4]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[4]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[6]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[6]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[7]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[7]["wind"]["speed"]; ?>
      </td>
    </tr>
    <tr>
      <th>Wind direction</th>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[2]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[4]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[6]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[7]['wind']['direction']/5) * 5;?>"></span>
      </td>
    </tr>
    <tr>
      <th>Wind chill</th>
      <td><?php echo $data[2]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[4]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[6]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[7]["wind"]["chill"] . " &#176C"; ?></td>
    </tr>
  </table>
</div>

<div class="table_wrapper_right">
  <table>
    <tr class="table_header">
      <?php echo date("l, F d", $data[8]["timestamp"]); ?>
    </tr>
    <tr>
      <th>Time</th>
      <th><?php echo date("HA", $data[10]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[12]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[14]["timestamp"]); ?></th>
      <th><?php echo date("HA", $data[15]["timestamp"]); ?></th>
    </tr>
    <tr>
      <th>Wave height</th>
      <td><?php echo $data[2]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[4]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[6]["swell"]["components"]["combined"]["height"]; ?></td>
      <td><?php echo $data[7]["swell"]["components"]["combined"]["height"]; ?></td>
    </tr>
    <tr>
      <th>Wind speed</th>
      <td class="wind-speed-<?php echo round($data[10]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[10]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[12]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[12]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[14]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[14]["wind"]["speed"]; ?>
      </td>
      <td class="wind-speed-<?php echo round($data[15]["wind"]["speed"]/5) * 5;?>">
        <?php echo $data[15]["wind"]["speed"]; ?>
      </td>
    </tr>
    <tr>
      <th>Wind direction</th>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[10]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[12]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[14]['wind']['direction']/5) * 5;?>"></span>
      </td>
      <td>
        <span class="msw-ssa msw-ssa-<?php echo round($data[15]['wind']['direction']/5) * 5;?>"></span>
      </td>
    </tr>
    <tr>
      <th>Wind chill</th>
      <td><?php echo $data[10]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[12]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[14]["wind"]["chill"] . " &#176C"; ?></td>
      <td><?php echo $data[15]["wind"]["chill"] . " &#176C"; ?></td>
    </tr>
  </table>
</div>
