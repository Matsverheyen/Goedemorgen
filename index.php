<?php

date_default_timezone_set("Europe/Amsterdam");
$time = date("h");
$full_time = date("h:i");

switch ($time) {
  case ($time >= 06 && $time < 12):
    $msg = "Ochtend";
    $img = "images/morning.png";
    break;
  
  case ($time >= 12 && $time < 18):
    $msg = "Middag";
    $img = "images/afternoon.png";
    break;

  case ($time >= 18):
    $msg = "Avond";
    $img = "images/evening.png";
    break;

  case ($time >= 00 && $time < 06):
    $msg = "Nacht";
    $img = "images/night.png";
    break;

  default:
    $msg = 'error';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Goedemorgen</title>
</head>
<body>
  <style>
    body {
      background-image: url(<?=$img?>);
    }

    h1 {
      font-size: 250%;
      text-align: center;
      color: white;
    }

    .main {
      margin-top: 20%;
    }
  </style>
  <div class="main">
    <h1>Goede <?=$msg?>!</h1>
    <h1>Het is nu: <?=$full_time?></h1>
  </div>
</body>
</html>