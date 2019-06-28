@extends('template.master')

@section('content')
  <div class="card">
    <div class="card-header">
      <h4>Data Anggota</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6"> 
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" class="form-control anggota_field" value="{{$data['nama']}}">
          </div>

          <div class="form-group">
            <label>Marga</label>
            <select id="marga" name="marga" class="form-control">
                <option value="x">Semua</option>
                @foreach($marga as $key => $value )
                <option {{$value->id == $data['marga'] ? 'selected' : ''}} value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach;
            </select>
          </div>

          <div class="form-group">
            <label>Marga</label>
            <select id="jenis_kelamin"  name="jenis_kelamin" class="form-control">
                <option {{"Laki-laki" == $data['jenis_kelamin'] ? 'selected' : ''}}  value="Laki-laki">Laki-laki</option>
                <option {{"Perempuan" == $data['jenis_kelamin'] ? 'selected' : ''}}  value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tanggal_lahir" value="{{$data['tempat_lahir']}}" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tempat_lahir" id="tanggal_lahir" value="{{$data['tanggal_lahir']}}" class="form-control datepicker">
          </div>

          <div class="form-group">
            <label>Sekolah Terakhir</label>
            <input type="text" name="sekolah" id="sekolah" value="{{$data['sekolah']}}" class="form-control" >
          </div>

          <div class="form-group">
            <label>Pendidikan</label>
            <select id="pendidikan" name="pendidikan" class="form-control">
                @foreach($pendidikan as $key => $value )
                <option {{$value->id == $data['pendidikan'] ? 'selected' : ''}}
                 value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach;
            </select>
          </div>

          <div class="form-group">
            <label>Jurusan Pendidikan</label>
            <input type="text" name="jurusan" id="jurusan" value={{$data['jurusan']}} class="form-control">
          </div>

           <div class="form-group">
            <label>Pekerjaan</label>
            <select id="pekerjaan" name="pekerjaan" class="form-control">
                  @foreach($pekerjaan as $key => $value )
                  <option {{$value->id == $data['pekerjaan'] ? 'selected' : ''}}
                   value="{{$value->id}}">{{$value->nama}}</option>
                  @endforeach;
              </select>
          </div>
        </div>

        <div class="col-md-6">

          <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" id="email" value="{{$data['email']}}" class="form-control" readOnly>
          </div>

          <div class="form-group">
            <label>Telepon</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  +62
                </span>
              </div>
                <input class="form-control" id="telepon" type="text" name="telepon" placeholder="Telepon" value="{{$data['telepon']}}">
            </div>
          </div>


          <div class="form-group">
              <label>Domisili</label>
              <input type="text" name="domisili" id="domisili" value="{{$data['domisili']}}" placeholder="domisili tinggal" class="form-control">
          </div>

          <div class="form-group">
              <label>Alamat</label>
              <textarea rows="5" class="form-control" id="alamat" name="alamat">{{$data['alamat']}}</textarea>
          </div>

          <div class="form-group">
            <label>Tahun Ngawan</label>
            <input type="number" name="tahun_ngawan" id="tahun_ngawan" class="form-control" value="{{$data['tahun_ngawan']}}">
          </div>

          <div class="form-group">
            <label>Lokasi Ngawan</label>
            <input type="text" name="lokasi_ngawan" id="lokasi_ngawan" class="form-control" value="{{$data['lokasi_ngawan']}}">
          </div>

          <div class="form-group">
            <label>Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control" value="{{$data['instagram']}}">
          </div>

          <div class="form-group">
            <label>Sektor</label>
            <select id="sektor" name="sektor" class="form-control">
                @foreach($sektor as $key => $value )
                <option {{$value->id == $data['sektor'] ? 'selected' : ''}}
                 value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach;
            </select>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection


@section('footcode')
<script type="text/javascript">    
  var Page = function () {

     

      return {
          init: function() { 
             $('.datepicker').datepicker({
                  format: 'yyyy-mm-dd',
              });
           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>


<style type="text/css">
  .form-control:disabled, .form-control[readonly]{
    background: #f1f1f1 !important;
  }
</style>
@endsection