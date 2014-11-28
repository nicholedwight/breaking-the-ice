<?php header('Content-Type: text/javascript'); ?>
//This function cycles through all the chart images to produce a gif
function chartsCycle(counter, chartImages) {

  $('#chart').attr('src', chartImages[counter]); //Sets the new source of each chart image within the array
  counter++;
  setTimeout(function() {chartsCycle(counter, chartImages)}, 300); //May be laggy because this assumes it will always load within 300ms, not the best way to do this but AJAX wasn't really an option for this assignment. The timeout calls itself and adds 1 until the last frame of the image has been produced
};

function chartTimesCycle(counter, chartTimes) {

  if (counter < 40) {
    $('.surf_data h2').text(chartTimes[counter]);
    counter++;
    setTimeout(function() {chartTimesCycle(counter, chartTimes)}, 300);
  } //This function cycles through the timestamps that match the swell chart timage and displays them.
};

function changeChartFrame(element, frame, chartImages)  {

  $(element).attr('src', chartImages[frame]); //Sets the image displayed to the image indexed out of the 40 available
}

function changeTimeFrame(frame, chartTimes) {
  $('.surf_data h2').text(chartTimes[frame]);
}
