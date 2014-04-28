<?php

require_once("debug.php");
require_once("blackLib.php");
require_once ('header.php');
setSessions($debug);
?>

<title>individual stats</title>
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
            var chartData = AmCharts.loadJSON('sgraphdata.php');

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
            graph1.valueField = "sumP";
            graph1.bullet = "bubble";
            graph1.bulletBorderColor = "#FFFFFF";
            graph1.bulletBorderThickness = 2;
            graph1.lineThickness = 2;
            graph1.lineColor = "#4965D6";
            graph1.lineAlpha = 0.5;
            graph1.title = "Hands Played";
            graph1.visibleInLegend = true;
            chart.addGraph(graph1);

            var graph2 = new AmCharts.AmGraph();
            graph2.valueField = "sumw";
            graph2.bullet = "bubble";
            graph2.bulletBorderColor = "#FFFFFF";
            graph2.bulletBorderThickness = 2;
            graph2.lineThickness = 2;
            graph2.lineColor = "#35D4A4";
            graph2.lineAlpha = 0.5;
            graph2.title = "Wins";
            chart.addGraph(graph2);

            var graph3 = new AmCharts.AmGraph();
            graph3.valueField = "sumL";
            graph3.bullet = "bubble";
            graph3.bulletBorderColor = "#FFFFFF";
            graph3.bulletBorderThickness = 2;
            graph3.lineThickness = 2;
            graph3.lineColor = "#8E41D5";
            graph3.lineAlpha = 0.5;
            graph3.title = "Losses";
            chart.addGraph(graph3);
            
            var graph4 = new AmCharts.AmGraph();
            graph4.valueField = "sumD";
            graph4.bullet = "bubble";
            graph4.bulletBorderColor = "#FFFFFF";
            graph4.bulletBorderThickness = 2;
            graph4.lineThickness = 2;
            graph4.lineColor = "#E77FD6";
            graph4.lineAlpha = 0.5;
            graph4.title = "Draws";
            chart.addGraph(graph4);




            // CATEGORY AXIS 
            chart.categoryAxis.parseDates = true;

            // WRITE
            chart.write("chartdiv");

            //print table
            var table = document.getElementById("chartTable");
            var tPrint = "<h4>Data Table</h4>";

            tPrint += "<table><tr><th>" + chart.categoryField + "</th><th>"
                    + graph1.title + "</th><th>" +
                    graph2.title + "</th><th>" + graph3.title + "</th><th>" + graph4.title + "</th>";
            for (i = 0; i < chartData.length; i++) {
                tPrint += "<tr><td>";
                tPrint += chartData[i].date;
                tPrint += "</td><td>";
                tPrint += chartData[i].sumP;
                tPrint += "</td><td>";
                tPrint += chartData[i].sumw;
                tPrint += "</td><td>";
                tPrint += chartData[i].sumL;
                tPrint += "</td><td>";
                tPrint += chartData[i].sumD;
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
<?PHP

require_once ('footer.php');
