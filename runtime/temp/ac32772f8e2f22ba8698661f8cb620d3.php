<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"../public/app_admin/tpls/dashboards/variant-2.html";i:1466350461;}*/ ?>
<div class="dx-warning hidden">
	<div>
		<h2>How to Include Charts Library in Xenon Theme</h2>

		<p>The reason why you don't see charts like in the Xenon demo website is because of license restrictions from DevExpress company. <a href="http://js.devexpress.com/DevExtremeWeb/?folder=EULAs" target="_blank">Click here</a> to read license agreement.</p>
		<p>Even that we have purchased the developer license we are not permitted to include the DevExtreme Web Charts JavaScript library in the default download file of Xenon theme, however you can include DevExpress Charts library manually and takes just few minutes:</p>

		<ol>
			<li>Download <strong>DevExtreme Web</strong> JavaScript library by clicking <a href="https://go.devexpress.com/DevExpressDownload_DevExtremeWebTrial.aspx" class="text-bold">here</a>. If the link doesn't work, then <a href="http://js.devexpress.com/Buy/" target="_parent"><strong>click this one</strong></a> and choose DevExtreme Web package to download.</li>
			<li>Extract the downloaded archive. There you will find <strong>Lib/</strong> folder. <strong>Copy</strong> the folders inside.</li>
			<li><strong>Paste</strong> copied files to <strong>assets/js/devexpress-web-14.1/</strong></li>
			<li>You are all set! Charts will look the same just like in the demo website.</li>
		</ol>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		if( ! $.isFunction($.fn.dxChart))
			$(".dx-warning").removeClass('hidden');
	});
</script>

