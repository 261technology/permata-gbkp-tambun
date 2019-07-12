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
	<script src="{{url('assets/plugin/fullCalendar/packages/interaction/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/daygrid/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/timegrid/main.js')}}"></script>
	<script src="{{url('assets/plugin/fullCalendar/packages/list/main.js')}}"></script>
@endsection

@section('content')
	<div class="row">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class='calendar col-md-7'>
						<div id="calendar"></div>
					</div>
					<div class='calendar col-md-5'>
							<div id="event"></div>
							<button class="btn btn-md pull-right btn-success" id="btn_addAgenda" style="margin-top: 10px;">
								<i class="fa fa-plus"> Tambahkan Agenda</i>
							</button>
					</div>
				</div>	
			</div>
		</div>
	</div>


	<!-- Modal -->
    <div class="modal fade" id="modal_event" tabindex="-1" role="dialog" aria-labelledby="modal_group_label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><span id="modal_event_label">Tambahkan</span> Acara</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_event">
          <div class="modal-body">
                	<button class="btn btn-danger pull-right btn-sm" id="btn_delete_agenda" style="margin-bottom: 10px;" type="button">
                		<i class="fa fa-trash"></i>
                	</button>
                    <div class="form-group">
                        <label><strong>Nama Acara</strong></label>
                        <input type="hidden" name="acara_id" id="acara_id">
                        <input type="text" name="acara_nama" id="acara_nama" class="form_modal_acara form-control" required placeholder="Nama Acara">
                    </div>

                    <div class="form-group">
                        <label><strong>Deskripsi</strong></label>
                        <textarea id="acara_deskripsi" rows="4" name="acara_deskripsi" class="form_modal_acara form-control" placeholder="Deskripsi Acara" ></textarea>
                    </div>

                    <div class="row">
						<div class="col-sm-12">
							<label style="margin-bottom: 0px !important;"><strong>Mulai</strong></label>
						</div>
						<div class="form-group col-sm-8">
							<label for="city">Tanggal</label>
							<input class="form-control date-picker form_modal_acara" id="acara_tanggal_mulai" name="acara_tanggal_mulai" type="text"  placeholder="yyyy-mm-dd" readonly required>
						</div>
						<div class="form-group col-sm-4">
							<label for="postal-code">Jam</label>
							<input class="form-control form_modal_acara time-picker" id="acara_jam_mulai" name="acara_jam_mulai" jamMenit="true" type="text" placeholder="hh:mm">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<label style="margin-bottom: 0px !important;"><strong>Selesai</strong></label>
						</div>
						<div class="form-group col-sm-8">
							<label for="city">Tanggal</label>
							<input class="form-control date-picker form_modal_acara" id="acara_tanggal_selesai" name="acara_tanggal_selesai" type="text" placeholder="yyyy-mm-dd"  readonly required>
						</div>
						<div class="form-group col-sm-4">
							<label for="postal-code">Jam</label>
							<input class="form-control form_modal_acara time-picker" id="acara_jam_selesai" jamMenit="true" name="acara_jam_selesai" type="text" placeholder="hh:mm" >
						</div>
					</div>

					<div class="form-group">
						<label><strong>Tipe Acara</strong></label>
						<select class="form-control" id="acara_tipe" name="acara_tipe">
						<option value="persekutuan">Persukutuan</option>
						<option value="pendalaman_alkitab">Pendalaman Alkitab</option>
						<option value="perpulungen_permata">Perpulungen Permata</option>
						<option value="rapat">Rapat</option>
						<option value="lain-lain">lain-lain</option>
						</select>
					</div>

					<div class="form-group">
						<label><strong>Skala Acara</strong></label>
						<select class="form-control" id="acara_skala" name="acara_skala" >
							<option value="permata">permata</option>
							<option value="pengurus">pengurus</option>
							<option value="runggun">runggun</option>
							<option value="runggun">klasis</option>
							<option value="runggun">pusat</option>
							<option value="runggun">umum</option>
						</select>
					</div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_submit_modal_event">Save Event</span></button>
          </div>
          </form>
        </div>
      </div>
    </div>
@endsection


