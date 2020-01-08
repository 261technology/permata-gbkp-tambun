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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="card-title mb-0">Daftar Anggota Permata</h4>
                                    <div class="small text-muted">GBKP Runggun Tambun</div>
                                </div>
            
                                <div class="col-sm-8" style="margin-bottom: 15px;">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select id="status" class="form-control">
                                                            <option value="0">Semua</option>
                                                            <option value="aktif">Aktif</option>
                                                            <option value="Luar Biasa">Luar Biasa</option>
                                                            <option value="Normal">Normal</option>
                                                            <option value="pasfi">Pasif</option>
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="sektor">Sektor</label>
                                                        <select id="sektor" class="form-control">
                                                            <option value="x">Semua</option>
                                                            @foreach($sektor as $key => $value )
                                                            <option value="{{$value->id}}">{{$value->nama}}</option>
                                                            @endforeach;
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="marga">Marga</label>
                                                        <select id="marga" class="form-control">
                                                            <option value="x">Semua</option>
                                                            @foreach($marga as $key => $value )
                                                            <option value="{{$value->id}}">{{$value->nama}}</option>
                                                            @endforeach;
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <select id="pekerjaan" class="form-control">
                                                            <option value="x">Semua</option>
                                                            @foreach($marga as $key => $value )
                                                            <option value="{{$value->id}}">{{$value->nama}}</option>
                                                            @endforeach;
                                                        </select>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <table id="data-anggota" class="table table-responsive-sm table-bordered table-striped table-md" style="width: 100%;">
                                        <thead>
                                            <th style="width:40%">NAMA</th>
                                            <th style="width:15%">SEKTOR</th>
                                            <th style="width:15%">TELEPON</th>
                                            <th style="width:10%">STATUS</th>
                                            <th style="width:10%">STATUS</th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
            
            
                        </div>
                
            
                        <div class="card-footer">
                                <button class="btn btn-brand btn-info float-left" type="button" style="margin-bottom: 4px">
                                    <i class="fa fa-download"></i>
                                    <span>Download excel</span>
                                </button>

                                <a href="{{url('/application/anggota/upload')}}" style="margin-left:5px;" class="btn btn-brand btn-success float-right" type="button" style="margin-bottom: 4px">
                                    <i class="fa fa-plus"></i>
                                    <span>Upload Excel</span>
                                </a>

                                <button class="btn btn-brand btn-success float-right" type="button" style="margin-bottom: 4px">
                                    <i class="fa fa-plus"></i>
                                    <span>Tambah Anggota</span>
                                </button>
                        </div>
            
                    </div>
        </div>
    </div>
@endsection


@section('footcode')
<script type="text/javascript">    
  var Page = function () {

    var tableInit = function(){                     
        var table = $('#data-anggota').DataTable({
                    language: {
                        searchPlaceholder: "Cari dengan nama"
                    },
                    processing: true,
                    serverSide: true,
                    dom: '<f<t>ip>',
                    ajax: { 
                        'url'  :"{{url('/')}}/application/datatable_anggota", 
                        'type' :'POST',
                        'data' : { _token: "{{csrf_token()}}", status : $('#status').val(),sku:$('#sku').val() },
                        },
                    aoColumns: [
                        {mData: "nama"},
                        {mData: "nama_sektor"},
                        {mData: "telepon"},
                        {mData: "status"},
                        {
                            mRender : function(data,type,obj){
                                return "<a class='btn btn-info btn-sm' href='"+base_url+"anggota/profile/"+obj.uuid+"' ><i class='fa fa-eye'></i></a><a style='margin-left:5px;' class='btn btn-warning btn-sm btn-edit' href='"+base_url+"anggota/edit/"+obj.uuid+"' ><i class='fa fa-edit'></i></a>"
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
             $(document).on('change','.filter_data_anggota', function (e) {
                e.stopImmediatePropagation();
                $('#data-anggota').dataTable().fnDestroy();
                tableInit();
                });
           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>
<style type="text/css">
    .table>tbody>tr>td {cursor: pointer;}
</style>
@endsection