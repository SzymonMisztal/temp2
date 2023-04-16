<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form action="posts.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="type">Type:</label><br>
  <select id="type" name="type">
    <option value="computer">Computer</option>
    <option value="printer">Printer</option>
    <option value="monitor">Monitor</option>
  </select><br>
  <label for="zip">Zip Code:</label><br>
  <input type="text" id="zip" name="zip"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br><br>
  <input type="submit" value="Submit">
</form>
<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$n = $_GET['n'];

if (!isset($n) || !is_numeric($n) || $n < 5 || $n > 20) {
    $n = 10;
    echo '<p>Incorrect data provided. Using default value of n=10.</p>';
}

$elements = array();
for ($i = 0; $i < $n; $i++) {
    $elements[] = rand(1, 99);
}

echo '<table>';
echo '<tr>';
echo '<th class=header></th>';
foreach ($elements as $element) {
    echo '<th class=header>' . $element . '</th>';
}
echo '</tr>';

foreach ($elements as $element) {
    echo '<tr>';
    echo '<th class=header>' . $element . '</th>';
    foreach ($elements as $other_element) {
        $result = $element * $other_element;
        $class = ($result % 2 == 0) ? 'even' : 'odd';
        echo '<td class="' . $class . '">' . $result . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

</body>

