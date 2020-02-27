<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

$mysqli = new mysqli("localhost", "new", "12345", "finance");
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " .
$mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "new", "12345", "finance", 3306);
if ($mysqli->connect_errno) {
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " .
$mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

  ?>
  </body>
</html>
