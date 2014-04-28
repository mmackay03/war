<!DOCTYPE html>

<?php
?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Individual Stats</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" />
    <script src="../js/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="../js/amcharts/serial.js" type="text/javascript"></script>
    <script src="../js/amcharts/themes/dark.js" type="text/javascript"></script>

    <style>
        td, th{
            border: 1px solid grey;
            padding: 5px;
            text-align: right;   
        }
        h4{
            text-align: center;
        }
        #chartTable{
            position: static;
            margin-left: auto;
            margin-right: auto;
            width: 300px;
            height: 400px;
        }
        #chartdiv{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
                <li><a href="play.php">Play</a></li>
                <li class="current_page_item"><a href="stats.php">Individual Stats</a></li>
                <li><a href="leader.php">leader board</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li class="last"><a href="#">Log Out</a></li>
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
                    <div id="banner">&nbsp;</div><br />
                    <div class="post">
                        <h1 class="title">Individual Stats </h1>
                        <br />
                        <div id="chartdiv" style="width: 740px; height: 400px;"></div>

                        <div id="chartTable">

                        </div>
                        <script type="text/javascript">
                            AmCharts.loadJSON = function(url) {
                                // create the request
                                if (window.XMLHttpRequest) {
                                    // IE7+, Firefox, Chrome, Opera, Safari
                                    var request = new XMLHttpRequest();
                                } else {
                                    // code for IE6, IE5
                                    var request = new ActiveXObject('Microsoft.XMLHTTP');
                                }
                                request.open('GET', url, false);
                                request.send();
                                alert(request.responseText);
                                return eval(request.responseText);
                            };




                            var chart;

                            // create chart
                            AmCharts.ready(function() {

                                // load the data
                                var chartData = AmCharts.loadJSON('hw5_data.php');

                                // SERIAL CHART    
                                chart = new AmCharts.AmSerialChart();
                                chart.pathToImages = "http://www.amcharts.com/lib/images/";
                                chart.dataProvider = chartData;
                                chart.categoryField = "date";
                                chart.dataDateFormat = "YYYY-MM-DD";

                                //legend
                                var legend = new AmCharts.AmLegend();
                                legend.align = "center";
                                legend.markerType = "bubble";
                                chart.addLegend(legend);

                                // GRAPHS
                                var graph1 = new AmCharts.AmGraph();
                                graph1.valueField = "hands";
                                graph1.bullet = "bubble";
                                graph1.bulletBorderColor = "#FFFFFF";
                                graph1.bulletBorderThickness = 2;
                                graph1.lineThickness = 2;
                                graph1.lineColor = "#4965D6";
                                graph1.lineAlpha = 0.5;
                                graph1.title ="Hands Played";
                                graph1.visibleInLegend = true;
                                chart.addGraph(graph1);

                                var graph2 = new AmCharts.AmGraph();
                                graph2.valueField = "wins";
                                graph2.bullet = "bubble";
                                graph2.bulletBorderColor = "#FFFFFF";
                                graph2.bulletBorderThickness = 2;
                                graph2.lineThickness = 2;
                                graph2.lineColor = "#35D4A4";
                                graph2.lineAlpha = 0.5;
                                graph2.title ="Wins";
                                chart.addGraph(graph2);

                                var graph3 = new AmCharts.AmGraph();
                                graph3.valueField = "loss";
                                graph3.bullet = "bubble";
                                graph3.bulletBorderColor = "#FFFFFF";
                                graph3.bulletBorderThickness = 2;
                                graph3.lineThickness = 2;
                                graph3.lineColor = "#8E41D5";
                                graph3.lineAlpha = 0.5;
                                graph3.title = "Losses";
                                chart.addGraph(graph3);



                                // CATEGORY AXIS 
                                chart.categoryAxis.parseDates = true;

                                // WRITE
                                chart.write("chartdiv");

                                //print table
                                var table = document.getElementById("chartTable");
                                var tPrint = "<h4>Data Table</h4>";

                                tPrint += "<table><tr><th>" + chart.categoryField + "</th><th>"
                                        + graph1.title +"</th><th>"+
                                        graph2.title +"</th><th>"+ graph3.title +"</th>";
                                for (i = 0; i < chartData.length; i++) {
                                    tPrint += "<tr><td>";
                                    tPrint += chartData[i].date;
                                    tPrint += "</td><td>";
                                    tPrint += chartData[i].hands;
                                    tPrint += "</td><td>";
                                    tPrint += chartData[i].wins;
                                    tPrint += "</td><td>";
                                    tPrint += chartData[i].loss;
                                    tPrint += "</td></tr>";
                                }

                                tPrint += "</table>";
                                table.innerHTML = tPrint;

                            });




                        </script>

                        <div class="meta">
                            <p class="byline">Posted on July 21, 2007 byFreeCssTemplates</p>
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
            <p id="legal">(c) 2007 YourSite. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
        </div>
    </div>
    <!-- end footer -->
    <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>