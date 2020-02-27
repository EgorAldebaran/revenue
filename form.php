<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     function getForm($errors = []) {
         if($errors) {
             print "mistake this forms";
             print implode($errors);
         }
         print <<< _HTML_
             <form method = "post" action = "$_SERVER[PHP_SEFL]">
         choice company: <input type = "text" name = "company">
             <input type = "submit" value = "R">
         </form>
_HTML_;
     }



  ?>
  </body>
</html>
