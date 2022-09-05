//[widget morris charts Javascript]

$(function(){
  'use strict';

  new Morris.Bar({
    element: 'morrisBar1',
    data: [
      { y: 'Mon', a: 99, b: 120 },
      { y: 'Tue', a: 72,  b: 53 },
      { y: 'Wed', a: 44,  b: 39 },
      { y: 'Thu', a: 61,  b: 32 },
      { y: 'Fri', a: 50,  b: 46 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Data A', 'Data B'],
    barColors: ['#f1646c', '#4d79f6'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar2',
    data: [
      { y: 'Mon', a: 99, b: 120 },
      { y: 'Tue', a: 72,  b: 53 },
      { y: 'Wed', a: 44,  b: 39 },
      { y: 'Thu', a: 61,  b: 32 },
      { y: 'Fri', a: 50,  b: 46 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Data A', 'Data B'],
    barColors: ['#f1646c', '#4d79f6'],
    stacked: true,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar3',
    data: [
      { y: 'Mon', a: 99, b: 120, c: 54 },
      { y: 'Tue', a: 72,  b: 53, c: 21 },
      { y: 'Wed', a: 44,  b: 39, c: 80 },
      { y: 'Thu', a: 61,  b: 32, c: 41 },
      { y: 'Fri', a: 50,  b: 46, c: 90 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Data A', 'Data B', 'Data C'],
    barColors: ['#f1646c', '#4d79f6','#f3c74d'],
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Bar({
    element: 'morrisBar4',
    data: [
      { y: 'Mon', a: 99, b: 120, c: 54 },
      { y: 'Tue', a: 72,  b: 53, c: 21 },
      { y: 'Wed', a: 44,  b: 39, c: 80 },
      { y: 'Thu', a: 61,  b: 32, c: 41 },
      { y: 'Fri', a: 50,  b: 46, c: 90 },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Data A', 'Data B', 'Data C'],
    barColors: ['#f1646c', '#4d79f6','#f3c74d'],
    stacked: true,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });


  new Morris.Line({
    element: 'morrisLine1',
    data: [
      { y: '2015', a: 15, b: 10 },
      { y: '2014', a: 25,  b: 15 },
      { y: '2016', a: 35,  b: 25 },
      { y: '2017', a: 45,  b: 75 },
      { y: '2018', a: 25,  b: 15 },
      { y: '2019', a: 70,  b: 40 },
      { y: '2020', a: 85, b: 50 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Data A', 'Data B'],
    lineColors: ['#4d79f6', '#f1646c'],
    lineWidth: 1,
    ymax: 'auto 100',
    gridTextSize: 11,
    hideHover: 'auto',
    smooth: false,
    resize: true
  });

  new Morris.Line({
    element: 'morrisLine2',
    data: [
      { y: '2015', a: 15, b: 10, c: 25 },
      { y: '2014', a: 25,  b: 15, c: 45 },
      { y: '2016', a: 35,  b: 25, c: 15 },
      { y: '2017', a: 45,  b: 75, c: 55 },
      { y: '2018', a: 25,  b: 15, c: 85 },
      { y: '2019', a: 70,  b: 40, c: 10 },
      { y: '2020', a: 85, b: 50, c: 35 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Data A', 'Data B', 'Data C'],
    lineColors: ['#4d79f6', '#f1646c', '#9ba7ca'],
    lineWidth: 1,
    ymax: 'auto 100',
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Area({
    element: 'morrisArea1',
    data: [
      { y: '2015', a: 15, b: 10 },
      { y: '2014', a: 25,  b: 15 },
      { y: '2016', a: 35,  b: 25 },
      { y: '2017', a: 45,  b: 75 },
      { y: '2018', a: 25,  b: 15 },
      { y: '2019', a: 70,  b: 40 },
      { y: '2020', a: 85, b: 50 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Data A', 'Data B'],
    lineColors: ['#4d79f6', '#f1646c'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Area({
    element: 'morrisArea2',
    data: [
      { y: '2015', a: 15, b: 10, c: 25 },
      { y: '2014', a: 25,  b: 15, c: 45 },
      { y: '2016', a: 35,  b: 25, c: 15 },
      { y: '2017', a: 45,  b: 75, c: 55 },
      { y: '2018', a: 25,  b: 15, c: 85 },
      { y: '2019', a: 70,  b: 40, c: 10 },
      { y: '2020', a: 85, b: 50, c: 35 }
    ],

    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Data A', 'Data B', 'Data C'],
    lineColors: ['#4d79f6', '#f1646c', '#9ba7ca'],
    lineWidth: 1,
    fillOpacity: 0.5,
    gridTextSize: 11,
    hideHover: 'auto',
    resize: true
  });

  new Morris.Donut({
    element: 'morrisDonut1',
    data: [
      {label: "Data A", value: 50},
      {label: "Data B", value: 22},
      {label: "Data C", value: 31}
    ],
    colors: ['#4d79f6', '#f1646c', '#9ba7ca'],
    resize: true
  });

  new Morris.Donut({
    element: 'morrisDonut2',
    data: [
      {label: "Data A", value: 41},
      {label: "Data B", value: 27},
      {label: "Data C", value: 11},
      {label: "Data D", value: 67}
    ],
    colors: ['#4d79f6','#f1646c','#9ba7ca','#f3c74d'],
    resize: true
  });

});

