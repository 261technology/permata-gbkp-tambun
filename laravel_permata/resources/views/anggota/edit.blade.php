@extends('template.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h4>Data Anggota</h4>
    </div>
    <div class="card-body">
      <form id="form_update" method="post" action="{{url('/')}}/application/anggota/update-process">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    @csrf
                                    <input type="hidden" name="id_anggota" name="id_anggota" value="{{$anggota['uuid']}}">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{$anggota['email']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Depan</label>
                                        <input class="form-control" id="nama_depan" name="nama_depan" type="text" placeholder="Nama Depan" value="{{$anggota['nama_depan']}}"  required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Belakang</label>
                                        <input class="form-control" id="nama_belakang" name="nama_belakang" type="text" placeholder="Nama Lengkap" value="{{$anggota['nama_belakang']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Marga</label>
                                        <select id="marga" name="marga" class="form-control" required="true">
                                            <option selected disabled>Pilih Marga</option>
                                            @foreach($marga as $key => $value )
                                            <option value="{{$value->id}}" 
                                              <?= $anggota['marga'] == $value->id ? 'selected' : '';  ?> >{{$value->nama}}</option>
                                            @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select id="jenis_kelamin"  name="jenis_kelamin" class="form-control">
                                            <option value="L" <?= $anggota['jenis_kelamin'] == 'L' ? 'selected' : '';  ?>>Laki-laki</option>
                                            <option value="P" <?= $anggota['jenis_kelamin'] == 'P' ? 'selected' : '';  ?>>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                         <input type="text" name="tempat_lahir" id="tempat_lahir"class="form-control" placeholder="Tempat Lahir" value="{{$anggota['tempat_lahir']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control date-picker date-picker-normal" readOnly value="{{$anggota['tanggal_lahir']}}" placeholder="klik untuk menambahkan tanggal">
                                    </div>

                                    <div class="form-group">
                                        <label>Sekolah Terakhir / Saat ini</label>
                                        <input type="text" name="sekolah" id="sekolah" placeholder="Nama sekolah terakhir / saat ini" class="form-control" value="{{$anggota['sekolah']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Tingkat Pendidikan Terakhir / Saat ini</label>
                                        <select id="pendidikan" name="pendidikan" class="form-control">
                                            <option  disabled>Pilih Tingkat Pendidikan</option>
                                            @foreach($pendidikan as $key => $value )
                                            <option
                                             value="{{$value->id}}" 
                                             <?= $anggota['pendidikan'] == $value->id ? 'Selected' : ''; ?> >{{$value->nama}}</option>
                                            @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jurusan Pendidikan</label>
                                        <input type="text" name="jurusan" id="jurusan" class="form-control"  placeholder="Cth. : IPA , IPS , Mesin , Otomotif , TKJ , Hukum , Manajemen, dll." value="{{$anggota['jurusan']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select id="pekerjaan" name="pekerjaan" class="form-control">
                                              <option <?= empty($anggota['pekerjaan']) ? 'selected' : ''; ?> disabled=>Pilih Pekerjaan</option>
                                              @foreach($pekerjaan as $key => $value )
                                              <option
                                               value="{{$value->id}}" <?= $anggota['pekerjaan'] == $value->id ? 'selected' : ''; ?>>{{$value->nama}}</option>
                                              @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kantor</label>
                                        <input type="text" name="kantor" id="kantor" placeholder="Kosongkan bila bukan pegawai" class="form-control" value="{{$anggota['perusahaan']}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Silahkan tuliskan hobi kamu" value="{{$anggota['hobi']}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                      <div class="form-group">
                                        <label>Tahun Ngawan</label>
                                        <input type="number" name="tahun_ngawan" id="tahun_ngawan" class="form-control" placeholder="Tahun Ngawan / Sidi" value="{{$anggota['tahun_ngawan']}}">
                                      </div>

                                      <div class="form-group">
                                        <label>Runggun Ngawan</label>
                                        <input type="text" name="lokasi_ngawan" id="lokasi_ngawan" class="form-control"  placeholder="Greja Ngawan / Sidi" value="{{$anggota['runggun_ngawan']}}">
                                      </div>

                                      <div class="form-group">
                                        <label>Telepon</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              +62
                                            </span>
                                          </div>
                                            <input class="form-control" id="telepon" type="number" name="telepon" placeholder="Telepon" value="{{$anggota['telepon']}}">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{$anggota['instagram']}}" placeholder="@id_instagram">
                                      </div>

                                      <div class="form-group">
                                        <label>Sektor</label>
                                        <select id="sektor" name="sektor" class="form-control">
                                            <option value="">Pilih Sektor</option>
                                            @foreach($sektor as $key => $value )
                                            <option
                                             value="{{$value->id}}"
                                             <?=  $anggota['sektor'] == $value->id ? 'Selected' : ''; ?> >{{$value->nama}}</option>
                                            @endforeach
                                        </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <textarea rows="5" class="form-control" id="alamat" name="alamat" placeholder="Alamat lengkap tempat tinggal (sesuai kartu identitas KTP/SIM/Kartu Pelajar)" >{{$anggota['alamat']}}</textarea>
                                      </div>

                                      <div class="form-group">
                                          <label>Provinsi</label>
                                          <select class="form-control" name="domisili_provinsi" id="domisili_provinsi">
                                              <option value="<?= $anggota['domisili_provinsi'] ?>"><?= $anggota['provinsi'] ?></option>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Kabupaten</label>
                                          <select class="form-control" name="domisili_kabupaten" id="domisili_kabupaten" disabled>
                                            <option value="<?= $anggota['domisili_kota'] ?>"><?= $anggota['kota'] ?></option>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Kecamatan</label>
                                          <select class="form-control" name="domisili_kecamatan" id="domisili_kecamatan" disabled>
                                            <option value="<?= $anggota['domisili_kecamatan'] ?>"><?= $anggota['kecamatan'] ?></option>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Tinggal Bersama Orang Tua?</label>
                                          <select class="form-control" name="dengan_orang_tua" id="dengan_orang_tua">
                                            <option value="1" <?= $anggota['dengan_orang_tua'] == "1" ? 'selected' : '' ?>>YA</option>
                                            <option value="0" <?= $anggota['dengan_orang_tua'] == "0" ? 'selected' : '' ?>>TIDAK</option>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Status</label>
                                          <select class="form-control" name="status" id="status">
                                            <option value="TERDAFTAR" <?= $anggota['status'] == "TERDAFTAR" ? 'selected' : '' ?>>TERDAFTAR</option>
                                            <option value="TIDAK AKTIF" <?= $anggota['status'] == "TIDAK AKTIF" ? 'selected' : '' ?>>TIDAK AKTIF</option>
                                            <option value="AKTIF" <?= $anggota['status'] == "AKTIF" ? 'selected' : '' ?>>AKTIF</option>
                                            
                                          </select>
                                      </div>

                                </div>
                            </div>
                          <div class="row">
                              <div class="col-md-12 text-center">
                                  <button class="btn btn-success btn-login px-4" type="button" id="btn_update">Update</button>
                              </div>
                          </div>
                          </form>
    </div>
  </div>
@endsection


@section('footcode')
<style type="text/css">
  .form-control:disabled, .form-control[readonly], .form-control[readonly].date-picker.date-picker-blue{
    background-color: #4169df !important;
    color: #fff;
  }
</style>
<script type="text/javascript">    
var Page = function () {

     

      return {
          init: function() { 
             $('.datepicker').datepicker({
                  format: 'yyyy-mm-dd',
              });

             $(document).on("click","#btn_update", function(e){
                  e.preventDefault();
                  if($("#form_update").valid()){
                      $("#form_update").submit();
                  }
              });

              $("#domisili_provinsi").select2({
                      placeholder: "Pilih Provinsi",
                      width: 'resolve',
                      // allowClear : true,
                      ajax: {
                          type: 'GET',
                          delay: 200,
                          url:"{{url('/')}}/api/v1/get-provinsi",
                          dataType: "json",
                          data: function (params) {
                              return {
                                  q: params.term,
                                  page: params.page,
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
              $(document).on("change","#domisili_provinsi", function(e){
                    $("#domisili_kabupaten").removeAttr("disabled");
              });



              $("#domisili_kabupaten").select2({
                  placeholder: "Pilih Kabupaten",
                  width: 'resolve',
                  allowClear : true,
                  ajax: {
                      type: 'GET',
                      delay: 200,
                      url:"{{url('/')}}/api/v1/get-kabupaten",
                      dataType: "json",
                      data: function (params) {
                          return {
                              q: params.term,
                              page: params.page,
                              provinsi : $("#domisili_provinsi").val()
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
              $(document).on("change","#domisili_kabupaten", function(e){
                    $("#domisili_kecamatan").removeAttr("disabled");
              }); 

              $("#domisili_kecamatan").select2({
                  placeholder: "Pilih Kecamatan",
                  width: 'resolve',
                  allowClear : true,
                  ajax: {
                      type: 'GET',
                      delay: 200,
                      url:"{{url('/')}}/api/v1/get-kecamatan",
                      dataType: "json",
                      data: function (params) {
                          return {
                              q: params.term,
                              page: params.page,
                              kabupaten : $("#domisili_kabupaten").val()
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


           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>
@endsection