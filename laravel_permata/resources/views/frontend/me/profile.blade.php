@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/profile.css" />
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
              </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
@endsection

@section('nav-bottom')
    <nav class="navbar fixed-bottom navbar-light d-block d-sm-none" id="navbar-bottom">
        <div class="row w-100 text-center">
            <a class="col-4 offset-4 btn btn-sm nav-link-bottom " href="{{url('/')}}"> Home</a>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">

              <section id="profile" class="wrapper alt spotlight style2">
                <div class="inner">
                  <div class="content">
                    <label class="content-header text-left">{{$user->nama_depan.' '.$user->nama_belakang}}</label>
                    <div class="row">
                      @csrf
                      <div class="col-md-6 offset-md-3 col-sm-12">
                        <label class="text-left" for="email">email</label>
                        <input class="form-control" required value="{{$user->email}}" />
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-4">
                        <label class="text-left" >Nama Depan</label>
                        <input class="form-control" value="{{$user->nama_depan}}" />
                      </div>
                       <div class="col-md-6 offset-md-3 col-sm-12 mt-4">
                        <label class="text-left" >Nama Belakang</label>
                        <input class="form-control" value="{{$user->nama_belakang}}" />
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-4">
                        <label class="text-left" >Marga</label>
                        <input class="form-control" value="{{$user->nama_marga}}" />
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-4">
                        <label class="text-left" >Jenis Kelamin</label>
                        <input class="form-control" value="{{$user->jenis_kelamin =='L' ? 'Laki-laki' : 'Perempuan' }}" />
                      </div>
                      <div class="col-md-6 offset-md-3 col-sm-12 mt-4">
                        <label class="text-left" >Runggun</label>
                        <input class="form-control" value="{{$user->runggun }}" />
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
</script>
@endsection