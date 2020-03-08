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

	<style type="text/css">
		.label-anggota{
			font-size: 1.2em;
			font-weight: 800;
		}

		.label-anggota-count{
			font-size:3em;
			font-weight: 800;
			line-height: 1em;
		}

		.label-sub-anggota{
			font-size: 0.8em;
    		font-weight: 700;
		}
		.label-sub-anggota-count{
			font-size: 2.4em;
			font-weight: 700;
			line-height: 0.7em;
		}
	</style>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="card col-md-12 mb-1 bg-primary">
					<div class="card-body p-1">
						<div><strong class="label-anggota">TOTAL ANGGOTA</strong></div>
						<div><span class="label-anggota-count"><?= $totalAnggota["all"] ?></span> <small>Orang</small> </div>
					</div>
				</div>

				<div class="card bg-success col-md-4 pl-0 pr-0 text-center">
					<div class="card-body p-1">
						<div><strong class="label-sub-anggota">AKTIF</strong></div>
						<div><span class="label-sub-anggota-count"><?= $totalAnggota["aktif"] ?></span></div>
					</div>
				</div>

				<div class="card col-md-4 bg-warning pl-0 pr-0 text-center">
					<div class="card-body p-1">
						<div><strong class="label-sub-anggota">TIDAK AKTIF</strong></div>
						<div><span class="label-sub-anggota-count"><?= $totalAnggota["tidak-aktif"] ?></span></div>
					</div>
				</div>

				<div class="card col-md-4 bg-disabled pl-0 pr-0 text-center">
					<div class="card-body p-1">
						<div><strong class="label-sub-anggota">TERDAFTAR</strong></div>
						<div><span class="label-sub-anggota-count"><?= $totalAnggota["terdaftar"] ?></span></div>
					</div>
				</div>


			</div>
		</div>
		<div class="col-md-9">
			<div id="chart-anggota"></div>
		</div>
	</div>
	<div class="row">
		<div id='calendar1' class='calendar col-md-8'></div>
  		<div id='calendar2' class='calendar col-md-4'></div>
	</div>
    
@endsection


@section('footcode')
<script type="text/javascript">
var Page = (() => {
	const chartAnggota = () => {
		let colors = <?= json_encode($chartAnggota["color"]); ?>,
		categories = <?= json_encode($sektor); ?>,
		data = <?= json_encode($chartAnggota["chart"]); ?>
		,
		sektorData = [],
		sektorStatusData = [],
		i,
		j,
		dataLen = data.length,
		drillDataLen,
		brightness;

		// Build the data arrays
		for (i = 0; i < dataLen; i += 1) {

		    // add browser data
		    sektorData.push({
		        name: categories[i],
		        y: data[i].y,
		        color: data[i].color
		    });

		    // add version data
		    drillDataLen = data[i].drilldown.data.length;
		    for (j = 0; j < drillDataLen; j += 1) {
		        brightness = 0.2 - (j / drillDataLen) / 5;
		        sektorStatusData.push({
		            name: data[i].drilldown.categories[j],
		            y: data[i].drilldown.data[j],
		            color: data[i].drilldown.color[j]
		        });
		    }
		}

		// Chart Pekerjaan
		Highcharts.chart('chart-anggota', {
			    chart: {
			        type: 'pie',
			        backgroundColor: '#ffffff92',
			        borderRadius: '10px',
			    },
			    exporting: { enabled: false },
			    title: {
			        text: 'Anggota per-sektor'
			    },
			    subtitle: {
			        text: ''
			    },
			    credits: { text: ''},
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
			        data: sektorData,
			        size: '70%',
			        dataLabels: {
			            formatter: function () {
			                return this.point.name +", <div class='label-chart-anggota'>"+this.y+' orang</div>';
			            },
			            color: '#ffffff',
			            distance: -30
			        }
			    }, {
			        name: 'Status',
			        data: sektorStatusData,
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
	}     
     

  	return {
      init: () => {
      		chartAnggota();
       }
  };
})();

global.ready(()=> {
    Page.init();
});  
</script>
@endsection 