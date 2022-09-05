//[Dashboard Javascript]

//Project:	AIUI Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	var plot = $.plot('#flotChart', [{
          data: flotSampleData3,
          color: '#1ecab8',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        },{
          data: flotSampleData4,
          color: '#4d79f6',
          lines: {
            fillColor: { colors: [{ opacity: 0 }, { opacity: 0.5 }]}
          }
        }], {
    			series: {
    				shadowSize: 1,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 8
          },
    			yaxis: {
            			show: true,
    					min: 0,
    					max: 100,
            			ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
            			tickColor: 'rgba(255, 255, 255, 0.10)',
						font: {
							color: '#666666'
						  }
    			},
    			xaxis: {
            			show: true,
            			color: 'rgba(255, 255, 255, 0.10)',
            			ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
						font: {
							color: '#666666'
						  }
          }
        });
	
		
	
	var options = {
            chart: {
                height: 400,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '40%',
                    endingShape: 'rounded'	
                },
            },
            dataLabels: {
                enabled: false
            },
			colors: ['#4d79f6', '#9ba7ca', '#f1646c'],
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-overview"),
            options
        );

        chart.render();
	
	
	
	Apex.grid = {
	  padding: {
		right: 0,
		left: 0
	  }
	}

	Apex.dataLabels = {
	  enabled: false
	}

	var randomizeArray = function (arg) {
	  var array = arg.slice();
	  var currentIndex = array.length, temporaryValue, randomIndex;

	  while (0 !== currentIndex) {

		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex -= 1;

		temporaryValue = array[currentIndex];
		array[currentIndex] = array[randomIndex];
		array[randomIndex] = temporaryValue;
	  }

	  return array;
	}

	// data for the sparklines that appear below header area
	var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

	// the default colorPalette for this dashboard

	var spark1 = {
	  chart: {
		id: 'sparkline1',
		group: 'sparklines',
		type: 'area',
		height: 160,
		sparkline: {
		  enabled: true
		},
	  },
	  stroke: {
		curve: 'smooth'
	  },
	  fill: {
		opacity: 1,
	  },
	  series: [{
		name: 'Sales',
		data: randomizeArray(sparklineData)
	  }],
	  labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
	  yaxis: {
		min: 0
	  },
	  xaxis: {
		type: 'datetime',
	  },
	  colors: ['#4ac7ec'],
	}

	
	
	new ApexCharts(document.querySelector("#spark1"), spark1).render();
	
	
	//sparkline
		$("#barchart4").sparkline([32,24,26,24,32,26,40,34,22,24], {
			type: 'bar',
			height: '50',
			width: '80%',
			barWidth: 5,
			barSpacing: 4,
			barColor: '#9ba7ca',
		});
	


}); // End of use strict

