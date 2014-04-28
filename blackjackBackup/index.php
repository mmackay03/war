<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
   require_once("debug.php");
   require_once("blackLib.php");
   setSessions($debug);
?>
<title>Blackjack - Home</title>
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Harvest
Version    : 1.0
Released   : 20081106
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Blackjack - Home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="logo-wrap">
<div id="logo">
	<h1><a href="#">Blackjack </a></h1>
	<h2> Design by Free Css Templates</h2>
</div>
</div>

<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
                        <li><a href="play.php">Play</a></li>
                        <li><a href="stats.php">Individual Stats</a></li>
                        <li><a href="leader.php">leader board</a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li class="last"><a href="logout.php">Log Out</a>
                            <?php 
                            if(isset($_SESSION["user"]))
                                echo $_SESSION["user"]
                            
                            ?>
                        </li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
	<!-- start content -->
	<div id="contentmain">
		<div id="bannermain">&nbsp;</div>
		<div class="post">
			<h1 class="title">Log in to play</h1>
			<div id="user">
				<div id="userleft">
                                    <form action="check_user.php" method="post">
					<div id="centerthis"><h4>Already a user?</h4></div>
					user name: <input type="text" name='cuser'><br />
					password:  <input type="password" name='cpass'><br />
					<button type="submit" name="csubmit">Log in
                                    </form>
				</div>
				<div id="userright">
                                    <form action="check_user.php" method="post">
					<div id="centerthis"><h4>New user?</h4></div>
					user name: <input type="text" name="nuser"><br />
					password:  <input type="password" name="npass1"><br />
					re-enter password: <input type="password" name="npass2"><br />
					<button type="submit" name="nsubmit">Create account
                                    </form>                                     
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal">(c) 2014 BLACKJACK. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
</div>
<!-- end footer -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>