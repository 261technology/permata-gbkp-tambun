@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css?v=<?= date('d')  ?>" />
<link rel="stylesheet" href="{{url('/')}}/landing/profile.css?v={{date('d')}}" />
@endsection

@section('header-js')
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-12 col-md-3 text-center">
                         <div class="circle">
                           <!-- User Profile Image -->
                           <img class="profile-pic" src="<?= !empty($user->avatar) ? "data:image/png;base64,".$user->avatar : url('/').'/img/avatar/default.png' ?>"  alt="{{$user->nama}}">

                           <!-- Default Image -->
                           <!-- <i class="fa fa-user fa-5x"></i> -->
                         </div>
                         <form id="form-photo-profile" enctype="multipart/form-data">
                         <div class="p-image">
                           <i class="fa fa-camera upload-button"></i>
                            <input class="file-upload" type="file" accept="image/*"/>
                            <input type="hidden" id="base64image" name="base64image"/>
                         </div>
                         </form>
                      <!-- <img src="" alt="{{$user->nama}}" class="avatar"> -->
                      <!-- <span id="btn-change-photo"><i class="fa fa-edit"></i></span> -->
                  </div>
                  <div class="col-sm-12 col-md-9">
                      <div class="col-12" id="container-title-name">{{$user->nama}}</div>
                  </div>
              </div>

              <div class="row">
                  <ul class="nav nav-tabs col-12 pr-0" role="tablist">
                    <li class="nav-item col-6 pl-0 pr-0">
                      <a class="nav-link text-center p-1 active" href="#biodata" role="tab" data-toggle="tab">BIODATA</a>
                    </li>
                    <li class="nav-item col-6 pr-0 pr-0">
                      <a class="nav-link text-center p-1" href="#kas" role="tab" data-toggle="tab">KAS</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content col-12">
                    <div role="tabpanel" class="tab-pane fade in active show" id="biodata">
                      <div class="row">
                      
                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Nama Depan</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->nama_depan}}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Nama Belakang</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->nama_belakang}}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Marga</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->nama_marga}}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Jenis Kelamin</div>
                        <div class="col-sm-12 col-md-8 label-value-profile"><?= $user->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?></div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Tempat dan Tanggal Lahir</div>
                        <div class="col-sm-12 col-md-8 label-value-profile"><?= !empty($user->tempat_lahir) ? $user->tempat_lahir.', ' : '-, ' ?><?= !empty($user->tanggal_lahir) ? $user->tanggal_lahir : '-' ?></div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Pekerjaan</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->nama_pekerjaan?? '-' }}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Alamat (Sesuai KTP / Kartu Pelajar )</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->alamat?? '-' }}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Sektor</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->nama_sektor?? '-' }}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Email</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->email?? '-' }}</div>
                        
                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">No. Telepon</div>
                        <div class="col-sm-12 col-md-8 label-value-profile"><?= !empty($user->telepon) ? "+62".$user->telepon  : '-' ?></div>

                        <div class="col-sm-12 col-md-12 label-field-profile mt-5"><strong>Domisili Tinggal Saat Ini</strong></div>
                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Provinsi</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->provinsi ?? '-' }}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Kota / Kabupaten</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{ $user->kota ?? '-' }}</div>

                        <div class="col-sm-12 col-md-4 label-field-profile mt-2">Kecamatan</div>
                        <div class="col-sm-12 col-md-8 label-value-profile">{{$user->kecamatan?? '-' }}</div>

                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="kas">Lenga Siap</div>
                  </div>
              </div>

               <div class="row mt-2">
                  <div class="col-12 pr-0" style="min-height: 2em;text-align: right;">
                      <a href="{{url('/logout')}}" class="btn btn-danger pull-right"  id="btn-log-out">Log Out</a>
                      <a href="{{url('/edit-profile')}}" class="btn btn-warning pull-right" id="btn-edit-profile">Edit Profile</a>
                  </div>
              </div>

            </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="modal-photo">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-success" id="btn-upload-photo">Upload Photo</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/assets/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
  $(document).on("click","#btn-change-photo", ()=>{
      // $("#modal-photo").modal("show");
  });

   var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
                $("#base64image").val(e.target.result)
                $.ajax({
                  url       : "{{url('/upload-photo-profile')}}",
                  type      : "POST",
                  data      :  {
                    email   : "{{$user->email}}",
                    foto    : e.target.result,
                    _token  : "{{@csrf_token()}}" 

                  },
                  success: function(data)
                      {
                        $("#landing-loader").addClass("hidden");
                      },
                  error: function() 
                    {
                      alert("eeh sangana la danci")
                    }           
               });

            }
    
            reader.readAsDataURL(input.files[0]);
        }
        return true;
    }
    

    $(".file-upload").on('change', function(){
        readURL(this)
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

</script>
@endsection