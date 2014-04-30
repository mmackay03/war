<?php

require_once("debug.php");
require_once("blackLib.php");
setSessions($debug);
$uid = $_SESSION["uid"];
//db connection
$con = mysqli_connect("127.0.0.1", "login", "login", "blackjack") or die(mysql_error());

//set variables
$chips = $_POST['chips'];
$win = $_POST['win'];
$lose = $_POST['lose'];
$draw = $_POST['draw'];
$color = $_POST['color'];

//query strings
$gameStats = "INSERT INTO `stats` (uid, played, wins, losses, draws, date) VALUES ($uid, 1, $win, $lose, $draw, CURRENT_DATE)";
$queryColor = "UPDATE `settings` SET color = $color WHERE uid = $uid";
$queryStr = "UPDATE `uinfo` SET money = $chips WHERE uid = $uid;";


if (isset($color)) {
    //update color
    mysqli_query($con, $queryColor) or die("Database query failed SQLcmd=$queryColor Error_str=" . mysql_error());
} elseif (isset($chips)) {
    //update stats
    mysqli_query($con, $gameStats) or die("Database query failed SQLcmd=$gameStats Error_str=" . mysql_error());
//update chips
    mysqli_query($con, $queryStr) or die("Database query failed SQLcmd=$queryStr Error_str=" . mysql_error());
}
mysqli_close($con);

