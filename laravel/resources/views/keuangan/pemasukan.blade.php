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
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#iuran_kas" role="tab" aria-controls="iuran_kas">Iuran Kas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kantin" role="tab" aria-controls="kantin">Kantin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#janji" role="tab" aria-controls="janji">Janji Iman</a>
                </li>
            </ul>
            <div class="tab-content">
            <div class="tab-pane active" id="iuran_kas" role="tabpanel">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="card-title mb-0">Keuangan Kas</h4>
                        <div class="small text-muted">GBKP Runggun Tambun</div>
                    </div>    
                     <div class="col-sm-8" style="margin-bottom: 15px;">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                            <select id="filter_sektor_iuran_kas" class="form-control filter_iuran_kas">
                                                <option value="">Semua Sektor</option>
                                                @foreach($sektor as $key => $value )
                                                <option value="{{$value->id}}">{{$value->nama}}</option>
                                                @endforeach;
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                             <select id="filter_tahun_iuran_kas" class="form-control filter_iuran_kas">
                                                <option value="{{date('Y')}}">{{ date('Y')}}</option>
                                                <option value="{{date('Y')-1}}">{{ date('Y')-1}}</option>
                                            </select>
                                        </div>
                            </div>

                            <div class="col-md-4 text-right">
                                <button id="tambah_iuran" class="btn btn-success btn-md"  type="button" 
                                data-toggle="modal" data-target="#modal_tambah_iuran_kas" style="margin-bottom: 5px">
                                  <i class="fa fa-plus"></i>
                                  <span>Catat Pembayaran</span>
                              </button>
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
                                            <th width="40%">Nama</th>
                                            <th width="15%">Nominal</th>
                                            <th width="10%">Kategori</th>
                                            <th width="15%">Tanggal</th>
                                            <th width="15%">Keterangan</th>
                                            <th width="5%"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>   
                            </div>
                        </div>
            </div>

            <div class="tab-pane" id="kantin" role="tabpanel">2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div class="tab-pane" id="janji" role="tabpanel">3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
            </div>
    </div>


<!-- MODAL -->

<!-- Modal Tambah Iuran Kas-->
<div class="modal fade" id="modal_tambah_iuran_kas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Catatan Iuran Kas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <form id="form_iuran_kas" action="" method="POST">
                <div class="form-group">
                    <label>Nama Anggota</label>
                      <select name="iuran_nama" id="iuran_nama" class="form-control" required="required" style="width:100%;">
                    </select>
                </div>
                <div class="form-group">
                    <label>Nominal</label>
                    <input type="text" name="iuran_nominal" id="iuran_nominal" class="form-control rupiah" required="required"/>
                </div>

                <div class="form-group">
                    <label>Kas Untuk Tahun</label>
                    <select id="iuran_tahun" class="form-control">
                        <option value="{{date('Y')}}">{{ date('Y')}}</option>
                        <option value="{{date('Y')-1}}">{{ date('Y')-1}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pembayaran</label>
                    <input type="text" name="iuran_tanggal_pembayaran" id="iuran_tanggal_pembayaran" required class="form-control date-picker" readonly>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea id="iuran_keterangan" name="iuran_keterangan" class="form-control" rows="4"></textarea>
                </div>
              
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger btn-sm col-md-offset-4 col-md-2" data-dismiss="modal">Batal</button>
                    <button type="button" id="simpan_iuran_kas" class="btn btn-success btn-sm col-md-2">Simpan</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>


@endsection


@section('footcode')


<script type="text/javascript">    
  const iuran_pelajar = {{$param_iuran['iuran_kas_pelajar']}};
  const iuran_pekerja = {{$param_iuran['iuran_kas_pekerja']}};

  var Page = function () {
      var tableKasInit = function(){                     
        var tableKas = $('#data-kas').DataTable({
                    language: {
                        searchPlaceholder: "Cari dengan nama"
                    },
                    processing: true,
                    serverSide: true,
                    ajax: { 
                        'url'  :"{{url('/')}}/app/datatable_iuran_kas", 
                        'type' :'POST',
                        'data' : { _token: "{{csrf_token()}}", tahun : $('#filter_tahun_iuran_kas').val(), sektor : $('#filter_sektor_iuran_kas').val() },
                        },
                    aoColumns: [
                        {mData: "nama"},
                        {
                          'mRender' : function(data,type,obj){
                            return "<span class='rp' >"+obj.nominal+"</span>";
                          }
                        },
                        {mData: "status_pekerja"},
                        {mData: "tanggal_pembayaran"},
                        {mData: "keterangan"},
                        {
                          'mRender' : function(data,type,obj){
                            return "<button class='btn btn-xs btn-danger btn_delete_iuran' data-id='"+obj.id+"'><i class='fa fa-trash'></i></button>";
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
             tableKasInit(); 
             $(document).on('change','.filter_iuran_kas', function (e) {
                e.stopImmediatePropagation();
                $('#data-kas').dataTable().fnDestroy();
                tableKasInit();
                });
             $('#data-kas').on( 'draw.dt', function () {
                $('.rp').priceFormat({
                      prefix: '',
                      centsSeparator: ',', 
                      thousandsSeparator: '.',
                      centsLimit: 0
                  });
              });

              $("#iuran_nama").select2({
                      placeholder: "Pilih Anggota",
                      width: 'resolve',
                      allowClear : true,
                      ajax: {
                          type: 'POST',
                          url:base_url+"/app/json/anggota",
                          dataType: "json",
                          data: function (params) {
                              return {
                                  q: params.term,
                                  _token: "{{csrf_token()}}"
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

             $(document).on("click","#simpan_iuran_kas",function(e){
                e.preventDefault();
                if($('#form_iuran_kas').valid()){
                    let iuran_nominal = $('#iuran_nominal').unmask();
                    $.ajax({
                        url: base_url+"/app/keuangan/add_iuran_kas",
                        method: 'post',
                        data:{_token: "{{csrf_token()}}",anggota : $('#iuran_nama').val(), nominal : iuran_nominal, tanggal_pembayaran : $('#iuran_tanggal_pembayaran').val(), keterangan : $('#iuran_keterangan').val(), tahun : $('#iuran_tahun').val()},
                        dataType : "json",
                        success:function(result){
                                 if(result.data.trim()=='success'){
                                  window.location.reload();
                                }else{
                                  bootbox.alert("Failed!", function(){});
                                  }
                                return result;
                                }
                    });
                  }
             });

             $(document).on("click",".btn_delete_iuran",function(){
                let id_iuran = $(this).data('id');
                bootbox.confirm({
                    message: "Hapus pemasukan kas ini?",
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
                        if(result){
                          $.ajax({
                                  url: base_url+'/app/keuangan/delete_iuran_kas',
                                  method: 'post',
                                  data:{_token: "{{csrf_token()}}",id : id_iuran},
                                  dataType : "json",
                                  success:function(result){
                                   if(result.data.trim()=='success'){
                                    window.location.reload();
                                  }else{
                                    bootbox.alert("Failed!", function(){});
                                    }
                                  return result;
                                  }

                          });
                        }
                    }
                })
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