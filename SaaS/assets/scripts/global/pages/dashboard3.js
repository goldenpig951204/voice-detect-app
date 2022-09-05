//[Dashboard Javascript]

//Project:	AIUI Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	Morris.Area({
        element: 'earnings',
        data: [{
            period: '2012',
            SiteA: 485,
            SiteB: 358,
            
        }, {
            period: '2013',
            SiteA: 359,
            SiteB: 210,
            
        }, {
            period: '2014',
            SiteA: 589,
            SiteB: 410,
            
        }, {
            period: '2015',
            SiteA: 458,
            SiteB: 344,
            
        }, {
            period: '2016',
            SiteA: 254,
            SiteB: 200,
            
        }, {
            period: '2017',
            SiteA: 754,
            SiteB: 630,
            
        },
         {
            period: '2018',
            SiteA: 845,
            SiteB: 711,
           
        }],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Mi TV', 'Mi Box'],
        pointSize: 3,
        fillOpacity: 0.1,
        pointStrokeColors:['#4d79f6', '#1ecab8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 2,
        smooth: true,
        hideHover: 'auto',
        lineColors: ['#4d79f6', '#1ecab8'],
        resize: true
        
    });
	
	
	

}); // End of use strict

