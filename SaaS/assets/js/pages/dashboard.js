$(document).ready(function() {
    var sin = [],
        cos = []
    for (var i = 0; i <= 12; i ++) {
      sin.push([i, Math.sin(i)])
    }
    var line_data = {
      data : sin,
      color: '#3c8dbc'
    }
    $.plot('#line-chart', [line_data], {
        grid  : {
          hoverable  : true,
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor  : '#f3f3f3'
        },
        series: {
          shadowSize: 0,
          lines     : {
            show: true
          },
          points    : {
            show: true
          }
        },
        lines : {
          fill : false,
          color: ['#3c8dbc', '#f56954']
        },
        yaxis : {
          show: true
        },
        xaxis : {
            ticks: [[0, ''], [1, 'Jan'], [2, 'Feb'], [3, 'Mar'], [4, 'Apr'], [5, 'May'], [6, 'Jun'], [7, 'Jul'], [8, 'Aug'], [9, 'Sep'], [10, 'Oct'], [11, 'Nov'], [12, 'Dec']],
            show: true
        }
    })
})