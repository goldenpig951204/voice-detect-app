//[widget charts Javascript]


$( document ).ready(function() {
    "use strict";
	
	var ctx = document.getElementById('chartBar1').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		datasets: [{
		  label: '# of Votes',
		  data: [37, 14, 41, 26, 18, 29],
		  backgroundColor: '#1ecab8'
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar2').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		datasets: [{
		  label: '# of Votes',
		  data: [37, 14, 41, 26, 18, 29],
		  backgroundColor: [
							  '#4d79f6',
							  '#1ecab8',
							  '#9ba7ca',
							  '#f3c74d',
							  '#f1646c'
							]
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar3').getContext('2d');
	new Chart(ctx, {
	  type: 'horizontalBar',
	  data: {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		datasets: [{
		  label: '# of Votes',
		  data: [37, 14, 41, 26, 18, 29],
		  backgroundColor: '#1ecab8'
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar4').getContext('2d');
	new Chart(ctx, {
	  type: 'horizontalBar',
	  data: {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		datasets: [{
		  label: '# of Votes',
		  data: [37, 14, 41, 26, 18, 29],
		  backgroundColor: [
							  '#4d79f6',
							  '#1ecab8',
							  '#9ba7ca',
							  '#f3c74d',
							  '#f1646c'
							]
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	
	/** STACKED BAR CHART **/
  var ctx7 = document.getElementById('chartStacked1');
  new Chart(ctx7, {
    type: 'bar',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        backgroundColor: '#4d79f6',
        borderWidth: 1,
        fill: true
      },{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: '#1ecab8',
        borderWidth: 1,
        fill: true
      },{
        data: [10, 41, 12, 34, 21, 18],
        backgroundColor: '#f1646c',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          stacked: true
        }],
        xAxes: [{
          stacked: true
        }]
      }
    }
  });

  var ctx8 = document.getElementById('chartStacked2');
  new Chart(ctx8, {
    type: 'horizontalBar',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        backgroundColor: '#4d79f6',
        borderWidth: 1,
        fill: true
      },{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: '#1ecab8',
        borderWidth: 1,
        fill: true
      },{
        data: [10, 41, 12, 34, 21, 18],
        backgroundColor: '#f1646c',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          stacked: true
        }],
        xAxes: [{
          stacked: true
        }]
      }
    }
  });
	
/* LINE CHART */
  var ctx3 = document.getElementById('chartLine1');
  var myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        label: '# of Votes',
        data: [37, 14, 41, 26, 18, 29],
        borderColor: '#f1646c',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx4 = document.getElementById('chartLine2');
  var myChart4 = new Chart(ctx4, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        borderColor: '#f1646c',
        borderWidth: 1,
        fill: false
      },{
        data: [17, 22, 37, 21, 41, 12],
        borderColor: '#4d79f6',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
 /** AREA CHART **/
  var ctx5 = document.getElementById('chartArea1');
  var myChart5 = new Chart(ctx5, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: '#f1646c', //rgba(240, 113, 36, 0.4)
        fill: true,
        borderWidth: 0,
        borderColor: '#fff'
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx6 = document.getElementById('chartArea2');
  new Chart(ctx6, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        backgroundColor: '#f1646c',
        borderWidth: 1,
        fill: true
      },{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: '#4d79f6',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
/** SPECIFIC GRID LINE COLOR **/
  var ctx9 = document.getElementById('chartArea3');
  new Chart(ctx9, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        backgroundColor: 'rgba(46,87,115,.4)',
        borderWidth: 1,
        fill: true
      },{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: 'rgba(41,176,208,.4)',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: ['', '', '#cc0000']
          },
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx10 = document.getElementById('chartArea4');
  new Chart(ctx10, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [{
        data: [37, 14, 41, 26, 18, 29],
        backgroundColor: 'rgba(46,87,115,.4)',
        borderWidth: 1,
        fill: true
      },{
        data: [17, 22, 37, 21, 41, 12],
        backgroundColor: 'rgba(41,176,208,.4)',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: ['', '#cc0000', '#0ad013']
          },
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
	/** PIE CHART **/
  var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
  };

  var datapie = {
    datasets: [{
      data: [
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
      ],
      backgroundColor: [
        '#4d79f6',
        '#1ecab8',
        '#9ba7ca',
        '#f3c74d',
        '#f1646c'
      ]
    }]
  };

  var optionpie = {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  // For a doughnut chart
  var ctx6 = document.getElementById('chartPie');
  var myPieChart6 = new Chart(ctx6, {
    type: 'doughnut',
    data: datapie,
    options: optionpie
  });

  // For a pie chart
  var ctx7 = document.getElementById('chartDonut');
  var myPieChart7 = new Chart(ctx7, {
    type: 'pie',
    data: datapie,
    options: optionpie
  });
	
	
}); // End of use strict
