@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/login.css" />
@endsection

@section('header-js')
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
                    <form class="row" id="form-forgot-password" action="{{url('/')}}/member/forgot-password" method="POST">
                      @csrf
                        @if(Session::has('status'))
                          <div class="offset-md-3 col-md-6 col-sm-12 text-left">
                            <div class="alert alert-{{ Session::get('status') == 'success' ? 'success' :  'warning' }} alert-block" style="font-weight:100">
                              @switch(Session::get('status'))
                                    @case('success')
                                        <p>
                                          hi {{Session::get('name')}}, silahkan periksa email kamu ({{Session::get('email')}}) untuk me-reset password akun ini
                                        </p>
                                        @break
                                    @case('error')
                                        <p>
                                          hi {{Session::get('name')}}, mohon maaf terjadi gangguan saat kami mencoba mengirim email ke ({{Session::get('email')}}), silahkan coba beberapa saat lagi
                                        </p> 
                                        @break
                                    @case('not-found')
                                        <p>
                                          email {{Session::get('email')}} belum terdaftar sebagai anggota permata tambun silahkan <a href="{{url('/')}}/register">mendaftar</a> terlebih dahulu
                                        </p> 
                                        @break
                                    @default
                                @endswitch

                            </div>
                          </div>
                        @endif
                        <div class="col-md-6 offset-md-3 col-sm-12">
                          <label class="text-left" for="email">email</label>
                          <input class="form-control" type="email" name="email" id="email" required/>
                        </div>
                      
                        <div class="col-12 text-center mt-3">
                          <button class="btn btn-primary btn-sm btn-submit-login">Verifikasi</button>
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
</script>
@endsection