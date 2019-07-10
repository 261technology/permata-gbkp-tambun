<!DOCTYPE html>

<html lang="en">
<head>
<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Permata</title>

<!-- Icons-->
<link href="{{url('assets/template/coreui')}}/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<link href="{{url('assets/plugin/datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet">

<!-- Main styles for this application-->
<link href="{{url('assets/template/coreui')}}/src/css/style.css" rel="stylesheet">
<link href="{{url('assets/template/coreui')}}/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">

<script src="{{url('assets/template/coreui')}}/node_modules/jquery/dist/jquery.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/pace-progress/pace.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="{{url('assets/template/coreui')}}/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="{{url('assets/plugin/datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- Jquery Validation -->
<script src="{{url('assets/plugin/jquery-validation/dist/jquery.validate.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('assets/plugin/jquery-validation/dist/additional-methods.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('assets/plugin/bootbox.min.js')}}" type="text/javascript" charset="utf-8"></script>

</head>
<body class="app flex-row align-items-center p-2">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card-group">
                  <div class="card">
                      <div class="card-body">
                          <!-- <img src="{{url('/')}}/assets/img/logo_text_permata.png" alt="logo permata" style="width: 150px;margin-bottom: 10px;"> -->
                          <label><strong>Registration</strong></label>
                          <form id="form_register" method="post" action="{{url('/')}}/register_process">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" id="email" name="email" type="email" placeholder="Email" emailUnique="true" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Lengkap" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Marga</label>
                                        <select id="marga" name="marga" class="form-control" required="true">
                                            <option selected disabled>Pilih Marga</option>
                                            @foreach($marga as $key => $value )
                                            <option value="{{$value->id}}">{{$value->nama}}</option>
                                            @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select id="jenis_kelamin"  name="jenis_kelamin" class="form-control">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                         <input type="text" name="tempat_lahir" id="tempat_lahir"class="form-control" placeholder="Tempat Lahir" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control date-picker" readOnly required="true" placeholder="klik untuk menambahkan tanggal">
                                    </div>

                                    <div class="form-group">
                                        <label>Sekolah Terakhir / Saat ini</label>
                                        <input type="text" name="sekolah" id="sekolah" value="" placeholder="Nama sekolah terakhir / saat ini" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tingkat Pendidikan Terakhir / Saat ini</label>
                                        <select id="pendidikan" name="pendidikan" class="form-control" required>
                                            <option selected disabled>Pilih Tingkat Pendidikan</option>
                                            @foreach($pendidikan as $key => $value )
                                            <option
                                             value="{{$value->id}}">{{$value->nama}}</option>
                                            @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jurusan Pendidikan</label>
                                        <input type="text" name="jurusan" id="jurusan" class="form-control" required="true" required placeholder="Cth. : IPA , IPS , Mesin , Otomotif , TKJ , Hukum , Manajemen, dll.">
                                    </div>
                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Silahkan tuliskan hobi kamu">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select id="pekerjaan" name="pekerjaan" class="form-control" required="true">
                                              <option selected disabled=>Pilih Pekerjaan</option>
                                              @foreach($pekerjaan as $key => $value )
                                              <option
                                               value="{{$value->id}}">{{$value->nama}}</option>
                                              @endforeach;
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kantor</label>
                                        <input type="text" name="kantor" id="kantor" placeholder="Kosongkan belum bila bukan pegawai" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              +62
                                            </span>
                                          </div>
                                            <input class="form-control" id="telepon" type="number" name="telepon" placeholder="Telepon" required="true">
                                        </div>
                                      </div>


                                      <div class="form-group">
                                          <label>Domisili</label>
                                          <input type="text" name="domisili" id="domisili" placeholder="domisili tinggal" class="form-control" required="true" placeholder="Domisili Tinggal Saat ini Cth.: Bekasi / Jakarta / Medan dll.">
                                      </div>

                                      <div class="form-group">
                                        <label>Tahun Ngawan</label>
                                        <input type="number" name="tahun_ngawan" id="tahun_ngawan" class="form-control" required placeholder="Tahun Ngawan / Sidi">
                                      </div>

                                      <div class="form-group">
                                        <label>Lokasi Ngawan</label>
                                        <input type="text" name="lokasi_ngawan" id="lokasi_ngawan" class="form-control" required placeholder="Greja Ngawan / Sidi">
                                      </div>

                                      <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control" placeholder="@id_instagram">
                                      </div>

                                      <div class="form-group">
                                        <label>Sektor</label>
                                        <select id="sektor" name="sektor" class="form-control" required>
                                            <option disabled selected>Pilih Sektor</option>
                                            @foreach($sektor as $key => $value )
                                            <option
                                             value="{{$value->id}}">{{$value->nama}}</option>
                                            @endforeach;
                                        </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <textarea rows="5" class="form-control" id="alamat" name="alamat" required="true" placeholder="Alamat lengkap tempat tinggal (sesuai kartu identitas KTP/SIM/Kartu Pelajar)"></textarea>
                                      </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                      <label>Password</label>
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text">
                                              <i class="icon-lock"></i>
                                              </span>
                                          </div>
                                          <input class="form-control" type="password" name="password" id="password" placeholder="Password" minlength="6" required>
                                      </div>
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text">
                                              <i class="icon-lock"></i>
                                              </span>
                                          </div>
                                          <input class="form-control" type="password" name="vpassword" id="vpassword" placeholder="Validate Password" required>
                                      </div>
                                </div>
                            </div>
                          <div class="row">
                              <div class="col-6">
                                  <button class="btn btn-login px-4" type="button" id="btn_daftar">Daftar</button>
                              </div>
                          </div>
                          </form>
                      </div>
                  </div>    
              </div>
          </div>
      </div>
  </div>
  <style type="text/css">
    body{
      /*background: linear-gradient(to right bottom, #e1e1e1,#383e87,#dc3431,#fbed24,#dc3431, #e1e1e1);*/
      background: linear-gradient(to right bottom, #e1e1e1,#383e87,#dc3431,#e1e1e1);
    }

    .btn-login{
      background-color: #383e87;
      background-color: #514c93;
      color: #fff;
    }

    .form-control:disabled, .form-control[readonly]{
        background: #fff !important;
      }

    .error{
      color: #fb2222;
    }
  </style>

  <script type="text/javascript">
      var Page = function () {

     

          return {
              init: function() { 
                    $('.date-picker').datepicker({
                          format: 'yyyy-mm-dd',
                      });

                    $.validator.addMethod('emailUnique',
                        function (value, element) {
                            var result = true;
                            $.ajax({
                                type:"post",
                                async: false,
                                url: "{{url('/')}}/auth/check_email_avaliable",
                                data : {email : value, _token : "{{csrf_token()}}"},
                                dataType : 'json',
                                success: function(data) {
                                    if(data.result == 'available'){ 
                                    result = false;}
                                }
                            });
                            return result;
                        },
                        'Email sudah digunakan, mohon gunakan email lain'
                    );

                    $.extend($.validator.messages, {
                        required : "Kolom ini wajib diisi.",
                        maxlength: jQuery.validator.format("Tolong isi field tidak lebih dari {0} karakter."),
                        minlength: jQuery.validator.format("Tolong isi field minimal {0} karakter."),
                        accept: "Extensi file tidak diperbolehkan."
                    });
                    $.validator.setDefaults({
                        errorPlacement: function(error, element) {
                            if (element.parent('.input-group').length) {
                                error.insertAfter(element.parent());      // radio/checkbox?
                            } else if (element.hasClass('select2-hidden-accessible')) {
                                error.insertAfter(element.next('span'));  // select2
                            } else if (element.attr('type') === "file") {
                                $(element).closest('.form-group').append(error);
                            } else {
                                error.insertAfter(element);               // default
                            }

                        }
                    });


                    $(document).on("click","#btn_daftar", function(e){
                        e.preventDefault();
                        if($("#form_register").valid()){
                            $("#form_register").submit();
                        }
                    });

                    $("#form_register").validate({
                        rules: {
                                vpassword: {
                                    equalTo: "#password"
                                }
                            },
                        messages: {
                                vpassword: "Masukan password yang sama!"
                        },
                        onkeyup: false,
                    });

                }
          };

      }();

      jQuery(document).ready(function() {
          Page.init();
      });
  </script>

</body>
</html>