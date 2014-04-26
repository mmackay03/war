<!DOCTYPE html>

<?php
require_once("debug.php");
require_once("blackLib.php");
setSessions($debug);
?>

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
    <title>Individual Stats</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
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
                        <div id="chartdiv" style="width: 740px; height: 400px;">
                            <script type="text/javascript">
                                var chartData = generateChartData();

                                var chart = AmCharts.makeChart("chartdiv", {
                                    "type": "serial",
                                    "theme": "chalk",
                                    "pathToImages": "http://www.amcharts.com/lib/3/images/",
                                    "legend": {
                                        "useGraphSettings": true
                                    },
                                    "dataProvider": chartData,
                                    "valueAxes": [{
                                            "id": "v1",
                                            "axisColor": "#FF6600",
                                            "axisThickness": 2,
                                            "gridAlpha": 0,
                                            "axisAlpha": 1,
                                            "position": "left"
                                        }, {
                                            "id": "v2",
                                            "axisColor": "#FCD202",
                                            "axisThickness": 2,
                                            "gridAlpha": 0,
                                            "axisAlpha": 1,
                                            "position": "right"
                                        }, {
                                            "id": "v3",
                                            "axisColor": "#B0DE09",
                                            "axisThickness": 2,
                                            "gridAlpha": 0,
                                            "offset": 50,
                                            "axisAlpha": 1,
                                            "position": "left"
                                        }],
                                    "graphs": [{
                                            "valueAxis": "v2",
                                            "lineColor": "#FCD202",
                                            "bullet": "square",
                                            "bulletBorderThickness": 1,
                                            "hideBulletsCount": 30,
                                            "title": "games played",
                                            "valueField": "hits",
                                            "fillAlphas": 0
                                        }, {
                                            "valueAxis": "v1",
                                            "lineColor": "#FF6600",
                                            "bullet": "round",
                                            "bulletBorderThickness": 1,
                                            "hideBulletsCount": 30,
                                            "title": "losses",
                                            "valueField": "visits",
                                            "fillAlphas": 0
                                        },
                                        {
                                            "valueAxis": "v3",
                                            "lineColor": "#B0DE09",
                                            "bullet": "triangleUp",
                                            "bulletBorderThickness": 1,
                                            "hideBulletsCount": 30,
                                            "title": "wins",
                                            "valueField": "views",
                                            "fillAlphas": 0
                                        }],
                                    "chartScrollbar": {},
                                    "chartCursor": {
                                        "cursorPosition": "mouse"
                                    },
                                    "categoryField": "date",
                                    "categoryAxis": {
                                        "parseDates": true,
                                        "axisColor": "#DADADA",
                                        "minorGridEnabled": true
                                    }
                                });

                                chart.addListener("dataUpdated", zoomChart);
                                zoomChart();


// generate some random data, quite different range
                                function generateChartData() {
                                    var chartData = [];
                                    var firstDate = new Date();
                                    firstDate.setDate(firstDate.getDate() - 100);

                                    for (var i = 0; i < 100; i++) {
                                        // we create date objects here. In your data, you can have date strings
                                        // and then set format of your dates using chart.dataDateFormat property,
                                        // however when possible, use date objects, as this will speed up chart rendering.
                                        var newDate = new Date(firstDate);
                                        newDate.setDate(newDate.getDate() + i);

                                        var visits = Math.round(Math.random() * 40) + 100;
                                        var hits = Math.round(Math.random() * 80) + 500;
                                        var views = Math.round(Math.random() * 6000);

                                        chartData.push({
                                            date: newDate,
                                            visits: visits,
                                            hits: hits,
                                            views: views
                                        });
                                    }
                                    return chartData;
                                }

                                function zoomChart() {
                                    chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
                                }




                            </script>

                        </div>
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
