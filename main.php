<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     require('source.php');
require('form.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    process();
}else {
    getForm();
}

  ?>
  </body>
</html>
