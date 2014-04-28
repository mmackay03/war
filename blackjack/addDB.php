<?php
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());

   require_once("debug.php");
   require_once("blackLib.php");
   
   
   $get = "SELECT uid FROM user WHERE '$_SESSION[user]' = user_name"; 
   $getUid = mysqli_query($con, $get);
   $info = mysqli_fetch_assoc($getUid);
   $_SESSION['uid'] = $info["uid"];
   $chips =  "INSERT INTO uinfo (uid) VALUES ($_SESSION[uid])";
   $addChips = mysqli_query($con, $chips);
   $color =  "INSERT INTO settings (uid) VALUES ($_SESSION[uid])";
   $addColor = mysqli_query($con, $color);
   $admin = "INSERT INTO admin (uid) VALUES ($_SESSION[uid])";
   $addAdmin = mysqli_query($con, $admin);
   setSessions($debug);
   header("Location:play.php");