<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$name = filter_var($_POST['name'], FILTER_UNSAFE_RAW);
$type = filter_var($_POST['type'], FILTER_UNSAFE_RAW);
$zip = filter_var($_POST['zip'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{2}-[0-9]{3}$/")));
$price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);

if ($name && $type && $zip && $price) {
  echo "Name: $name<br>";
  echo "Type: $type<br>";
  echo "Zip Code: $zip<br>";
  echo "Price: $price<br>";
} else {
  echo "There was an error with your submission. Please try again.";
}
?>
