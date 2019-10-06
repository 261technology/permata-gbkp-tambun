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
          <div class="row">
                <div class="col-sm-4">
                    <h4 class="card-title mb-0">Pengeluaran Kas</h4>
                    <div class="small text-muted">Permata GBKP Runggun Tambun</div>
                </div>    
                 <div class="col-sm-8 text-right">
                    <button id="tambah_iuran" class="btn btn-success btn-md"  type="button" 
                    data-toggle="modal" data-target="#modal_pengeluaran" style="margin-bottom: 5px">
                      <i class="fa fa-plus"></i>
                      <span>Tambah Pengeluaran</span>
                </div>
            </div>
      </div>
      <div class="card-body">
          <div class="row">
                            <div class="col-md-12">
                              <table id="data-kas" class="table table-striped table-responsive" style="width: 100%;">
                                  <thead>
                                      <tr>
                                            <th width="10%">Tanggal</th>
                                            <th width="15%">Nominal</th>
                                            <th width="40%">Keterangan</th>
                                            <th width="5%"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                              </table>   
                            </div>
                </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal Tambah Pengeluaran Kas-->
<div class="modal fade" id="modal_pengeluaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modal-title-pengeluaran">Tambah Catatan Pengeluaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <form id="form_pengeluaran" action="" method="POST">
                <div class="form-group">
                    <label>Nominal</label>
                    <input type="hidden" name="pengeluaran_id" id="pengeluaran_id">
                    <input type="text" name="pengeluaran_nominal" id="pengeluaran_nominal" class="form-control rupiah" required="required"/>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="pengeluaran_tanggal" id="pengeluaran_tanggal" required class="form-control date-picker" readonly>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea id="pengeluaran_keterangan" name="pengeluaran_keterangan" class="form-control" rows="4"></textarea>
                </div>
              
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger btn-sm col-md-offset-4 col-md-2" data-dismiss="modal">Batal</button>
                    <button type="button" id="simpan_pengeluaran" class="btn btn-success btn-sm col-md-2">Simpan</button>
                </div>
            </form>
      </div>
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
                    ajax: { 
                        'url'  : base_url+"datatable-pengeluaran-kas", 
                        'type' :'POST',
                        'data' : { _token: "{{csrf_token()}}", tahun : $('#filter_tahun_iuran_kas').val(), sektor : $('#filter_sektor_iuran_kas').val() },
                        },
                    aoColumns: [
                        {mData: "tanggal"},
                        {mRender: function(data,type,obj){
                            return "<span class='rp'>"+obj.nominal+"</span>";
                          }
                        },
                        {mData: "keterangan"},
                        {
                          'mRender' : function(data,type,obj){
                            return "<button class='btn btn-xs btn-danger btn_pengeluaran' data-id='"+obj.id+"'><i class='fa fa-trash'></i></button>";
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
             $('#data-kas').on( 'draw.dt', function () {
                $('.rp').priceFormat({
                      prefix: 'Rp. ',
                      centsSeparator: ',', 
                      thousandsSeparator: '.',
                      centsLimit: 0
                  });
              });

             $(document).on("click","#simpan_pengeluaran",function(e){
                e.preventDefault();
                if($('#form_pengeluaran').valid()){
                      let pengeluaran_nominal = $('#pengeluaran_nominal').unmask();
                      $.ajax({
                          url: base_url+"keuangan/update-pengeluaran",
                          method: 'post',
                          data:{
                            _token : "{{csrf_token()}}", 
                            nominal : pengeluaran_nominal, 
                            tanggal : $('#pengeluaran_tanggal').val(),  
                            keterangan : $('#pengeluaran_keterangan').val(),  
                            id : $('#pengeluaran_id').val()
                          },
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

            $(document).on("click",".btn_pengeluaran",function(){
                let id_iuran = $(this).data('id');
                bootbox.confirm({
                    message: "Hapus pengeluaran kas ini?",
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
                                  url: base_url+'keuangan/delete-pengeluaran',
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
    }
             

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>

<style type="text/css">
    .table>tbody>tr>td {cursor: pointer;}

    .field_kantin[readonly]{
      background-color: #fff;
      border: 0px;
      border-bottom : 2px solid #a2a2a2;
      margin-top: -10px;
    }

    .select2-container--default.select2-container--disabled .select2-selection--multiple{
      border : 0px;
    }
</style>
@endsection