<html>
  <head>
    <title>example</title>
    <meta charset = 'utf-8'>
  </head>
  <body>
<?php

     $user = 'new';
$password = '12345';
$db = 'finance';
$localhost = 'localhost';


     function processSearchRevenue($sys) {
         for($i = 0; $i < 12; $i++) {
             $result[$i] = ($sys[$i+1] / $sys[$i]) - 1;
         }
         echo array_sum($result)/12;
     }

$company = 'msft';

$mysqli = new mysqli($localhost, $user, $password, $db);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " .
                                              $mysqli->connect_error;
}

$res = $mysqli->query("select close from $company where date = '2019-02-19'");
$res0 = $mysqli ->query("select close from $company where date = '2019-02-28'");
$res1 = $mysqli ->query("select close from $company where date = '2019-03-01'");
$res2 = $mysqli ->query("select close from $company where date = '2019-03-29'");
$res3 = $mysqli ->query("select close from $company where date = '2019-04-01'");
$res4 = $mysqli ->query("select close from $company where date = '2019-04-30'");
$res5 = $mysqli ->query("select close from $company where date = '2019-05-01'");
$res6 = $mysqli ->query("select close from $company where date = '2019-05-31'");
$res7 = $mysqli ->query("select close from $company where date = '2019-06-03'");
$res8 = $mysqli ->query("select close from $company where date = '2019-06-28'");
$res9 = $mysqli ->query("select close from $company where date = '2019-07-01'");
$res10 = $mysqli ->query("select close from $company where date = '2019-07-31'");
$res11 = $mysqli ->query("select close from $company where date = '2019-08-01'");
$res12 = $mysqli ->query("select close from $company where date = '2019-08-30'");
$res13 = $mysqli ->query("select close from $company where date = '2019-09-03'");
$res14 = $mysqli ->query("select close from $company where date = '2019-09-30'");
$res15 = $mysqli ->query("select close from $company where date = '2019-10-01'");
$res16 = $mysqli ->query("select close from $company where date = '2019-10-31'");
$res17 = $mysqli ->query("select close from $company where date = '2019-11-01'");
$res18 = $mysqli ->query("select close from $company where date = '2019-11-29'");
$res19 = $mysqli ->query("select close from $company where date = '2019-12-02'");
$res20 = $mysqli ->query("select close from $company where date = '2019-12-31'");
$res21 = $mysqli ->query("select close from $company where date = '2020-01-02'");
$res22 = $mysqli ->query("select close from $company where date = '2020-01-31'");
$res23 = $mysqli ->query("select close from $company where date = '2020-02-03'");
$res24 = $mysqli ->query("select close from $company where date = '2020-02-14'");

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
//echo $row['close'].'<br>';
    $row0 = $res0->fetch_assoc();
//echo $row0['close'].'<br>';
    $row1 = $res1->fetch_assoc();
//echo $row1['close'].'<br>';
    $row2 = $res2->fetch_assoc();
//echo $row2['close'].'<br>';
    $row3 = $res3->fetch_assoc();
//echo $row3['close'].'<br>';
    $row4 = $res4->fetch_assoc();
//echo $row4['close'].'<br>';
    $row5 = $res5->fetch_assoc();
//echo $row5['close'].'<br>';
    $row6 = $res6->fetch_assoc();
//echo $row6['close'].'<br>';
    $row7 = $res7->fetch_assoc();
//echo $row7['close'].'<br>';
    $row8 = $res8->fetch_assoc();
//echo $row8['close'].'<br>';
    $row9 = $res9->fetch_assoc();
//echo $row9['close'].'<br>';
    $row10 = $res10->fetch_assoc();
//echo $row10['close'].'<br>';
    $row11 = $res11->fetch_assoc();
//echo $row11['close'].'<br>';
    $row12 = $res12->fetch_assoc();
//echo $row12['close'].'<br>';
    $row13 = $res13->fetch_assoc();
//echo $row13['close'].'<br>';
    $row14 = $res14->fetch_assoc();
//echo $row14['close'].'<br>';
    $row15 = $res15->fetch_assoc();
//echo $row15['close'].'<br>';
    $row16 = $res16->fetch_assoc();
//echo $row16['close'].'<br>';
    $row17 = $res17->fetch_assoc();
//echo $row17['close'].'<br>';
    $row18 = $res18->fetch_assoc();
//echo $row18['close'].'<br>';
    $row19 = $res19->fetch_assoc();
//echo $row19['close'].'<br>';
    $row20 = $res20->fetch_assoc();
//echo $row20['close'].'<br>';
    $row21 = $res21->fetch_assoc();
//echo $row21['close'].'<br>';
    $row22 = $res22->fetch_assoc();
//echo $row22['close'].'<br>';
    $row23 = $res23->fetch_assoc();
//echo $row23['close'].'<br>';
    $row24 = $res24->fetch_assoc();
//echo $row24['close'].'<br>';
    $averenge = ($row['close'] + $row1['close'] + $row2['close'] + $row3['close'] + $row4['close'] + $row5['close']
                 + $row6['close'] + $row7['close'] + $row8['close'] + $row9['close'] + $row10['close'] +
                 $row11['close'] + $row12['close'] + $row13['close'] + $row14['close'] + $row15['close'] +
                 $row16['close'] + $row17['close'] + $row18['close'] + $row19['close'] + $row20['close'] +
                 $row21['close'] + $row22['close'] + $row23['close'] + $row24['close']) / 25;

    $elementes = array($row['close'] , $row2['close'] , $row4['close'] ,
                       $row6['close'] , $row8['close'] ,  $row10['close'] ,
                       $row12['close'] , $row14['close'] , $row16['close'] , $row18['close'] ,  $row20['close'] ,
                       $row22['close'] ,  $row24['close']);
}

  ?>
  </body>
</html>
