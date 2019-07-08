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
	<div class="container-fluid row">
		<div id='calendar1' class='calendar col-md-8'></div>
  		<div id='calendar2' class='calendar col-md-4'></div>
	</div>
    
@endsection


@section('footcode')

@endsection