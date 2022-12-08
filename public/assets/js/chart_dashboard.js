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
    var month = currentTime.getMonth() + 1
    var year = currentTime.getFullYear()
    var marketingOverviewChart = document.getElementById("barchart").getContext('2d');
    var marketingOverviewData = {
        labels: ["JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
        datasets: [
            {
            data: [],
            // backgroundColor: "#52CDFF",
        },
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
            // console.log(chart.data.datasets[i]); // see what's inside the obj.
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

    var marketingOverviewChart1 = document.getElementById("barchartobat").getContext('2d');
    var marketingOverviewData1 = {
        labels: ["JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
        datasets: [
            {
            data: [110, 220, 200, 190, 220, 110, 210, 110, 205, 202, 201, 150],
            // backgroundColor: "#52CDFF",
        },
    ]
    };

    var marketingOverviewOptions1 = {
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
            // console.log(chart.data.datasets[i]); // see what's inside the obj.
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

    var marketingOverview1 = new Chart(marketingOverviewChart1, {
        type: 'bar',
        data: marketingOverviewData1,
        options: marketingOverviewOptions1
    });
    document.getElementById('marketing-overview-legend').innerHTML = marketingOverview1.generateLegend();

    var marketingOverviewChart2 = document.getElementById("barcharttransaksi").getContext('2d');
      var marketingOverviewData2 = {
          labels: ["JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
          datasets: [
              {
              data: [110, 220, 200, 190, 220, 110, 210, 110, 205, 202, 201, 150],
              // backgroundColor: "#52CDFF",
          },
      ]
      };

      var marketingOverviewOptions2 = {
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
              // console.log(chart.data.datasets[i]); // see what's inside the obj.
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

      var marketingOverview2 = new Chart(marketingOverviewChart2, {
          type: 'bar',
          data: marketingOverviewData2,
          options: marketingOverviewOptions2
      });
      document.getElementById('marketing-overview-legend2').innerHTML = marketingOverview2.generateLegend();
    
    updateChartAjaxCall();
    updateChartAjaxCallPengguna();
    updateChartAjaxCallTransaksi();

  function updateChartAjaxCall()
    {
        var arr = marketingOverview.data.labels;
        var sel = 'year';
        var tf = false;
        //ajax call here 
        $.ajax({
            type: 'GET',
            url: '/getChartPasien/'+sel,
            // url : '/',
            dataType: 'json', // added data type
            success:function(hasil){
                // here also manipulate data what you get to update chart propertly
                // marketingOverview.removeData();
                for(let i = arr.length; i > -1; i--) {
                    arr.pop();
                    marketingOverview.data.datasets[0].data.pop();
                }
                if(sel == 'year'){
                    // for(let a=1; a<(weeksCount(year, month)+1); a++){
                    //   marketingOverview.data.labels.push("Week "+a);
                    // }
                    marketingOverview.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                    
                    for(let a=0; a<12; a++){
                      for(let i=0; i<hasil.length; i++){
                        // console.log((a+1)+' == '+hasil[i]['Bulan']+' : '+((a+1) == hasil[i]['Bulan']));
                        if((a+1) == hasil[i]['Bulan']){
                          tf = true;
                          marketingOverview.data.datasets[0].data.push(hasil[i]['Jumlah']);
                        }
                      }
                      if(tf == false) marketingOverview.data.datasets[0].data.push(0);
                      tf = false;
                    }
                    marketingOverview.update();
                // }else if(sel == 'week'){
                //     marketingOverview.data.labels.push("Sun","Mon", "Tue", "Wed", "Thu", "Fri","Sat");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
                // }else{
                //     marketingOverview.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
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

    function updateChartAjaxCallPengguna()
    {
        var arr = marketingOverview1.data.labels;
        var sel = 'year';
        var tf = false;
        //ajax call here 
        $.ajax({
            type: 'GET',
            url: '/getChartObat/'+sel,
            // url : '/',
            dataType: 'json', // added data type
            success:function(hasil){
                // here also manipulate data what you get to update chart propertly
                // marketingOverview.removeData();
                for(let i = arr.length; i > -1; i--) {
                    arr.pop();
                    marketingOverview1.data.datasets[0].data.pop();
                }
                if(sel == 'year'){
                    // for(let a=1; a<(weeksCount(year, month)+1); a++){
                    //   marketingOverview.data.labels.push("Week "+a);
                    // }
                    marketingOverview1.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                    
                    for(let a=0; a<12; a++){
                      for(let i=0; i<hasil.length; i++){
                        // console.log((a+1)+' == '+hasil[i]['Bulan']+' : '+((a+1) == hasil[i]['Bulan']));
                        if((a+1) == hasil[i]['Bulan']){
                          tf = true;
                          marketingOverview1.data.datasets[0].data.push(hasil[i]['Jumlah']);
                        }
                      }
                      if(tf == false) marketingOverview1.data.datasets[0].data.push(0);
                      tf = false;
                    }
                    marketingOverview1.update();
                // }else if(sel == 'week'){
                //     marketingOverview.data.labels.push("Sun","Mon", "Tue", "Wed", "Thu", "Fri","Sat");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
                // }else{
                //     marketingOverview.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
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

    function updateChartAjaxCallTransaksi()
    {
        var arr = marketingOverview2.data.labels;
        var sel = 'year';
        var tf = false;
        //ajax call here 
        $.ajax({
            type: 'GET',
            url: '/getChartTransaksi/'+sel,
            // url : '/',
            dataType: 'json', // added data type
            success:function(hasil){
                // here also manipulate data what you get to update chart propertly
                // marketingOverview.removeData();
                for(let i = arr.length; i > -1; i--) {
                    arr.pop();
                    marketingOverview2.data.datasets[0].data.pop();
                }
                if(sel == 'year'){
                    // for(let a=1; a<(weeksCount(year, month)+1); a++){
                    //   marketingOverview.data.labels.push("Week "+a);
                    // }
                    marketingOverview2.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                    
                    for(let a=0; a<12; a++){
                      for(let i=0; i<hasil.length; i++){
                        // console.log((a+1)+' == '+hasil[i]['Bulan']+' : '+((a+1) == hasil[i]['Bulan']));
                        if((a+1) == hasil[i]['Bulan']){
                          tf = true;
                          marketingOverview2.data.datasets[0].data.push(hasil[i]['Jumlah']);
                        }
                      }
                      if(tf == false) marketingOverview2.data.datasets[0].data.push(0);
                      tf = false;
                    }
                    marketingOverview2.update();
                // }else if(sel == 'week'){
                //     marketingOverview.data.labels.push("Sun","Mon", "Tue", "Wed", "Thu", "Fri","Sat");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
                // }else{
                //     marketingOverview.data.labels.push("JAN","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
                //     // marketingOverview.data.datasets.data.push(data);
                //     marketingOverview.update();
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

    if ($("#status-summary").length) {
        var statusSummaryChartCanvas = document.getElementById("status-summary").getContext('2d');;
        var statusData = {
            labels: ["SUN", "MON", "TUE", "WED", "THU", "FRI"],
            datasets: [{
                label: '# of Votes',
                data: [50, 68, 70, 10, 12, 80],
                backgroundColor: "#ffcc00",
                borderColor: [
                    '#01B6A0',
                ],
                borderWidth: 2,
                fill: false, // 3: no fill
                pointBorderWidth: 0,
                pointRadius: [0, 0, 0, 0, 0, 0],
                pointHoverRadius: [0, 0, 0, 0, 0, 0],
            }]
        };
    
        var statusOptions = {
          responsive: true,
          maintainAspectRatio: false,
            scales: {
                yAxes: [{
                  display:false,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        color:"#F0F0F0"
                    },
                    ticks: {
                      beginAtZero: false,
                      autoSkip: true,
                      maxTicksLimit: 4,
                      fontSize: 10,
                      color:"#6B778C"
                    }
                }],
                xAxes: [{
                  display:false,
                  gridLines: {
                      display: false,
                      drawBorder: false,
                  },
                  ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 7,
                    fontSize: 10,
                    color:"#6B778C"
                  }
              }],
            },
            legend:false,
            
            elements: {
                line: {
                    tension: 0.4,
                }
            },
            tooltips: {
                backgroundColor: 'rgba(31, 59, 179, 1)',
            }
        }
        var statusSummaryChart = new Chart(statusSummaryChartCanvas, {
            type: 'line',
            data: statusData,
            options: statusOptions
        });
      }
      if ($('#totalVisitors').length) {
        var bar = new ProgressBar.Circle(totalVisitors, {
          color: '#fff',
          // This has to be the same size as the maximum width to
          // prevent clipping
          strokeWidth: 15,
          trailWidth: 15, 
          easing: 'easeInOut',
          duration: 1400,
          text: {
            autoStyleContainer: false
          },
          from: {
            color: '#52CDFF',
            width: 15
          },
          to: {
            color: '#677ae4',
            width: 15
          },
          // Set default step function for all animate calls
          step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
    
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
              circle.setText('');
            } else {
              circle.setText(value);
            }
    
          }
        });
    
        bar.text.style.fontSize = '0rem';
        bar.animate(.64); // Number from 0.0 to 1.0
      }

      if ($('#visitperday').length) {
        var bar = new ProgressBar.Circle(visitperday, {
          color: '#fff',
          // This has to be the same size as the maximum width to
          // prevent clipping
          strokeWidth: 15,
          trailWidth: 15,
          easing: 'easeInOut',
          duration: 1400,
          text: {
            autoStyleContainer: false
          },
          from: {
            color: '#34B1AA',
            width: 15
          },
          to: {
            color: '#677ae4',
            width: 15
          },
          // Set default step function for all animate calls
          step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
    
            var value = Math.round(circle.value() * 100);
            if (value === 0) {
              circle.setText('');
            } else {
              circle.setText(value);
            }
    
          }
        });
    
        bar.text.style.fontSize = '0rem';
        bar.animate(.34); // Number from 0.0 to 1.0
      }
});