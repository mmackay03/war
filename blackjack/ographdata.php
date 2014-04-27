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
     $query = "SELECT * FROM $table_name ORDER BY date ASC";
     $queryWin = "SELECT *, sum(wins), sum(losses), sum(played) FROM `stats`";
      $res = mysqli_query( $connect, $queryWin ) or die ("Database query failed SQLcmd=$query Error_str=" .  mysql_error());
      

$prefix = '';
echo "[\n";
while ( $row = mysqli_fetch_assoc( $res ) ) {
  echo $prefix . " {\n";
  echo '  "date": "' . $row['date'] . '",' . "\n";
  echo '  "hands": ' . $row['played'] . ',' . "\n";
  echo '  "wins": ' . $row['wins'] . ',' . "\n";
  echo '  "loss": ' . $row['losses'] . ',' . "\n";
  echo '  "sumw": ' . $row['sum(wins)'] . ',' . "\n";
  echo '  "sumL": ' . $row['sum(losses)'] . ',' . "\n";
  echo '  "sumP": ' . $row['sum(played)'] . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n]";



mysqli_close ($connect);



