<?php
  $z = $_GET["zip"];
  sleep(2);
  $url = "http://api.openweathermap.org/data/2.5/weather?zip=$z,us&units=metric&appid=c70c01d38b474bf5d4f010c4a99a6b9d";

  $fp = fopen($url, "r");
  $contents = "";

  while($more = fread ($fp, 1000)) {
    $contents .= $more;
  }

  echo $contents;

?>
