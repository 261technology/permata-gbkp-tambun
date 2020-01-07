@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/login.css" />
@endsection

@section('header-js')
    <!-- Jquery Validaion -->
    <script src="{{url('/')}}/landing/plugin/jqueryvalidation.min.js" ></script>
@endsection

@section('nav-top')
    <!-- Navbar -->        
     <nav class="navbar navbar-light navbar-expand-lg fixed-top d-none d-sm-block" id="navbar-top">
        <div class="container">
          <div class="collapse navbar-collapse justify-content-end scroll" id="myNavbar">
            <ul class="nav navbar-nav ml-auto scroll">
              <li class="nav-item"><a href="{{url('/')}}" class="nav-link pl-10">Back</a></li>
              <li class="nav-item"><a href="{{url('/login')}}" class="nav-link active pl-10">Login</a></li>
              <li class="nav-item"><a href="{{url('/register')}}" class="nav-link pl-10">Register</a></li>
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
            <a class="col-4 btn btn-sm nav-link-bottom active" href="{{url('/login')}}">Login</a>
            <a class="col-4 btn btn-sm nav-link-bottom " href="{{url('/register')}}">Register</a>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">

              <section id="login" class="wrapper alt spotlight style2">
                <div class="inner">
                  <div class="content">
                    <label class="content-header text-center">Reset Password</label>
                    <form class="row" id="form-reset-password" action="{{url('/')}}/member/reset-password-proccess" method="POST">
                      @if(Session::has('status'))
                          <div class="offset-md-3 col-md-6 col-sm-12 text-left">
                            <div class="alert alert-{{ Session::get('status') == 'success' ? 'success' :  'warning' }} alert-block" style="font-weight:100">
                              @switch(Session::get('status'))
                                    @case('success')
                                        <p>
                                          Password kamu sudah berhasil diperbaharui silahkan kembali <a href="{{url('/')}}">Login</a>
                                        </p>
                                        @break
                                    @case('faile')
                                        <p>
                                          Password gagal diperbaharui
                                        </p> 
                                        @break
                                    @default
                                @endswitch

                            </div>
                          </div>
                        @endif
                      @csrf
                        <input type="hidden" name="code" value="{{$code}}">
                        <div class="col-md-6 offset-md-3 col-sm-12">
                          <label class="text-left" for="email">email</label>
                          <input class="form-control" type="email" name="email" id="email" value="{{$user->email}}" required readonly />
                        </div>

                        <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                          <label class="text-left" for="password">password</label>
                          <input class="form-control" type="password" name="password" id="password" required/>
                        </div>

                        <div class="col-md-6 offset-md-3 col-sm-12 mt-3">
                          <label class="text-left" for="password_confirmation">konfirmasi password</label>
                          <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required/>
                        </div>
                      
                        <div class="col-12 text-center mt-3">
                          <button class="btn btn-primary btn-sm btn-submit" id="btn-reset-password" type="button">Update Password</button>
                        </div>
                    </form>
                  </div>
                </div>
              </section>

      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
    $('#form-reset-password').validate({
      rules: {
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
          email: {
              required: "harus diisi",
              email: "pastikan email kamu benar",
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
          global.on("click","#btn-reset-password",function(e){
              if($('#form-reset-password').valid()){
                $("#form-reset-password")[0].submit();
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