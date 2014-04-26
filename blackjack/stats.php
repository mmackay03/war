<?php
require_once("debug.php");
require_once("blackLib.php");
require_once ('header.php');
setSessions($debug);
?>

<title>individual stats</title>
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
<?PHP
require_once ('footer.php');
