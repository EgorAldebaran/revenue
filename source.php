<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     require('msft.php');

     function process() {
         switch($_POST['company']) {
         case 'msft':
             processSearchRevenue($elementes);
             break;
         default:
             echo 'error';
         }
     }

  ?>
  </body>
</html>
