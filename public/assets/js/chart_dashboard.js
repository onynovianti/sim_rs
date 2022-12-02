$(document).ready(function(){

    var weeksCount = function(year, month_number) {
        var firstOfMonth = new Date(year, month_number - 1, 1);
        var day = firstOfMonth.getDay() || 6;
        day = day === 1 ? 0 : day;
        if (day) { day-- }
        var diff = 7 - day;
        var lastOfMonth = new Date(year, month_number, 0);
        var lastDate = lastOfMonth.getDate();
        if (lastOfMonth.getDay() === 1) {
            diff--;
        }
        var result = Math.ceil((lastDate - diff) / 7);
        return result + 1;
    };
    var currentTime = new Date()
    // returns the month (from 0 to 11)
    var month = currentTime.getMonth() + 1
    // returns the year (four digits)
    var year = currentTime.getFullYear()

    $('#chartchange').on('change', function() {
        updateChartAjaxCall();
    });

    // if ($("#barchart").length) {
    var marketingOverviewChart = document.getElementById("barchart").getContext('2d');
    var marketingOverviewData = {
        labels: ["JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
        datasets: [
            {
            // label: 'Last week',
            data: [110, 220, 200, 190, 220, 110, 210, 110, 205, 202, 201, 150],
            backgroundColor: "#52CDFF",
            // borderColor: [
            //     '#52CDFF',
            // ],
            // borderWidth: 0,
            // fill: true, // 3: no fill
            
        },
    //     {
    //       label: 'This week',
    //       data: [215, 290, 210, 250, 290, 230, 290, 210, 280, 220, 190, 300],
    //       backgroundColor: "#1F3BB3",
    //       borderColor: [
    //           '#1F3BB3',
    //       ],
    //       borderWidth: 0,
    //       fill: true, // 3: no fill
    //   }
    ]
    };

    var marketingOverviewOptions = {
      responsive: true,
      maintainAspectRatio: false,
        scales: {
            yAxes: [{
                gridLines: {
                    display: true,
                    drawBorder: false,
                    color:"#F0F0F0",
                    zeroLineColor: '#F0F0F0',
                },
                ticks: {
                  beginAtZero: true,
                  autoSkip: true,
                  maxTicksLimit: 5,
                  fontSize: 10,
                  color:"#6B778C"
                }
            }],
            xAxes: [{
              stacked: true,
              barPercentage: 0.35,
              gridLines: {
                  display: false,
                  drawBorder: false,
              },
              ticks: {
                beginAtZero: false,
                autoSkip: true,
                maxTicksLimit: 12,
                fontSize: 10,
                color:"#6B778C"
              }
          }],
        },
        legend:false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul>');
          for (var i = 0; i < chart.data.datasets.length; i++) {
            console.log(chart.data.datasets[i]); // see what's inside the obj.
            text.push('<li class="text-muted text-small">');
            text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
            text.push(chart.data.datasets[i].label);
            text.push('</li>');
          }
          text.push('</ul></div>');
          return text.join("");
        },
        
        elements: {
            line: {
                tension: 0.4,
            }
        },
        tooltips: {
            backgroundColor: 'rgba(31, 59, 179, 1)',
        }
    }

    var marketingOverview = new Chart(marketingOverviewChart, {
        type: 'bar',
        data: marketingOverviewData,
        options: marketingOverviewOptions
    });
    document.getElementById('marketing-overview-legend').innerHTML = marketingOverview.generateLegend();
//   }

  function updateChartAjaxCall()
    {
        var arr = marketingOverview.data.labels;
        var sel = $('#chartchange').val();
        //ajax call here 
        $.ajax({
            type: 'GET',
            url: '/getChart/'+sel,
            success:function(data){ 
                // here also manipulate data what you get to update chart propertly
                // marketingOverview.removeData();
                for(let i = arr.length; i > -1; i--) {
                    arr.pop();
                }
                if(sel == 'month'){
                    for(let a=1; a<(weeksCount(year, month)+1); a++)
                    marketingOverview.data.labels.push("Week "+a);
                    marketingOverview.update();
                }else if(sel == 'week'){
                    marketingOverview.data.labels.push("Sun","Mon", "Tue", "Wed", "Thu", "Fri","Sat");
                    marketingOverview.update();
                }else{
                    marketingOverview.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                    marketingOverview.update();
                }
            }, 
            error:function (xhr, ajaxOptions, thrownError){
                console.log(thrownError);
            }, 
            complete: function(){
            }
        });
        // e.preventDefault(); 
    }
});