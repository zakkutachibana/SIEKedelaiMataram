// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
	chart: {
		type: 'column'
	},
	title: {
		align: 'center',
		text: 'Produksi Kedelai di Kota Mataram'
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
			text: 'Total Produksi Kedelai (Kuintal)'
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
				format: '{point.y:.2f} Kuintal'
			}
		}
	},

	tooltip: {
		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> Kuintal<br/>'
	},

	series: [{
		name: 'Data Total Produksi',
		colorByPoint: true,
		data: [{
				name: 'Ampenan',
				y: 1248.18,
				drilldown: 'Ampenan'
			},
			{
				name: 'Cakranegara',
				y: 0,
				drilldown: 'Cakranegara'
			},
			{
				name: 'Mataram',
				y: 1113.68,
				drilldown: 'Mataram'
			},
			{
				name: 'Sandubaya',
				y: 0,
				drilldown: 'Sandubaya'
			},
			{
				name: 'Sekarbela',
				y: 790.2,
				drilldown: 'Sekarbela'
			},
			{
				name: 'Selaparang',
				y: 1838.7,
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
						1130.0
					],
					[
						'2014',
						925.0
					],
					[
						'2015',
						2080.0
					],
					[
						'2016',
						2080.0
					],
					[
						'2017',
						2080.0
					],
					[
						'2018',
						2080.0
					],
					[
						'2019',
						2080.0
					],
					[
						'2020',
						26.8
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
						1010.0
					],
					[
						'2014',
						826.8
					],
					[
						'2015',
						1860.0
					],
					[
						'2016',
						1860.0
					],
					[
						'2017',
						1860.0
					],
					[
						'2018',
						1860.0
					],
					[
						'2019',
						1860.0
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
						710.0
					],
					[
						'2014',
						581.2
					],
					[
						'2015',
						1310.0
					],
					[
						'2016',
						1310.0
					],
					[
						'2017',
						1310.0
					],
					[
						'2018',
						1310.0
					],
					[
						'2019',
						1310.0
					],
					[
						'2020',
						60.8
					],
				]
			},
			{
				name: 'Selaparang',
				id: 'Selaparang',
				data: [
					[
						'2013',
						1670.0
					],
					[
						'2014',
						1367.0
					],
					[
						'2015',
						3070.0
					],
					[
						'2016',
						3070.0
					],
					[
						'2017',
						3070.0
					],
					[
						'2018',
						3070.0
					],
					[
						'2019',
						3070.0
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