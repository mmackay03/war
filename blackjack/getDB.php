<?php
require_once 'blackLib.php';
// Create connection
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $user = $_SESSION["user"];
  $uid = $_SESSION["uid"];
  //echo $uid;
  //echo $user;
  
$getMon = mysqli_query($con, "SELECT money FROM uinfo WHERE $uid = uid ");
$getWin = mysqli_query($con, "SELECT wins FROM `stats` WHERE $uid = uid ");
$winInfo = mysqli_fetch_array( $getWin );
$getLos = mysqli_query($con, "SELECT losses FROM `stats` WHERE $uid = uid ");
$losInfo = mysqli_fetch_array( $getLos );
//echo $getMon;
while($info = mysqli_fetch_array( $getMon )){
    print "[{\"chips\":" . $info['money'] . "},"
            . "{\"win\":" . $winInfo['wins'] . "},"
            . "{\"lose\":" . $losInfo['losses'] . "}]";
    //echo $info;
    //echo "<br/>";
    //echo $info["money"];
}