<script type="text/javascript">
	
		setTimeout(function()
		{	
		var $ = jQuery;		
		if( ! $.isFunction($.fn.dxChart))
			return;
			
		var gaugesPalette = ['#8dc63f', '#40bbea', '#ffba00', '#cc3f44'];
		
			
		// Data Sources for all charts
		var reqs_per_second_data = [
			{ time: new Date("December 05, 2014 18:00:00"), reqs: 107 },
			{ time: new Date("December 05, 2014 19:00:00"), reqs: 141 },
			{ time: new Date("December 05, 2014 20:00:00"), reqs: 118 },
			{ time: new Date("December 05, 2014 21:00:00"), reqs: 24 },
			{ time: new Date("December 05, 2014 22:00:00"), reqs: 98 },
			{ time: new Date("December 05, 2014 23:00:00"), reqs: 171 },
			{ time: new Date("December 06, 2014 00:00:00"), reqs: 26 },
			{ time: new Date("December 06, 2014 01:00:00"), reqs: 167 },
			{ time: new Date("December 06, 2014 02:00:00"), reqs: 124 },
			{ time: new Date("December 06, 2014 03:00:00"), reqs: 78 },
			{ time: new Date("December 06, 2014 04:00:00"), reqs: 130 },
			{ time: new Date("December 06, 2014 05:00:00"), reqs: 120 },
			{ time: new Date("December 06, 2014 06:00:00"), reqs: 26 },
			{ time: new Date("December 06, 2014 07:00:00"), reqs: 70 },
			{ time: new Date("December 06, 2014 08:00:00"), reqs: 108 },
			{ time: new Date("December 06, 2014 09:00:00"), reqs: 60 },
			{ time: new Date("December 06, 2014 10:00:00"), reqs: 139 },
			{ time: new Date("December 06, 2014 11:00:00"), reqs: 145 },
			{ time: new Date("December 06, 2014 12:00:00"), reqs: 15 },
			{ time: new Date("December 06, 2014 13:00:00"), reqs: 36 },
			{ time: new Date("December 06, 2014 14:00:00"), reqs: 73 },
			{ time: new Date("December 06, 2014 15:00:00"), reqs: 125 },
			{ time: new Date("December 06, 2014 16:00:00"), reqs: 25 },
			{ time: new Date("December 06, 2014 17:00:00"), reqs: 122 },
		];
		
		var cpu_usage_data = [
			{ time: new Date("December 05, 2014 18:00:00"), usage: 86 },
			{ time: new Date("December 05, 2014 19:00:00"), usage: 84 },
			{ time: new Date("December 05, 2014 20:00:00"), usage: 68 },
			{ time: new Date("December 05, 2014 21:00:00"), usage: 15 },
			{ time: new Date("December 05, 2014 22:00:00"), usage: 51 },
			{ time: new Date("December 05, 2014 23:00:00"), usage: 76 },
			{ time: new Date("December 06, 2014 00:00:00"), usage: 13 },
			{ time: new Date("December 06, 2014 01:00:00"), usage: 74 },
			{ time: new Date("December 06, 2014 02:00:00"), usage: 61 },
			{ time: new Date("December 06, 2014 03:00:00"), usage: 44 },
			{ time: new Date("December 06, 2014 04:00:00"), usage: 30 },
			{ time: new Date("December 06, 2014 05:00:00"), usage: 21 },
			{ time: new Date("December 06, 2014 06:00:00"), usage: 11 },
			{ time: new Date("December 06, 2014 07:00:00"), usage: 6 },
			{ time: new Date("December 06, 2014 08:00:00"), usage: 51 },
			{ time: new Date("December 06, 2014 09:00:00"), usage: 64 },
			{ time: new Date("December 06, 2014 10:00:00"), usage: 41 },
			{ time: new Date("December 06, 2014 11:00:00"), usage: 48 },
			{ time: new Date("December 06, 2014 12:00:00"), usage: 30 },
			{ time: new Date("December 06, 2014 13:00:00"), usage: 42 },
			{ time: new Date("December 06, 2014 14:00:00"), usage: 76 },
			{ time: new Date("December 06, 2014 15:00:00"), usage: 7 },
			{ time: new Date("December 06, 2014 16:00:00"), usage: 27 },
			{ time: new Date("December 06, 2014 17:00:00"), usage: 51 },
		];
		
		var memory_usage_data = [
			{ time: new Date("December 05, 2014 18:00:00"), used: 476 },
			{ time: new Date("December 05, 2014 19:00:00"), used: 250 },
			{ time: new Date("December 05, 2014 20:00:00"), used: 539 },
			{ time: new Date("December 05, 2014 21:00:00"), used: 220 },
			{ time: new Date("December 05, 2014 22:00:00"), used: 632 },
			{ time: new Date("December 05, 2014 23:00:00"), used: 301 },
			{ time: new Date("December 06, 2014 00:00:00"), used: 70 },
			{ time: new Date("December 06, 2014 01:00:00"), used: 363 },
			{ time: new Date("December 06, 2014 02:00:00"), used: 854 },
			{ time: new Date("December 06, 2014 03:00:00"), used: 575 },
			{ time: new Date("December 06, 2014 04:00:00"), used: 112 },
			{ time: new Date("December 06, 2014 05:00:00"), used: 332 },
			{ time: new Date("December 06, 2014 06:00:00"), used: 808 },
			{ time: new Date("December 06, 2014 07:00:00"), used: 499 },
			{ time: new Date("December 06, 2014 08:00:00"), used: 968 },
			{ time: new Date("December 06, 2014 09:00:00"), used: 647 },
			{ time: new Date("December 06, 2014 10:00:00"), used: 850 },
			{ time: new Date("December 06, 2014 11:00:00"), used: 546 },
			{ time: new Date("December 06, 2014 12:00:00"), used: 752 },
			{ time: new Date("December 06, 2014 13:00:00"), used: 635 },
			{ time: new Date("December 06, 2014 14:00:00"), used: 938 },
			{ time: new Date("December 06, 2014 15:00:00"), used: 669 },
			{ time: new Date("December 06, 2014 16:00:00"), used: 42 },
			{ time: new Date("December 06, 2014 17:00:00"), used: 139 },
		];
			
		// Requests per second gauge
		$('#reqs-per-second').dxCircularGauge({
			scale: {
				startValue: 0,
				endValue: 200,
				majorTick: {
					tickInterval: 50
				}
			},
			rangeContainer: {
				palette: 'pastel',
				width: 3,
				ranges: [
					{
						startValue: 0,
						endValue: 50,
						color: gaugesPalette[0]
					}, {
						startValue: 50,
						endValue: 100,
						color: gaugesPalette[1]
					}, {
						startValue: 100,
						endValue: 150,
						color: gaugesPalette[2]
					}, {
						startValue: 150,
						endValue: 200,
						color: gaugesPalette[3]
					}
				],
			},
			value: 131,
			valueIndicator: {
				offset: 10,
				color: '#2c2e2f',
				spindleSize: 12
			}
		});
		
		// Requests per second chart
		$("#reqs-per-second-chart").dxChart({
			dataSource: reqs_per_second_data,
			commonPaneSettings: {
				border: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			commonSeriesSettings: {
				type: "area",
				argumentField: "time",
				border: {
					color: '#68b828',
					width: 1,
					visible: true
				}
			},
			series: [
				{ valueField: "reqs", name: "Reqs per Second", color: '#68b828', opacity: .5 },
			],
			commonAxisSettings: {
				label: {
					visible: true
				},
				grid: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			argumentAxis: {
				valueMarginsEnabled: false,
				label: {
					customizeText: function (arg) {
						return date('h:i A', arg.value);
					}
				},
			},
			legend: {
				visible: false
			}
		});
		
			
		// CPU Usage
		$('#cpu-usage').dxCircularGauge({
			scale: {
				startValue: 0,
				endValue: 100,
				majorTick: {
					tickInterval: 25
				}
			},
			rangeContainer: {
				palette: 'pastel',
				width: 3,
				ranges: [
					{
						startValue: 0,
						endValue: 25,
						color: gaugesPalette[0]
					}, {
						startValue: 25,
						endValue: 50,
						color: gaugesPalette[1]
					}, {
						startValue: 50,
						endValue: 75,
						color: gaugesPalette[2]
					}, {
						startValue: 75,
						endValue: 100,
						color: gaugesPalette[3]
					}
				],
			},
			value: 20,
			valueIndicator: {
				offset: 10,
				color: '#2c2e2f',
				spindleSize: 12
			}
		});
		
		// CPU Usage chart
		$("#cpu-usage-chart").dxChart({
			dataSource: cpu_usage_data,
			commonPaneSettings: {
				border: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			commonSeriesSettings: {
				type: "area",
				argumentField: "time",
				border: {
					color: '#7c38bc',
					width: 1,
					visible: true
				}
			},
			series: [
				{ valueField: "usage", name: "Capacity used", color: '#7c38bc', opacity: .5 },
			],
			commonAxisSettings: {
				label: {
					visible: true
				},
				grid: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			argumentAxis: {
				valueMarginsEnabled: false,
				label: {
					customizeText: function (arg) {
						return date('h:i A', arg.value);
					}
				},
			},
			legend: {
				visible: false
			}
		});
		
		
			
		// Memory Usage
		$('#memory-usage').dxCircularGauge({
			scale: {
				startValue: 0,
				endValue: 1000,
				majorTick: {
					tickInterval: 250
				}
			},
			rangeContainer: {
				palette: 'pastel',
				width: 3,
				ranges: [
					{
						startValue: 0,
						endValue: 250,
						color: '#40bbea'
					}, {
						startValue: 250,
						endValue: 500,
						color: '#40bbea'
					}, {
						startValue: 500,
						endValue: 750,
						color: '#40bbea'
					}, {
						startValue: 750,
						endValue: 1000,
						color: '#40bbea'
					}
				],
			},
			value: 654,
			valueIndicator: {
				offset: 10,
				color: '#2c2e2f',
				spindleSize: 12
			}
		});
		
		// Memory Usage chart
		$("#memory-usage-chart").dxChart({
			dataSource: memory_usage_data,
			commonPaneSettings: {
				border: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			commonSeriesSettings: {
				type: "area",
				argumentField: "time",
				border: {
					color: '#40bbea',
					width: 1,
					visible: true
				}
			},
			series: [
				{ valueField: "used", name: "Megabytes occupied", color: '#40bbea', opacity: .5 },
			],
			commonAxisSettings: {
				label: {
					visible: true
				},
				grid: {
					visible: true,
					color: '#f5f5f5'
				}
			},
			argumentAxis: {
				valueMarginsEnabled: false,
				label: {
					customizeText: function (arg) {
						return date('h:i A', arg.value);
					}
				},
			},
			legend: {
				visible: false
			}
		});
		
		
		// Combine charts for filtering, grouped by time
		var all_data_sources = [];
		
		$.map(reqs_per_second_data, function(arg, i)
		{
			all_data_sources.push({
				time: 					arg.time,
				requestsPerMinute: 		reqs_per_second_data[i].reqs,
				cpuUsage: 				cpu_usage_data[i].usage,
				memoryUsed: 			memory_usage_data[i].used
			});
		});
		
		
		// Range Filter
		$("#range-chart").dxRangeSelector({
			dataSource: all_data_sources,
			size: {
				height: 140
			},
			chart: {
				series: [
					{ argumentField: "time", valueField: "requestsPerMinute", color: '#68b828', opacity: .65 },
					{ argumentField: "time", valueField: "cpuUsage", color: '#7c38bc', opacity: .65 },
					{ argumentField: "time", valueField: "memoryUsed", color: '#40bbea', opacity: .65 }
				]
			},
			selectedRange: {
				startValue: all_data_sources[4].time,
				endValue: all_data_sources[14].time
			},
			selectedRangeChanged: function(e)
			{
				var filter = {
					reqsPerMinuteData: [],
					cpuUsageData: [],
					memoryUsageData: []
				};
				
				$.map(all_data_sources, function(arg, i)
				{
					if(date("U", e.startValue) <= date("U", arg.time) && date("U", e.endValue) >= date("U", arg.time))
					{
						filter.reqsPerMinuteData.push({
							time: arg.time,
							reqs: arg.requestsPerMinute
						});
						
						filter.cpuUsageData.push({
							time: arg.time,
							usage: arg.cpuUsage
						});
						
						filter.memoryUsageData.push({
							time: arg.time,
							used: arg.memoryUsed
						});
					}
				});
				
				$('#reqs-per-second-chart').dxChart('instance').option('dataSource', filter.reqsPerMinuteData);
				$('#cpu-usage-chart').dxChart('instance').option('dataSource', filter.cpuUsageData);
				$('#memory-usage-chart').dxChart('instance').option('dataSource', filter.memoryUsageData);
			}
		});
		
		
		
		// Resize charts
		$(window).on('xenon.resize', function()
		{
			$("#range-chart").data("dxRangeSelector").render();
			
			$("#reqs-per-second-chart").data("dxChart").render();
			$("#cpu-usage-chart").data("dxChart").render();
			$("#memory-usage-chart").data("dxChart").render();
			
			$("#reqs-per-second").data("dxCircularGauge").render();
			$("#cpu-usage").data("dxCircularGauge").render();
			$("#memory-usage").data("dxCircularGauge").render();
		});
	});
</script>

<div class="panel panel-default">
	<div class="panel-heading">
		Realtime result filtering by range
	</div>
	<div class="panel-body">
		
		<div class="row">
			<div class="col-sm-12">
				<div id="range-chart"></div>
			</div>
		</div>
		
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Requests per second
	</div>
	<div class="panel-body">
		
		<div class="row">
			<div class="col-sm-3">
				<p class="text-medium">View the number of requests completed at the moment and for the selected range within the last day.</p>
				<div class="super-large text-secondary" xe-counter data-count="this" data-from="0" data-to="131" data-duration="1.5">0</div>
			</div>
			<div class="col-sm-3">
				<div id="reqs-per-second" style="height: 150px;"></div>
			</div>
			<div class="col-sm-6">
				<div id="reqs-per-second-chart" style="height: 150px;"></div>
			</div>
		</div>
		
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		CPU usage in %
	</div>
	<div class="panel-body">
		
		<div class="row">
			<div class="col-sm-3">
				<p class="text-medium">View how much CPU is being used at the moment and for the selected range within the last day.</p>
				<div class="super-large text-purple" xe-counter data-count="this" data-from="0" data-to="20" data-duration="2">0</div>
			</div>
			<div class="col-sm-3">
				<div id="cpu-usage" style="height: 150px;"></div>
			</div>
			<div class="col-sm-6">
				<div id="cpu-usage-chart" style="height: 150px;"></div>
			</div>
		</div>
		
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		Memory Consumption, Mb
	</div>
	<div class="panel-body">
		
		<div class="row">
			<div class="col-sm-3">
				<p class="text-medium">View how much memory is used at the moment and for the selected range within the last day.</p>
				<div class="super-large text-info" xe-counter data-count="this" data-from="0" data-to="654" data-duration="3">0</div>
			</div>
			<div class="col-sm-3">
				<div id="memory-usage" style="height: 150px;"></div>
			</div>
			<div class="col-sm-6">
				<div id="memory-usage-chart" style="height: 150px;"></div>
			</div>
		</div>
		
	</div>
</div>