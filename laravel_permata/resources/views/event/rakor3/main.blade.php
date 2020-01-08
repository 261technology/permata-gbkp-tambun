@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
<link rel="stylesheet" href="{{url('/')}}/landing/login.css" />
@endsection

@section('header-js')
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
                    <label class="content-header text-center" style="font-size: 0.8em">RAPAT KORDINASI PERMATA GBKP ke-3</label>
                    <div class="row">
                      <div class="col-md-6 offset-md-3 col-sm-12">
                            <label class="text-left" for="name" style="font-size: 0.5em">No. Teleponta </label>
                            <input class="form-control" type="phone" name="phone" id="phone" placeholder="ketikken nomor teleponta" />
                      </div>
                      <div class="col-12 text-center mt-2">
                        <button id="btn-qr" class="btn btn-sm btn-success" style="height: 35px;font-weight: 900;" type="button">siban kode QRta</button>
                      </div>

                      <div class="col-12 text-center mt-2" style="min-height: 300px;">
                        <iframe id="frame-qr" style="min-height: 300px;" src=""></iframe>
                      </div>
                </div>
              </section>

      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/assets/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
  $(document).on("click","#btn-qr",function(e){
      if($("#phone").val() != ''){
        $("#frame-qr").attr("src", "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=https://kitapermata.com/event/rakor3/" + $("#phone").val());
      }else{
        $("#frame-qr").attr("src", "");
      }
  });
</script>
@endsection