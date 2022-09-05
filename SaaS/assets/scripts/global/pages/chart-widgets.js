//[custom Javascript]

//Project:	AIUI Admin - Responsive Admin Template
//Primary use:	AIUI Admin - Responsive Admin Template

//should be included in all pages. It controls some layout



// Fullscreen
$(function () {
	'use strict'
	// Composite line charts, the second using values supplied via javascript
		
		$("#lineToday").sparkline([3,14,5,6,37,5,8,54,2,8,16.15,18,2], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: 'rgba(57, 89, 247, 0)',
			lineWidth: 2,
			spotRadius: 3,
		});
		
		$("#lineIncrease").sparkline([3,14,5,6,37,5,8,54,2,8,16.15,18,2], {
			type: 'line',
			width: '100%',
			height: '140',
			lineWidth: 2,
			lineColor: '#ffffff',
			fillColor: 'rgba(57, 89, 247, 0)',
			spotColor: '#ffffff',
			minSpotColor: '#ffffff',
			maxSpotColor: '#ffffff',
			spotRadius: 3,
		});
		
		$("#baralc").sparkline([3,14,5,6,37,5,8,54,2,8,16.15,18,2,3,14,5,6,37,5,8,54,2,8,16.15,18,2,3,14,5,6,37,5,8,54,2,8,16.15,18,2], {
			type: 'bar',
			height: '80',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#4d79f6',
		});
    		
		$("#linechart").sparkline([3,4,5,6,7,5,8,4,2,8,16], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#06d79c',
			fillColor: '#ffffff',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
		});
	
		$("#barchart2").sparkline([3,4,5,6,7,5,8,4,2,8,16], {
			type: 'bar',
			height: '38',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#ffffff',
		});
	
		$("#discretechart").sparkline([3,4,5,6,7,5,8,4,2,8,16], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#745af2',
		});
	
		
}); // End of use strict
		
// easypie chart
	$(function() {
		'use strict'
		$('.easypie').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.easypie').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});// End of use strict