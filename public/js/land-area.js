// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    align: 'center',
    text: 'Luas Lahan Kedelai di Kota Mataram'
  },
  subtitle: {
    align: 'center',
    text: 'Tahun 2013 - 2020'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total Luas Lahan Kedelai (Hektare)'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.2f} Hektare'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> Hektare<br/>'
  },

  series: [{
    name: 'Data Luas Lahan',
    colorByPoint: true,
    data: [{
        name: 'Ampenan',
        y: 790.23,
        drilldown: 'Ampenan'
      },
      {
        name: 'Cakranegara',
        y: 0,
        drilldown: 'Cakranegara'
      },
      {
        name: 'Mataram',
        y: 619.46,
        drilldown: 'Mataram'
      },
      {
        name: 'Sandubaya',
        y: 0,
        drilldown: 'Sandubaya'
      },
      {
        name: 'Sekarbela',
        y: 621.96,
        drilldown: 'Sekarbela'
      },
      {
        name: 'Selaparang',
        y: 961.15,
        drilldown: 'Selaparang'
      },
    ]
  }],
  drilldown: {
    breadcrumbs: {
      position: {
        align: 'right'
      }
    },
    series: [{
        name: 'Ampenan',
        id: 'Ampenan',
        data: [
          [
            '2013',
            122.85
          ],
          [
            '2014',
            96.28
          ],
          [
            '2015',
            113.84
          ],
          [
            '2016',
            113.84
          ],
          [
            '2017',
            113.84
          ],
          [
            '2018',
            113.84
          ],
          [
            '2019',
            113.84
          ],
          [
            '2020',
            1.9
          ],
        ]
      },
      {
        name: 'Cakranegara',
        id: 'Cakranegara',
        data: [
          [
            '2013',
            0
          ],
          [
            '2014',
            0
          ],
          [
            '2015',
            0
          ],
          [
            '2016',
            0
          ],
          [
            '2017',
            0
          ],
          [
            '2018',
            0
          ],
          [
            '2019',
            0
          ],
          [
            '2020',
            0
          ],
        ]
      },
      {
        name: 'Mataram',
        id: 'Mataram',
        data: [
          [
            '2013',
            92.14
          ],
          [
            '2014',
            77.02
          ],
          [
            '2015',
            90.06
          ],
          [
            '2016',
            90.06
          ],
          [
            '2017',
            90.06
          ],
          [
            '2018',
            90.06
          ],
          [
            '2019',
            90.06
          ],
          [
            '2020',
            0
          ],
        ]
      },
      {
        name: 'Sandubaya',
        id: 'Sandubaya',
        data: [
          [
            '2013',
            0
          ],
          [
            '2014',
            0
          ],
          [
            '2015',
            0

          ],
          [
            '2016',
            0

          ],
          [
            '2017',
            0

          ],
          [
            '2018',
            0

          ],
          [
            '2019',
            0

          ],
          [
            '2020',
            0
          ],
        ]
      },
      {
        name: 'Sekarbela',
        id: 'Sekarbela',
        data: [
          [
            '2013',
            85.74
          ],
          [
            '2014',
            77.02
          ],
          [
            '2015',
            91.06
          ],
          [
            '2016',
            91.06
          ],
          [
            '2017',
            91.06
          ],
          [
            '2018',
            91.06
          ],
          [
            '2019',
            91.06
          ],
          [
            '2020',
            3.9
          ],
        ]
      },
      {
        name: 'Selaparang',
        id: 'Selaparang',
        data: [
          [
            '2013',
            184.27
          ],
          [
            '2014',
            111.68
          ],
          [
            '2015',
            133.04
          ],
          [
            '2016',
            133.04
          ],
          [
            '2017',
            133.04
          ],
          [
            '2018',
            133.04
          ],
          [
            '2019',
            133.04
          ],
          [
            '2020',
            0
          ],
        ]
      }
    ]
  }
});