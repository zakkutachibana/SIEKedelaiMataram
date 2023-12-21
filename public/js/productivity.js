// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
	chart: {
		type: 'column'
	},
	title: {
		align: 'center',
		text: 'Produktivitas Kedelai di Kota Mataram'
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
			text: 'Produktivitas Kedelai (Kuintal/Ha)'
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
				format: '{point.y:.2f} Kuintal/Ha'
			}
		}
	},

	tooltip: {
		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> Kuintal/Ha<br/>'
	},

	series: [{
		name: 'Data Produktivitas',
		colorByPoint: true,
		data: [{
				name: 'Ampenan',
				y: 125.74,
				drilldown: 'Ampenan'
			},
			{
				name: 'Cakranegara',
				y: 0,
				drilldown: 'Cakranegara'
			},
			{
				name: 'Mataram',
				y: 124.94,
				drilldown: 'Mataram'
			},
			{
				name: 'Sandubaya',
				y: 0,
				drilldown: 'Sandubaya'
			},
			{
				name: 'Sekarbela',
				y: 103.36,
				drilldown: 'Sekarbela'
			},
			{
				name: 'Selaparang',
				y: 136.7,
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
						9.2
					],
					[
						'2014',
						9.61
					],
					[
						'2015',
						18.27
					],
					[
						'2016',
						18.27
					],
					[
						'2017',
						18.27
					],
					[
						'2018',
						18.27
					],
					[
						'2019',
						18.27
					],
					[
						'2020',
						15.58
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
						10.96
					],
					[
						'2014',
						10.73
					],
					[
						'2015',
						20.65
					],
					[
						'2016',
						20.65
					],
					[
						'2017',
						20.65
					],
					[
						'2018',
						20.65
					],
					[
						'2019',
						20.65
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
						8.28
					],
					[
						'2014',
						7.55
					],
					[
						'2015',
						14.39
					],
					[
						'2016',
						14.39
					],
					[
						'2017',
						14.39
					],
					[
						'2018',
						14.39
					],
					[
						'2019',
						14.39
					],
					[
						'2020',
						15.58
					],
				]
			},
			{
				name: 'Selaparang',
				id: 'Selaparang',
				data: [
					[
						'2013',
						9.06
					],
					[
						'2014',
						12.24
					],
					[
						'2015',
						23.08
					],
					[
						'2016',
						23.08
					],
					[
						'2017',
						23.08
					],
					[
						'2018',
						23.08
					],
					[
						'2019',
						23.08
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