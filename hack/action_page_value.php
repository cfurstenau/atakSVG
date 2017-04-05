<?php

$myfile = fopen("log.txt", "w") or die("Unable to open file!");
$json_string = json_encode($_POST);

$sql = "update value set value = \"". $_POST["value"]."\" where id = \"" . $_POST["Item"] . "\"";

$combined = $json_string . "\n" . $query;


include('dbconnect.php');
$result = mysqli_query($conn,$sql);

$combined = $combined . "\n" . $result;

fwrite($myfile, $combined);
fclose($myfile);
?>