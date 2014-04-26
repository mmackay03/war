<?php
//$_SESSION;

$server = '127.0.0.1';
     $user = 'login';
     $pass = 'login';
     $mydb = 'hw5';
     $table_name = 'stats';
    #$Name = $_REQUEST['Name']; $Address = $_REQUEST['Address'];

     $connect = mysqli_connect( $server, $user, $pass, $mydb ) or die ("Cannot connect to $server using $user Errst=" .  mysql_error());
     $query = "SELECT * FROM $table_name ORDER BY date ASC";
      $res = mysqli_query( $connect, $query ) or die ("Database query failed SQLcmd=$query Error_str=" .  mysql_error());
      

$prefix = '';
echo "[\n";
while ( $row = mysqli_fetch_assoc( $res ) ) {
  echo $prefix . " {\n";
  echo '  "date": "' . $row['date'] . '",' . "\n";
  echo '  "hands": ' . $row['played'] . ',' . "\n";
  echo '  "wins": ' . $row['wins'] . ',' . "\n";
  echo '  "loss": ' . $row['losses'] . ',' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n]";



mysqli_close ($connect);



