<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1418:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2016-10-30', 0,0,0], ['2016-10-31', 0,0,0], ['2016-11-01', 0,0,0], ['2016-11-02', 0,0,0], ['2016-11-03', 0,0,0], ['2016-11-04', 0,0,0], ['2016-11-05', 0,0,0], ['2016-11-06', 0,0,0], ['2016-11-07', 0,0,0], ['2016-11-08', 0,0,0], ['2016-11-09', 0,0,0], ['2016-11-10', 0,0,0], ['2016-11-11', 0,0,0], ['2016-11-12', 0,0,0], ['2016-11-13', 0,0,0], ['2016-11-14', 0,0,0], ['2016-11-15', 0,0,0], ['2016-11-16', 0,0,0], ['2016-11-17', 0,0,0], ['2016-11-18', 0,0,0], ['2016-11-19', 0,0,0], ['2016-11-20', 0,0,0], ['2016-11-21', 0,0,0], ['2016-11-22', 0,0,0], ['2016-11-23', 0,0,0], ['2016-11-24', 0,0,0], ['2016-11-25', 0,0,0], ['2016-11-26', 0,0,0], ['2016-11-27', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Sunday, 30 October 2016 to Monday, 28 November 2016',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}}