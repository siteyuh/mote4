<?php
$file = file('bodydata.csv');
unset ($file[$_GET['id']]);
file_put_contents('bodydata.csv', $file);
header("Location: ../input.php");
?>