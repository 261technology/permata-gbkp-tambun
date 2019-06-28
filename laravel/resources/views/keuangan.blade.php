@extends('template.master')

@section('assets')
<!-- Datatable -->
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kas" role="tab" aria-controls="kas">Kas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kantin" role="tab" aria-controls="kantin">Kantin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#janji" role="tab" aria-controls="janji">Janji Iman</a>
                </li>
            </ul>
            <div class="tab-content">
            <div class="tab-pane active" id="kas" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="card-title mb-0">Keuangan Kas</h4>
                        <div class="small text-muted">GBKP Runggun Tambun</div>
                    </div>    
                     <div class="col-sm-8" style="margin-bottom: 15px;">
                        <div class="row">
                            <div class="offset-md-4 col-md-4">
                                    <div class="form-group">
                                            <select id="sektor" class="form-control">
                                                <option value="x">Semua Sektor</option>
                                                @foreach($sektor as $key => $value )
                                                <option value="{{$value->id}}">{{$value->nama}}</option>
                                                @endforeach;
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                             <select id="tahun" class="form-control">
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                            <div class="col-md-12">
                              <label><h6 class="text-muted">Pemasukan kas anggota</h6></label>
                              <table id="data-kas" class="table table-striped" style="width: 100%;">
                                  <thead>
                                      <tr>
                                            <th>Nama</th>
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>   
                            </div>
                        </div>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel">2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div class="tab-pane" id="messages" role="tabpanel">3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            </div>
    </div>
@endsection


@section('footcode')
<script type="text/javascript">    
  var Page = function () {
      var tableKasInit = function(){                     
        var tableKas = $('#data-kas').DataTable({
                    language: {
                        searchPlaceholder: "Cari dengan nama"
                    },
                    processing: true,
                    serverSide: true,
                    dom: '<f<t>ip>',
                    ajax: { 
                        'url'  :"{{url('/')}}/app/datatable_pemasukan_kas", 
                        'type' :'POST',
                        'data' : { _token: "{{csrf_token()}}", status : $('#status').val(),sku:$('#sku').val() },
                        },
                    aoColumns: [
                        {mData: "nama"},
                        {mData: "sektor"},
                        {mData: "telepon"},
                        {mData: "status"},

                       ],
                    fnRowCallback: function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                        $(nRow).addClass('r_anggota');
                        $(nRow).attr('data-id',aData['id']);
                    } 
                });  
    }; 

      return {
          init: function() {
             tableKasInit(); 
             $(document).on('change','.filter_data_anggota', function (e) {
                e.stopImmediatePropagation();
                $('#data-kas').dataTable().fnDestroy();
                tableInit();
                });
             $(document).on("click",".r_anggota",function(){
                window.location = "{{url('/')}}/app/anggota/detail/"+$(this).data('id');
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