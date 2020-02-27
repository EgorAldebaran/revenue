<html>
  <head>
    <title>main page</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     require('source.php');
require('form.php');
require('defence.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    list($form_errors,$input)=defence();

    if($form_errors) {
        getForm($form_errors);

    }else {
        process($input);
    }

}else {
    getForm();
}

  ?>
  </body>
</html>
