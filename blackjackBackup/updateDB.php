

<?php

require_once("debug.php");
require_once("blackLib.php");
setSessions($debug);
$uid = $_SESSION["uid"];
//include('../includes/dbopen.php');
$con = mysqli_connect("127.0.0.1", "login", "login", "blackjack") or die(mysql_error());


$chips = $_POST['chips'];
//$chips = 16000;
$win = $_POST['win'];
//$win = 5;
//$lose = 5;
$lose = $_POST['lose'];
$draw = $_POST['draw'];
$color = $_POST['color'];
$gameStats = "INSERT INTO `stats` (uid, played, wins, losses, draws) VALUES ($uid, 1, $win, $lose, $draw)";
//$winStr = "UPDATE `stats` SET wins = $win WHERE uid = $uid;";
//$losStr = " UPDATE `stats` SET losses = $lose WHERE uid = $uid;";
$queryColor = "UPDATE `settings` SET color = $color WHERE uid = $uid";
$queryStr = "UPDATE `uinfo` SET money = $chips WHERE uid = $uid;";

//mysqli_query($con, $winStr) or die("Database query failed SQLcmd=$winStr Error_str=" . mysql_error());
//mysqli_query($con, $losStr) or die("Database query failed SQLcmd=$losStr Error_str=" . mysql_error());
if (isset($color)){
    mysqli_query($con, $queryColor) or die("Database query failed SQLcmd=$queryColor Error_str=" . mysql_error());
}elseif (isset($chips)){
mysqli_query($con, $gameStats) or die("Database query failed SQLcmd=$gameStats Error_str=" . mysql_error());
mysqli_query($con, $queryStr) or die("Database query failed SQLcmd=$queryStr Error_str=" . mysql_error());
}
mysqli_close($con);

