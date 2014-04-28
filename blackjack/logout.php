<?php 
require_once("debug.php");
   require_once("blackLib.php");
   setSessions($debug);
 $past = time() - 100; 

 //this makes the time in the past to destroy the cookie 

 setcookie(ID_blackjack, gone, $past); 

 setcookie(Key_blackjack, gone, $past); 

 header("Location: index.php"); 
 
 session_destroy();
 header("Location: index.php");

 ?> 
