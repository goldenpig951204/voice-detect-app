//[Dashboard Javascript]

//Project:	AIUI Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	var optionsLine = {
	  chart: {
		height: 360,
		type: 'line',
		zoom: {
		  enabled: false
		},
	  },
	  stroke: {
		curve: 'smooth',
		width: 2
	  },
	  colors: ["#4d79f6", '#9ba7ca', '#f1646c'],
	  series: [{
		  name: "Music",
		  data: [1, 15, 26, 20, 33, 27]
		},
		{
		  name: "Photos",
		  data: [3, 33, 21, 42, 19, 32]
		},
		{
		  name: "Files",
		  data: [0, 39, 52, 11, 29, 43]
		}
	  ],
	  markers: {
		size: 6,
		strokeWidth: 0,
		hover: {
		  size: 9
		}
	  },
	  grid: {
		show: true
	  },
	  labels: ['01/15/2019', '01/16/2019', '01/17/2019', '01/18/2019', '01/19/2019', '01/20/2019'],
	  xaxis: {
		tooltip: {
		  enabled: false
		}
	  },
	  legend: {
		position: 'top',
		horizontalAlign: 'right',
		offsetY: -20
	  }
	}

	var chartLine = new ApexCharts(document.querySelector('#line-adwords'), optionsLine);
	chartLine.render();

	var optionsCircle4 = {
	  chart: {
		type: 'radialBar',
		width: 380,
		height: 360,
	  },
	  plotOptions: {
		radialBar: {
		  size: undefined,
		  inverseOrder: true,
		  hollow: {
			margin: 5,
			size: '48%',
			background: 'transparent',

		  },
		  track: {
			show: false,
		  },
		  startAngle: -180,
		  endAngle: 180

		},
	  },
	  stroke: {
		lineCap: 'round'
	  },
	  colors: ["#4d79f6", '#4ac7ec', '#f3c74d'],
	  series: [71, 63, 77],
	  labels: ['June', 'May', 'April'],
	  legend: {
		show: true,
		floating: true,
		position: 'right',
		offsetX: 70,
		offsetY: 240
	  },
	}

	var chartCircle4 = new ApexCharts(document.querySelector('#radialBarBottom'), optionsCircle4);
	chartCircle4.render();
	
	
	
	

}); // End of use strict

