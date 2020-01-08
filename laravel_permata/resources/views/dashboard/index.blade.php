@extends('template.master')
@section('assets')
	<!-- Highcharts -->
	<script src="{{url('assets/plugin/highchart/code/highcharts.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/modules/drilldown.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/modules/exporting.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/grouped-categories.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/highcharts-more.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/highcharts-3d.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/lib/canvg.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/lib/jspdf.js')}}"></script>
	<script src="{{url('assets/plugin/highchart/code/lib/rgbcolor.js')}}"></script>

	<!-- FullCalendar -->
	<link href="{{url('assets/plugin/fullCalendar/packages/core/main.css')}}" rel='stylesheet' />
	<link href="{{url('assets/plugin/fullCalendar/packages/daygrid/main.css')}}" rel='stylesheet' />
	<link href="{{url('assets/plugin/fullCalendar/packages/timegrid/main.css')}}" rel='stylesheet' />
	<link href="{{url('assets/plugin/fullCalendar/packages/list/main.css')}}" rel='stylesheet' />

	<script src="{{url('assets/plugin/fullCalendar/packages/core/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/daygrid/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/timegrid/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/list/main.js')}}"></script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-5">
			<div id="chart_anggota"></div>
		</div>
		<div class="col-md-7">
			<div id="chart_pekerjaan"></div>
		</div>
	</div>
	<div class="row">
		<div id='calendar1' class='calendar col-md-8'></div>
  		<div id='calendar2' class='calendar col-md-4'></div>
	</div>
    
@endsection


@section('footcode')
<script type="text/javascript">
	// Highcharts.chart('chart_anggota', {
	//     chart: {
	//         plotBackgroundColor: null,
	//         plotBorderWidth: null,
	//         plotShadow: false,
	//         type: 'pie'
	//     },
	//     title: {
	//         text: 'Rasio Anggota Permata / Sektor'
	//     },
	//     plotOptions: {
	//         pie: {
	//             allowPointSelect: true,
	//             cursor: 'pointer',
	//             dataLabels: {
	//                 enabled: true,
	//                 format: '<b>{point.name}</b>: {point.y}'
	//             }
	//         }
	//     },
	//     series: [{
	//         name: 'Peserta',
	//         colorByPoint: true,
	//     }],
	//     credits: {
	//                           text: 'PERMATA GBKP TAMBUN',
	//                           href: '#',
	//                           style: {
	//                           color: '#a40000'},
	//                       },
	//     colors: ['#ff0	', '#0d23da', '#2f7ed8', '#3d6ae8', '#4e5fe8',
	//     '#4f9fe8', '#5a9fff', '#77a1e5', '#c42525', '#a6c96a']
	// }); 


	var colors = <?= json_encode($color1); ?>,
    categories = <?= json_encode($nama_sektor); ?>,
    data = <?= json_encode($chartAnggota); ?>
    ,
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: data[i].drilldown.color[j]
        });
    }
}

// Chart Pekerjaan
Highcharts.chart('chart_pekerjaan', {
	    chart: {
	        type: 'pie'
	    },
	    title: {
	        text: 'Anggota per-sektor'
	    },
	    subtitle: {
	        text: 'PERMATA GBKP RUNGGUN TAMBUN'
	    },
	    plotOptions: {
	        pie: {
	            shadow: false,
	            center: ['50%', '50%']
	        }
	    },
	    tooltip: {
	        valueSuffix: ' orang'
	    },
	    series: [{
	        name: 'Sektor',
	        data: browserData,
	        size: '70%',
	        dataLabels: {
	            formatter: function () {
	                return this.point.name + ' orang';
	            },
	            color: '#ffffff',
	            distance: -30
	        }
	    }, {
	        name: 'Status',
	        data: versionsData,
	        size: '100%',
	        innerSize: '80%',
	        dataLabels: {
	            formatter: function () {
	                // display only if larger than 1
	                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
	                    this.y + ' orang' : null;
	            }
	        },
	        id: 'versions'
	    }],
	    responsive: {
	        rules: [{
	            condition: {
	                maxWidth: 400
	            },
	            chartOptions: {
	                series: [{
	                }, {
	                    id: 'versions',
	                    dataLabels: {
	                        enabled: false
	                    }
	                }]
	            }
	        }]
	    }
	});
</script>
@endsection 