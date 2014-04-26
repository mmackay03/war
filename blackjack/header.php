<html>
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
<!--<title>Blackjack - Home</title>-->
<meta name="keywords" content="" />
<meta name="description" content="" />
<script src="js/jquery.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" />
<script src="../js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="../js/amcharts/serial.js" type="text/javascript"></script>
<script src="../js/amcharts/themes/chalk.js" type="text/javascript"></script>
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
                    <li><a href="index.php">Homepage</a></li> 
                    <!--class="current_page_item"-->
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