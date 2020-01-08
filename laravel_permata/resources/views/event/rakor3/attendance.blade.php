@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/login.css" />
@endsection

@section('header-js')
@endsection

@section('nav-top')
    @if(Session::has('email'))
    <!-- Navbar -->        
     <nav class="navbar navbar-light navbar-expand-lg fixed-top d-none d-sm-block" id="navbar-top">
        <div class="container">
          <div class="collapse navbar-collapse justify-content-end scroll" id="myNavbar">
            <ul class="nav navbar-nav ml-auto scroll">
              <li class="nav-item"><a href="{{url('/')}}/event/rakor3/set-attendance/{{$user->phone}}/{{$user->attend == 1 ? '0' : '1'}}" class="nav-link pl-10">{{$user->attend == 1 ? 'Set Unpresent' : 'Set Present'}}</a></li>
              </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
   @endif
@endsection

@section('nav-bottom')
    @if(Session::has('email'))
    <nav class="navbar fixed-bottom navbar-light d-block d-sm-none" id="navbar-bottom" style="background: #fafafa00;">
        <div class="row text-center">
            <a class="col-4 offset-4 btn btn-sm nav-link-bottom btn-{{$user->attend == 1 ? 'danger' : 'success'}} text-white" href="{{url('/')}}/event/rakor3/set-attendance/{{$user->phone}}/{{$user->attend == 1 ? '0' : '1'}}">{{$user->attend == 1 ? 'Set Unpresent' : 'Set Present'}}</a>
        </div>
    </nav>
    @endif
@endsection

@section('content')

    <!-- Page Wrapper -->
      <div id="page-wrapper">
              <section id="profile" class="wrapper alt spotlight style2">
                <div class="w-100 text-center">
                    <img height="50px" src="{{url('/')}}/img/logo_permata.png">
                </div>
                <div class="inner">
                  <div class="content">
                    <label class="content-header text-center" style="font-size: 1em">{{$user->name}}</label>
                    <div class="row">
                      <div class="col-md-6 offset-md-3 col-sm-12">
                        <label class="text-left" for="name" style="font-size: 0.7em">No. Handphone </label>
                        <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning" style="font-family:sans-serif;">{{$user->phone}} </label>
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-2">
                        <label class="text-left" for="name" style="font-size: 0.7em">Klasis</label>
                        <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning">{{$user->klasis}}</label>
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-2">
                        <label class="text-left" for="name" style="font-size: 0.7em">Jabatan</label>
                        <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning">{{$user->jabatan}}</label>
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-2">
                        <label class="text-left" for="name" style="font-size: 0.7em">Jenis Kelamin</label>
                        <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning">{{$user->gender}}</label>
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-2">
                        <label class="text-left" for="name" style="font-size: 0.7em">No. Kamar</label>
                        <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning">{{$user->room}}</label>
                      </div>
                      @if($user->attend == '1')
                          <div class="col-md-6 offset-md-3 col-sm-12 mt-2">
                            <label class="text-left" for="name" style="font-size: 0.7em">Waktu Hadir</label>
                            <label class="border border-bottom-2 border-top-0 border-left-0 border-right-0 text-left pl-2 text-warning border-warning">{{$user->date_updated}}</label>
                          </div>
                        @endif
                  </div>
                  @if(Session::has('message'))
                    <div class="offset-md-3 col-md-6 col-sm-12 text-left">
                      <div class="alert alert-{{$user->attend == 1 ? 'success' : 'warning'}} alert-block" style="font-weight:100">
                      {{ Session::get('message') }}
                      </div>
                    </div>
                  @endif
                </div>
              </section>

      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/assets/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
</script>
@endsection