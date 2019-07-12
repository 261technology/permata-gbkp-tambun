@extends('template.master')
@section('assets')
<!-- Datatable -->
<link href="{{url('assets/plugin/datatables/datatablesBootsrap.min.css')}}" rel="stylesheet">
<script src="{{url('assets/plugin/datatables/datatables.js')}}"></script>
<script src="{{url('assets/plugin/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Pendalaman Alkitab</h4>
				</div>
				<div class="card-body">
					<table id="data-pa" class="table table-bordered table-responsive" style="width:100%;">
						<thead>
							<tr>
								<th style="width: 15%;">Tanggal</th>
								<th style="width: 35%;">Tema</th>
								<th style="width: 25%;">Tuan Rumah</th>
								<th style="width: 20%;">Pendamping</th>
								<th style="width: 10%;min-width: 50px;"></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<div class="card-footer">
                    <button id="btn_add" class="btn btn-brand btn-success float-right" type="button" style="margin-bottom: 4px">
                        <i class="fa fa-plus"></i>
                        <span>Tambah data </span>
                    </button>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
    <div class="modal fade" id="modal_pa" tabindex="-1" role="dialog" aria-labelledby="modal_group_label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><span id="modal_pa_label">Tambahkan</span> Acara</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_pa">
          <div class="modal-body">
                	<button class="btn btn-danger pull-right btn-sm" id="btn_delete_pa" style="margin-bottom: 10px;" type="button">
                		<i class="fa fa-trash"></i>
                	</button>
                    <div class="form-group">
                        <label><strong>Nama</strong></label>
                        <input type="hidden" name="pa_id" id="pa_id">
                        <input type="hidden" name="acara_id" id="acara_id">
                        <input type="text" name="pa_nama" id="pa_nama" class="form_modal_pa form-control" required placeholder="Isikan dengan PA Bulan ? minggu ke ?, atau keterangan singkat lainnya " required>
                    </div>

                    <div class="form-group">
                    	<label><strong>Tema</strong></label>
                    	<input type="text" name="pa_tema" id="pa_tema" class="form-control form_modal_pa" required>
                    </div>

                    <div class="form-group">
                    	<label><strong>Bahan Alkitab</strong></label>
                    	<input type="text" name="pa_ayat" id="pa_ayat" class="form-control form_modal_pa" required>
                    </div>

                    <div class="form-group">
                    	<label><strong>Pendamping</strong></label>
                    	<input type="text" name="pa_pendamping" id="pa_pendamping" class="form-control form_modal_pa" required>
                    </div>

                    <div class="form-group">
                    	<label><strong>Lokasi</strong></label>
                    	<textarea rows="2" name="pa_lokasi" id="pa_lokasi" class="form-control form_modal_pa" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><strong>Deskripsi</strong></label>
                        <textarea id="pa_deskripsi" rows="4" name="pa_deskripsi" class="form_modal_pa form-control" placeholder="Deskripsi Acara" ></textarea>
                    </div>
                    <div class="row">
						<div class="col-sm-12">
							<label style="margin-bottom: 0px !important;"><strong>Mulai</strong></label>
						</div>
						<div class="form-group col-sm-8">
							<label for="city">Tanggal</label>
							<input class="form-control date-picker form_modal_pa" id="pa_tanggal_mulai" name="pa_tanggal_mulai" type="text"  placeholder="yyyy-mm-dd" readonly required>
						</div>
						<div class="form-group col-sm-4">
							<label for="postal-code">Jam</label>
							<input class="form-control form_modal_pa time-picker" id="pa_jam_mulai" name="pa_jam_mulai" jamMenit="true" type="text" placeholder="hh:mm">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<label style="margin-bottom: 0px !important;"><strong>Selesai</strong></label>
						</div>
						<div class="form-group col-sm-8">
							<label for="city">Tanggal</label>
							<input class="form-control date-picker form_modal_pa" id="pa_tanggal_selesai" name="pa_tanggal_selesai" type="text" placeholder="yyyy-mm-dd"  readonly required>
						</div>
						<div class="form-group col-sm-4">
							<label for="postal-code">Jam</label>
							<input class="form-control form_modal_pa time-picker" id="pa_jam_selesai" jamMenit="true" name="pa_jam_selesai" type="text" placeholder="hh:mm" >
						</div>
					</div>

					<div class="form-group">
						<label><strong>Skala Acara</strong></label>
						<select class="form-control" id="pa_skala" name="pa_skala" >
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
            <button type="button" class="btn btn-primary" id="btn_submit_modal_pa">Simpan</span></button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_peserta" tabindex="-1" role="dialog" aria-labelledby="modal_group_label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Data Peserta PA <span id="modal_pa_peserta_label"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_pa_peserta">
          <div class="modal-body">
          		<input type="hidden" name="acara_id" id="acara_id_peserta">
				<div class="form-group">
					<label><strong>Tuan Rumah</strong></label>
					<select class="form-control" multiple="multiple" id="pa_tuan_rumah" name="pa_tuan_rumah[]" >
						<option></option>
					</select>
				</div>
				<div class="form-group">
					<label><strong>Peserta</strong></label>
					<select class="form-control" id="pa_peserta" multiple="multiple" name="pa_peserta[]" >
					</select>
				</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn_submit_modal_peserta">Simpan</span></button>
          </div>
          </form>
        </div>
      </div>
    </div>
