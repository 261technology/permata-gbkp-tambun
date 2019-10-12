@extends('template.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h4>Data Anggota</h4>
    </div>
    <div class="card-body">
      <form id="form_update" method="post" action="{{url('/')}}/app/anggota/update-process">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    @csrf
                                    <input type="hidden" name="id_anggota" name="id_anggota" value="{{$anggota['id']}}">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="{{$anggota['email']}}" readOnly>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Lengkap" value="{{$anggota['nama']}}"  required="true">
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
                                            <option value="Laki-laki" <?= $anggota['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '';  ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= $anggota['jenis_kelamin'] == 'Perempuan' ? 'selected' : '';  ?>>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                         <input type="text" name="tempat_lahir" id="tempat_lahir"class="form-control" placeholder="Tempat Lahir" value="{{$anggota['tempat_lahir']}}" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control date-picker date-picker-normal" readOnly required="true" value="{{$anggota['tanggal_lahir']}}" placeholder="klik untuk menambahkan tanggal">
                                    </div>

                                    <div class="form-group">
                                        <label>Sekolah Terakhir / Saat ini</label>
                                        <input type="text" name="sekolah" id="sekolah" placeholder="Nama sekolah terakhir / saat ini" class="form-control" value="{{$anggota['sekolah']}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tingkat Pendidikan Terakhir / Saat ini</label>
                                        <select id="pendidikan" name="pendidikan" class="form-control" required>
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
                                        <input type="text" name="jurusan" id="jurusan" class="form-control" required="true" required placeholder="Cth. : IPA , IPS , Mesin , Otomotif , TKJ , Hukum , Manajemen, dll." value="{{$anggota['jurusan']}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Silahkan tuliskan hobi kamu" value="{{$anggota['hobi']}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select id="pekerjaan" name="pekerjaan" class="form-control" required="true">
                                              <option <?= empty($anggota['pekerjaan']) ? 'selected' : ''; ?> disabled=>Pilih Pekerjaan</option>
                                              @foreach($pekerjaan as $key => $value )
                                              <option
                                               value="{{$value->id}}" <?= $anggota['pekerjaan'] == $value->id ? 'selected' : ''; ?>>{{$value->nama}}</option>
                                              @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kantor</label>
                                        <input type="text" name="kantor" id="kantor" placeholder="Kosongkan belum bila bukan pegawai" class="form-control" value="{{$anggota['perusahaan']}}">
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
                                          <label>Domisili</label>
                                          <input type="text" name="domisili" id="domisili" placeholder="domisili tinggal" class="form-control" required="true" placeholder="Domisili Tinggal Saat ini Cth.: Bekasi / Jakarta / Medan dll." value="{{$anggota['domisili']}}">
                                      </div>

                                      <div class="form-group">
                                        <label>Tahun Ngawan</label>
                                        <input type="number" name="tahun_ngawan" id="tahun_ngawan" class="form-control" required placeholder="Tahun Ngawan / Sidi" value="{{$anggota['tahun_ngawan']}}">
                                      </div>

                                      <div class="form-group">
                                        <label>Lokasi Ngawan</label>
                                        <input type="text" name="lokasi_ngawan" id="lokasi_ngawan" class="form-control" required placeholder="Greja Ngawan / Sidi" value="{{$anggota['lokasi_ngawan']}}">
                                      </div>

                                      <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{$anggota['instagram']}}" placeholder="@id_instagram">
                                      </div>

                                      <div class="form-group">
                                        <label>Sektor</label>
                                        <select id="sektor" name="sektor" class="form-control" required>
                                            <option disabled>Pilih Sektor</option>
                                            @foreach($sektor as $key => $value )
                                            <option
                                             value="{{$value->id}}"
                                             <?=  $anggota['sektor'] == $value->id ? 'Selected' : ''; ?> >{{$value->nama}}</option>
                                            @endforeach
                                        </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <textarea rows="5" class="form-control" id="alamat" name="alamat" required="true" placeholder="Alamat lengkap tempat tinggal (sesuai kartu identitas KTP/SIM/Kartu Pelajar)" >{{$anggota['alamat']}}</textarea>
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
           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>
@endsection