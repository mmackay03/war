<?php
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());

   require_once("debug.php");
   require_once("blackLib.php");
   
   
   $get = "SELECT uid FROM user WHERE '$_SESSION[user]' = user_name"; 
   $getUid = mysqli_query($con, $get);
   $info = mysqli_fetch_assoc($getUid);
   $_SESSION['uid'] = $info["uid"];
   $mon =  "INSERT INTO uinfo (uid) VALUES ($_SESSION[uid])";
   $add = mysqli_query($con, $mon);
   setSessions($debug);
   header("Location:index.php");