@section('footcode')
	<script type="text/javascript">    
	  var Page = function () {
  				let calendarEl1 = document.getElementById('event');
	          	let calendar1   = new FullCalendar.Calendar(calendarEl1, {
			      plugins: ['interaction','timeGrid' ],
  				  selectable : true,
  				  defaultView: 'timeGridDay',
  				  select: function(info) {
					         addEventModal(info.start,info.end);
					        },
				  eventClick: function(calEvent, jsEvent, view) {
					         editEventModal(calEvent.event);
					              // editEvent(calEvent);                
					        },
			      defaultDate: '{{date('Y-m-d')}}',
			      eventResize: function(info) {
					adjustTimeEvenet(info.event);

				  },
				  eventDrop: function(info) {
				  	adjustTimeEvenet(info.event);

				  },
			      header: null,
			      height: 510,
			      editable: true,
			      eventLimit: true, // allow "more" link when too many events
			      events: {
						    url: base_url+'/app/json/data_agenda',
						    method: 'POST',
						    extraParams: {
						      _token: "{{csrf_token()}}",
						    },
						    failure: function() {
						      alert('there was an error while fetching events!');
						    }
						},
			    });
			    calendar1.render();

			    let calendarEl2 = document.getElementById('calendar');
	          	let calendar2   = new FullCalendar.Calendar(calendarEl2, {
			      plugins: [ 'interaction', 'dayGrid' ],
			      header: {
			        left: 'prevYear,prev,next,nextYear today',
			        right: 'title',
			        center: 'dayGridMonth,dayGridWeek'
			      },
			      defaultDate: '{{date('Y-m-d')}}',
			      selectable: true,
			      dateClick: function(date) {
						calendarGoTo(date.date);
					          },
				  eventClick: function(data) {
						calendarGoTo(data.event.start);
					          },
			      eventLimit: true, // allow "more" link when too many events
			      events: {
						    url: base_url+'/app/json/data_agenda',
						    method: 'POST',
						    extraParams: {
						      _token: "{{csrf_token()}}",
						    },
						    failure: function() {
						      alert('there was an error while fetching events!');
						    }
						},
			    });
			    calendar2.render();
			  	
			  	var calendarGoTo = function(date){
			  	  	calendar1.gotoDate(date);
			  	 }

			  	 var addEventModal = function(start,end){
			  	 	$("#acara_id").val('');
			  	 	$(".form_modal_acara").val('');
			  	 	let date_start = start.getFullYear()+'-' + (start.getMonth()+1) + '-'+start.getDate();
			  	 	let time_start =  (("0" + start.getHours()).slice(-2))+':' + (("0" + start.getMinutes()).slice(-2));
			  	 	
			  	 	let date_end = end.getFullYear()+'-' + (end.getMonth()+1) + '-'+end.getDate();
			  	 	let time_end = (("0" + end.getHours()).slice(-2))+':' + (("0" + end.getMinutes()).slice(-2));
			  	 	$('#acara_tanggal_mulai').val(date_start);
			  	 	$('#acara_jam_mulai').val(time_start);

			  	 	$('#acara_tanggal_selesai').val(date_end);
			  	 	$('#acara_jam_selesai').val(time_end);
			  	 	$('#btn_delete_agenda').addClass('hidden');
			  	 	$('#modal_event_label').text('Tambahkan');
			  	 	$('#modal_event').modal('show');
			  	 }

			  	 var editEventModal = function(event){
			  	 	$("#acara_id").val(event.id);
			  	 	$(".form_modal_acara").val('');
			  	 	let date_start = event.start.getFullYear()+'-' + (event.start.getMonth()+1) + '-'+event.start.getDate();
			  	 	let time_start =  (("0" + event.start.getHours()).slice(-2))+':' + (("0" + event.start.getMinutes()).slice(-2));
			  	 	
			  	 	let date_end = event.end.getFullYear()+'-' + (event.end.getMonth()+1) + '-'+event.end.getDate();
			  	 	let time_end = (("0" + event.end.getHours()).slice(-2))+':' + (("0" + event.end.getMinutes()).slice(-2));
			  	 	$('#acara_tanggal_mulai').val(date_start);
			  	 	$('#acara_jam_mulai').val(time_start);
			  	 	$('#acara_tanggal_selesai').val(date_end);
			  	 	$('#acara_jam_selesai').val(time_end);

			  	 	$('#acara_nama').val(event.title);
			  	 	$('#acara_deskripsi').val(event.extendedProps.desripsi);
			  	 	$('#acara_tipe').val(event.extendedProps.tipe).trigger('change');
			  	 	$('#acara_skala').val(event.extendedProps.skala).trigger('change');
			  	 	$('#btn_delete_agenda').removeClass('hidden');
			  	 	$('#modal_event_label').text('Edit');
			  	 	$('#modal_event').modal('show');
			  	 	
			  	 }

			  	 var adjustTimeEvenet = function(event){
			  	 	let id = event.id;
			  	 	let start = event.start.getFullYear()+'-' + (event.start.getMonth()+1) + '-'+event.start.getDate()+' '+(("0" + event.start.getHours()).slice(-2))+':' + (("0" + event.start.getMinutes()).slice(-2));
			  	 	
			  	 	let end = event.end.getFullYear()+'-' + (event.end.getMonth()+1) + '-'+event.end.getDate()+' '+(("0" + event.end.getHours()).slice(-2))+':' + (("0" + event.end.getMinutes()).slice(-2));
			  	 	bootbox.confirm({
					    message: "Perbaharui jam agenda?",
					    buttons: {
					        confirm: {
					            label: 'Ya',
					            className: 'btn-success'
					        },
					        cancel: {
					            label: 'Tidak',
					            className: 'btn-danger'
					        }
					    },
					    callback: function (result) {
					        if(result == true){
					        	$.ajax({
					                    url: "{{url('/')}}/app/agenda/update_jam_agenda",
					                    type:'POST',
					                    data: {id:id, mulai : start, selesai : end, _token: "{{csrf_token()}}"},
					                    dataType : "json",
					                    success:function(result){
					                    	if(result.data == 'success'){
					                    		location.reload();
					                    	}
					                    }

					            });
					        }else{

					        }
					    }
					});
			  	 	
			  	 }

	      return {
	          init: function() { 
	          		$(document).on("click","#btn_submit_modal_event",function(e){
	          			e.stopImmediatePropagation();
						if($('#form_event').valid()){

								var dataForm  = $('#form_event').serialize();
								dataForm = dataForm+"&_token={{csrf_token()}}"; 
								var url = "{{url('/')}}/app/agenda/update_agenda";
								$.ajax({
					                    url: url,
					                    type:'POST',
					                    data:  dataForm ,
					                    dataType : "json",
					                    success:function(result){
					                    	if(result.data == 'success'){
					                    		location.reload();
					                    	}
					                    }

					            });
						}
	          		});

	          		$(document).on("click","#btn_addAgenda",function(){
	          			$("#acara_id").val('');
	          			$("#acara_tanggal_mulai").val('');
	          			$("#acara_tanggal_selesai").val('');
	          			$("#acara_jam_mulai").val('');
	          			$("#acara_jam_selesai").val('');
			  	 		$(".form_modal_acara").val('');
			  	 		$("#modal_event_label").text("Tambahkan");
			  	 		$("#modal_event").modal("show");
	          		});

	          		$(document).on("click","#btn_delete_agenda",function(){
	          			let id = $("#acara_id").val();	
	          			let nama = $("#acara_nama").val();	
	          			bootbox.confirm({
					    message: "Hapus agenda " + nama + " ?",
					    buttons: {
					        confirm: {
					            label: 'Ya',
					            className: 'btn-success'
					        },
					        cancel: {
					            label: 'Tidak',
					            className: 'btn-danger'
					        }
						    },
						    callback: function (result) {
						        if(result == true){
						        	$.ajax({
						                    url: "{{url('/')}}/app/agenda/delete_agenda",
						                    type:'POST',
						                    data: {id:id, _token: "{{csrf_token()}}", nama : nama},
						                    dataType : "json",
						                    success:function(result){
						                    	if(result.data == 'success'){
						                    		location.reload();
						                    	}
						                    }

						            });
						        }
						    }
						});
	          		});
				}
	      };

	  }();

	  jQuery(document).ready(function() {
	      Page.init();
	  });  
	</script>
	<style type="text/css">
		.calendar{
			border: 1px solid #a0a0a0;
			padding: 7px;
		}

		.fc-view-container{
			border: 1px solid #2d3e50;
		}
		.fc-highlight{
			background-color: #036bd8 !important;
		}
		.fc-event-container{
			cursor: pointer;
		}
	</style>
@endsection