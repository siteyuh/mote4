<?php
date_default_timezone_set('Asia/Tokyo');

$filename = "bodydata.csv";

$date = str_replace(PHP_EOL, '', $_POST['date']);
$weight = str_replace(PHP_EOL, '', $_POST['weight']);
$fat = str_replace(PHP_EOL, '', $_POST['fat']);
//var_dump($content);
// 時間
//$d = getdate();
//$datemonth = $d["mon"];
//$dateday = $d["mday"];
//$date = $d["year"] . "/" . $d["mon"] . "/" . $d["mday"];
$array = compact("date", "weight", "fat");
$string = implode(",", $array);

$file = fopen($filename, "a") or die("error");
fputs($file, $string."\n");
flock($file, LOCK_EX);

fclose($file);

header("Location: ../input.php");

?>