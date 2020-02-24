<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     $user = 'new';
$password = '12345';

try{
    $connect = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'select close from msft where date = "2019-02-19"';
    foreach($connect -> query($sql) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect = null;
    $sql = null;

    $connect0 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect0 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql0 = 'select close from msft where date = "2019-02-28"';
    foreach($connect0 -> query($sql0) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect0 = null;
    $sql0 = null;

    $connect1 = new PDO('mysql1:host=localhost;dbname=finance',$user,$password);
    $connect1 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql1 = 'select close from msft where date = "2019-03-01"';
    foreach($connect1 -> query($sql1) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect1 = null;
    $sql1 = null;
    /*
    $connect2 = new PDO('mysql2:host=localhost;dbname=finance',$user,$password);
    $connect2 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql2 = 'select close from msft where date = "2019-02-29"';
    foreach($connect2 -> query($sql2) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect2 = null;
    $sql2 = null;

    $connect3 = new PDO('mysql3:host=localhost;dbname=finance',$user,$password);
    $connect3 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql3 = 'select close from msft where date = "2019-04-01"';
    foreach($connect3 -> query($sql3) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect3 = null;
    $sql3 = null;


    $connect4 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect4 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql4 = 'select close from msft where date = "2019-04-30"';
    foreach($connect4 -> query($sql4) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect4 = null;
    $sql4 = null;

    $connect5 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect5 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql5 = 'select close from msft where date = "2019-05-01"';
    foreach($connect5 -> query($sql5) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect5 = null;
    $sql5 = null;


    $connect6 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect6 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql6 = 'select close from msft where date = "2019-05-30"';
    foreach($connect6 -> query($sql6) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect6 = null;
    $sql6 = null;


    $connect7 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect7 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql7 = 'select close from msft where date = "2019-06-03"';
    foreach($connect7 -> query($sql7) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect7 = null;
    $sql7 = null;


    $connect8 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect8 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql8 = 'select close from msft where date = "2019-06-28"';
    foreach($connect8 -> query($sql8) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect8 = null;
    $sql8 = null;

    $connect9 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect9 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql9 = 'select close from msft where date = "2019-07-01"';
    foreach($connect9 -> query($sql9) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect9 = null;
    $sql9 = null;


    $connect10 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect10 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql10 = 'select close from msft where date = "2019-07-31"';
    foreach($connect10 -> query($sql10) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect10 = null;
    $sql10 = null;


    $connect11 = new PDO('mysql11:host=localhost;dbname=finance',$user,$password);
    $connect11 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql11 = 'select close from msft where date = "2019-08-01"';
    foreach($connect11 -> query($sql11) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect11 = null;
    $sql11 = null;

    $connect12 = new PDO('mysql12:host=localhost;dbname=finance',$user,$password);
    $connect12 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql12 = 'select close from msft where date = "2019-08-30"';
    foreach($connect12 -> query($sql12) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect12 = null;
    $sql12 = null;


    $connect13 = new PDO('mysql13:host=localhost;dbname=finance',$user,$password);
    $connect13 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql13 = 'select close from msft where date = "2019-09-03"';
    foreach($connect13 -> query($sql13) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect13 = null;
    $sql13 = null;

    $connect14 = new PDO('mysql14:host=localhost;dbname=finance',$user,$password);
    $connect14 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql14 = 'select close from msft where date = "2019-09-30"';
    foreach($connect14 -> query($sql14) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect14 = null;
    $sql14 = null;

    $connect15 = new PDO('mysql15:host=localhost;dbname=finance',$user,$password);
    $connect15 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql15 = 'select close from msft where date = "2019-10-01"';
    foreach($connect15 -> query($sql15) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect15 = null;
    $sql15 = null;

    $connect16 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect16 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql16 = 'select close from msft where date = "2019-10-31"';
    foreach($connect16 -> query($sql16) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect16 = null;
    $sql16 = null;

    $connect17 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect17 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql17 = 'select close from msft where date = "2019-11-01"';
    foreach($connect17 -> query($sql17) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect17 = null;
    $sql17 = null;


    $connect18 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect18 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql18 = 'select close from msft where date = "2019-11-29"';
    foreach($connect18 -> query($sql18) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect18 = null;
    $sql18 = null;

    $connect19 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect19 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql19 = 'select close from msft where date = "2019-12-02"';
    foreach($connect19 -> query($sql19) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect19 = null;
    $sql19 = null;

    $connect20 = new PDO('mysql:host=localhost;dbname=finance',$user,$password);
    $connect20 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql20 = 'select close from msft where date = "2019-12-31"';
    foreach($connect20 -> query($sql20) as $row) {
        print $row['close'];
        print '<br>';
    }

    $connect20 = null;
    $sql20 = null;
    */

}catch(PDOException $e) {
    print "error ".$e->getMessage();
}


  ?>
  </body>
</html>