@endsection


@section('footcode')
	<script type="text/javascript">    
	  var Page = function () {
  			var tableInit = function(){                     
			        var table = $('#data-pa').DataTable({
			                    processing: true,
			                    serverSide: true,
			                    dom: '<f<t>ip>',
			                    ajax: { 
			                        'url'  :"{{url('/')}}/app/datatable_pa", 
			                        'type' :'POST',
			                        'data' : { _token: "{{csrf_token()}}", status : $('#status').val(),sku:$('#sku').val() },
			                        },
			                    aoColumns: [
			                        {mData: "tanggal_mulai"},
			                        {mData: "tema"},
			                        {mData: "id"},
			                        {mData: "pendamping"},
			                        {
			                        	mRender: function(data,type,obj){
			                        		let e = "<span class='btn btn-warning btn-sm btn_update_pa' data-id='"+obj.id_agenda+"' data-id_pa ='"+obj.id+"'><i class='fa fa-edit'></i></span>";
			                        		if(obj.id != null){
			                        			e += "<span style='margin-left:2px;' class='btn btn-info btn-sm btn_peserta' data-nama='"+obj.nama+"' data-id='"+obj.id_agenda+"'><i class='fa fa-group'></i></span>";
			                        			
			                        		}
			                        		return e;
			                        	}
			                    	},

			                       ],
			                    fnRowCallback: function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
			                        $(nRow).addClass('r_anggota');
			                        $(nRow).attr('data-id',aData['id']);
			                    } 
			                });  
			    };  

	      return {
	          init: function() { 
	          		tableInit();
	          		$(document).on("click","#btn_add",function(){
	          			$("#acara_id").val('');
	          			$("#pa_id").val('');
	          			$("#modal_pa_label").text('Tambahkan');
	          			$("#btn_delete_pa").addClass('hidden');
	          			$('#modal_pa').modal('show');
	          		});

	          		$(document).on("click",".btn_update_pa",function(){
	          			$("#modal_pa_label").text('Edit');
	          			$("#btn_delete_pa").removeClass('hidden');
	          			$("#acara_id").val($(this).data('id'));
	          			$("#pa_id").val($(this).data('id_pa'));
	          			let id = $(this).data('id');
						$.ajax({
		                    url: "{{url('/')}}/app/get_pa",
		                    type:'POST',
		                    data:  {id:id, _token : "{{csrf_token()}}"} ,
		                    dataType : "json",
		                    success:function(result){
		                    	$('#pa_id').val(result.id);
		                    	$('#acara_id').val(result.id_acara);
		                    	
		                    	$('#pa_nama').val(result.nama);
		                    	$('#pa_tema').val(result.tema);
		                    	$('#pa_ayat').val(result.ayat);
		                    	$('#pa_pendamping').val(result.pendamping);
		                    	$('#pa_lokasi').val(result.lokasi);
		                    	$('#pa_deskripsi').val(result.deskripsi);
		                    	$('#pa_tanggal_mulai').val(result.tanggal_mulai);
		                    	$('#pa_jam_mulai').val(result.jam_mulai);
		                    	$('#pa_tanggal_selesai').val(result.tanggal_selesai);
		                    	$('#pa_jam_selesai').val(result.jam_selesai);
		                    	$('#pa_skala').val(result.skala).trigger('change');
		                    }
				        });


	          			$('#modal_pa').modal('show');
	          		});

	          		$(document).on("click","#btn_submit_modal_pa",function(e){
	          			e.stopImmediatePropagation();
						if($('#form_pa').valid()){

								var dataForm  = $('#form_pa').serialize();
								dataForm = dataForm+"&_token={{csrf_token()}}"; 
								var url = "{{url('/')}}/app/update_pa";
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

	          		$(document).on("click",".btn_peserta",function(){
	          			$("#acara_id_peserta").val($(this).data('id'));
	          			$("#modal_pa_peserta_label").text($(this).data('nama'));
	          			$.ajax({
		                    url: "{{url('/')}}/app/get-peserta-pa",
		                    type:'POST',
		                    data:  {id: $(this).data('id'), _token : "{{csrf_token()}}"} ,
		                    dataType : "json",
		                    success:function(result){
		                    	if(result.tuan_rumah[0] != null){
		                    		let e = "";
		                    		result.tuan_rumah.forEach(function(value,index) {
										   e += "<option value='"+value.id_anggota+"' selected>"+value.nama_anggota+"</option>";
									});
									$("#pa_tuan_rumah").append(e);
		                    	}

		                    	if(result.peserta[0] != null){
		                    		let e = "";
		                    		result.peserta.forEach(function(value,index) {
										   e += "<option value='"+value.id_anggota+"' selected>"+value.nama_anggota+"</option>";
									});
									$("#pa_peserta").append(e);	
		                    	}
		                    }
				        });

	          			$('#modal_peserta').modal('show');
	          		});

	          		$("#pa_peserta").select2({
			                placeholder: "Pilih Anggota",
			                width: 'resolve',
			                allowClear : true,
			                ajax: {
			                    type: 'POST',
			                    url:"{{url('/')}}/json/select2-anggota",
			                    dataType: "json",
			                    data: function (params) {
			                        return {
			                            q: params.term,
			                            _token : "{{csrf_token()}}"
			                        };
			                    },
			                    processResults: function (data) {
			                        return {
			                            results: $.map(data, function(obj) {
			                                return { id: obj.id, text: obj.nama};
			                            })
			                        };
			                    },
			                    
			                }
			        }); 

			        $("#pa_tuan_rumah").select2({
			                placeholder: "Pilih Anggota",
			                width: 'resolve',
			                allowClear : true,
			                ajax: {
			                    type: 'POST',
			                    url:"{{url('/')}}/json/select2-anggota",
			                    dataType: "json",
			                    data: function (params) {
			                        return {
			                            q: params.term,
			                            _token : "{{csrf_token()}}"
			                        };
			                    },
			                    processResults: function (data) {
			                        return {
			                            results: $.map(data, function(obj) {
			                                return { id: obj.id, text: obj.nama};
			                            })
			                        };
			                    },
			                    
			                }
			        });


			        $(document).on("click","#btn_submit_modal_peserta",function(e){
	          			e.stopImmediatePropagation();
						if($('#form_pa_peserta').valid()){

								var dataForm  = $('#form_pa_peserta').serialize();
								dataForm = dataForm+"&_token={{csrf_token()}}"; 
								var url = "{{url('/')}}/app/update-peserta-pa";
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
				}
	      };

	  }();

	  jQuery(document).ready(function() {
	      Page.init();
	  });  
	</script>
	<style type="text/css">
	</style>
@endsection