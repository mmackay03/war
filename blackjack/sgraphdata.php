<?php
//$_SESSION;
require_once("debug.php");
require_once("blackLib.php");
setSessions($debug);
$uid = $_SESSION["uid"];

$server = '127.0.0.1';
     $user = 'login';
     $pass = 'login';
     $mydb = 'blackjack';
     $table_name = 'stats';
    #$Name = $_REQUEST['Name']; $Address = $_REQUEST['Address'];

     $connect = mysqli_connect( $server, $user, $pass, $mydb ) or die ("Cannot connect to $server using $user Errst=" .  mysql_error());
//     $query = "SELECT * FROM $table_name ORDER BY date ASC";
     $queryWin = "SELECT *, sum(wins), sum(losses), sum(played), sum(draws) FROM `stats` WHERE uid = $uid GROUP BY date_format(date, '%Y-%m-%d')";
//     $queryWin = "SELECT *, sum(wins), sum(losses), sum(played) FROM `stats` WHERE uid = $uid ORDER BY date ASC";
      $res = mysqli_query( $connect, $queryWin ) or die ("Database query failed SQLcmd=$queryWin Error_str=" .  mysql_error());
      

$prefix = '';
echo "[\n";
while ( $row = mysqli_fetch_assoc( $res ) ) {
  echo $prefix . " {\n";
  echo '  "date": "' . $row['date'] . '",' . "\n";
  echo '  "sumw": ' . $row['sum(wins)'] . ',' . "\n";
  echo '  "sumL": ' . $row['sum(losses)'] . ',' . "\n";
  echo '  "sumD": ' . $row['sum(draws)'] . ',' . "\n";
  echo '  "sumP": ' . $row['sum(played)'] . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n]";



mysqli_close ($connect);

