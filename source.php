<?php

     require('msft.php');

     function process() {
         switch($_POST['company']) {
         case 'msft':
             msftProcess();
             break;
         default:
             echo 'error';
         }
     }

  ?>
