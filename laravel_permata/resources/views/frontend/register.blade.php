@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/auth.css" />
@endsection

@section('header-js')
    <!-- Jquery Validaion -->
    <script src="{{url('/')}}/assets/landing/plugin/jqueryvalidation.min.js" ></script>
@endsection

@section('nav-top')
    <!-- Navbar -->        
     <nav class="navbar navbar-light navbar-expand-lg fixed-top d-none d-sm-block" id="navbar-top">
        <div class="container">
          <div class="collapse navbar-collapse justify-content-end scroll" id="myNavbar">
            <ul class="nav navbar-nav ml-auto scroll">
              <li class="nav-item"><a href="{{url('/')}}" class="nav-link pl-10">Home</a></li>
              <li class="nav-item"><a href="{{url('/login')}}" class="nav-link pl-10">Login</a></li>
              <li class="nav-item"><a href="{{url('/register')}}" class="nav-link active pl-10">Register</a></li>
              </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
@endsection

@section('nav-bottom')
    <nav class="navbar fixed-bottom navbar-light d-block d-sm-none" id="navbar-bottom">
        <div class="row w-100 text-center">
            <a class="col-4 btn btn-sm nav-link-bottom " href="{{url('/')}}"> Home</a>
            <a class="col-4 btn btn-sm nav-link-bottom" href="{{url('/login')}}">Login</a>
            <a class="col-4 btn btn-sm nav-link-bottom active" href="{{url('/register')}}">Register</a>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">

              <section id="login" class="wrapper alt spotlight style2 mt-5">
                <div class="inner">
                  <div class="content">
                    <label class="content-header text-center">Register</label>
                      <form id="form-register" method="POST" action="{{url('/register-process')}}">
                        {{csrf_field()}}
                        <div class="row">
                          @if(Session::has('result'))
                            <div class="offset-md-3 col-md-6 col-sm-12 text-left">
                              @if(Session::get('result') == 'success')
                                <div class="alert alert-success alert-block" style="font-weight:100">
                              @else
                                <div class="alert alert-{{ Session::get('result') == 'active' ? 'danger' :  'warning' }} alert-block" style="font-weight:100">
                              @endif
                                
                                 @switch(Session::get('result'))
                                    @case('active')
                                        <p>
                                          Oops akun dengan email <strong class="text-dark">{{Session::get('email')}} 
                                          </strong> telah terdaftar dan aktif, silahkan klik tombol lupa password untuk mereset password kamu
                                          <div class="row text-center">
                                            <div class="col-12">
                                              <a href="{{url('/')}}/duh-lupa-password" class="btn btn-primary btn-sm">Lupa Password</a>
                                            </div>
                                          </div>
                                        </p> 
                                        @break

                                    @case('inactive')
                                        <p>
                                          Oops akun dengan email <strong class="text-dark">{{Session::get('email')}} 
                                          </strong>telah terdaftar, silahkan cek email kamu untuk mengaktifkan akun ini
                                        </p> 
                                        @break

                                    @default
                                @endswitch
                              </div>
                            </div>
                          @endif
                          <div class="col-md-6 offset-md-3 col-sm-12">
                            <label class="text-left" for="name">Nama</label>
                            <div class="row">
                              <div class="col-6">
                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="nama depan" required />
                              </div>
                              <div class="col-6">
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="nama belakang" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                            <label class="text-left" for="email">E-mail</label>
                            <input class="form-control" type="text" name="email" id="email" placeholder="email" />
                          </div>

                          <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                            <label class="text-left" for="runggun">Runggun</label>
                            <select class="form-control" type="text" name="runggun" id="runggun" placeholder="Runggun">
                                <option value="tambun" selected>Tambun</option>
                            </select>
                          </div>

                          <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                            <label class="text-left" for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="password" />
                          </div>

                          <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                            <label class="text-left" for="password_confirmation">Confirmation Password</label>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="konfirmasi password" />
                          </div>
                        </div>
                      </form>
                    <div class="col-12 text-center mt-3">
                      <button id="btn-submit-register" type="button" class="btn btn-primary btn-sm btn-submit">submit</button>
                    </div>
                  </div>
                </div>
              </section>

      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/assets/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
  $('#form-register').validate({
      rules: {
          firstname : "required",
          email     : {
                      required: true,
                      email: true
                      },
          password: {
                      required : true,
                      minlength: 8
                    },
          password_confirmation: {
                    required: true,
                    equalTo: "#password"
                  }
        },
      messages: {
          firstname: {
              required: "harus diisi"
          },
          email: {
              required: "harus diisi",
              email: "pastikan email kamu benar",
          },
          password: {
              required: "harus diisi"
          },
          password: {
              required: "harus diisi",
              minlength: "password harus terdiri minimal dari 8 karakter"
          },
          password_confirmation: {
              required: "harus diisi",
              equalTo: "pastikan konfirmasi password kamu benar"
          }
      }
    });

var Page = (() => {

      return {
        init: () => {
          global.on("click","#btn-submit-register",function(e){
              if($('#form-register').valid()){
                $("#form-register")[0].submit();
              }               
          });

      }
    };
})();

global.ready(()=> {
    Page.init();
});      
</script>
@endsection