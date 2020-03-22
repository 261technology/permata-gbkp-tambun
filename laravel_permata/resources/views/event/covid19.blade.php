@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
@endsection

@section('header-js')
    <!-- Jquery Validaion -->
    <script src="{{url('/')}}/assets/landing/plugin/jqueryvalidation.min.js" ></script>
@endsection


@section('content')
    <style type="text/css">
  .hidden{
    display: none;
  }
  .content-header{
    font-size: 0.95em !important;
    font-family: Montserrat !important;
    color: #fbee35;
    font-weight: 700;
  }

  .logo{
    position: absolute;
    height: 2.2em !important;
    left: 5px;
    top: 5px;
  }

  .card-1{
    border : 2px solid #ff7a00;
    color: #ff7a00;
  }

  .card-2{
    border : 2px solid #d801fc;
    color: #d801fc;
  }

  .card-3{
    border : 2px solid #15aa01;
    color: #15aa01;
  }

  .card-4{
    border : 2px solid #fc0142;
    color: #fc0142;
  }

  .card-body{
    background: #eee;
    margin-bottom: 5px;
    font-family: Montserrat !important;
    border-radius: 0.5em;
    padding: 5px !important;
    min-height: 100px;
  }
  .card-body > .title{
    font-size: 0.7em;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: Montserrat !important;
  }

  .card-body > .count{
    margin-top: -10px;
    font-size: 3em;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: Montserrat !important;
  }

  .card-body > .jelma{
    margin-top: -20px;
  }

  .list-group-item{
    background: #303b7a !important;
  }

  a{
    color: #efae0a !important;
  }


  /*Loader*/
  .cs-loader {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: #0b268c;
  z-index: 999;
}

.cs-loader-inner {
  transform: translateY(-50%);
  top: 50%;
  position: absolute;
  width: calc(100% - 200px);
  color: #FFF;
  padding: 0 100px;
  text-align: center;
}

.cs-loader-inner label {
  font-size: 20px;
  opacity: 0;
  display:inline-block;
}

@keyframes lol {
  0% {
    opacity: 0;
    transform: translateX(-300px);
  }
  33% {
    opacity: 1;
    transform: translateX(0px);
  }
  66% {
    opacity: 1;
    transform: translateX(0px);
  }
  100% {
    opacity: 0;
    transform: translateX(300px);
  }
}

@-webkit-keyframes lol {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-300px);
  }
  33% {
    opacity: 1;
    -webkit-transform: translateX(0px);
  }
  66% {
    opacity: 1;
    -webkit-transform: translateX(0px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(300px);
  }
}


.cs-loader-inner label:nth-child(8) {
  -webkit-animation: lol 3s infinite ease-in-out;
  animation: lol 3s infinite ease-in-out;
}

.cs-loader-inner label:nth-child(7) {
  -webkit-animation: lol 3s infinite ease-in-out;
  animation: lol 3s infinite ease-in-out;
}

.cs-loader-inner label:nth-child(6) {
  -webkit-animation: lol 3s infinite ease-in-out;
  animation: lol 3s infinite ease-in-out;
}

.cs-loader-inner label:nth-child(5) {
  -webkit-animation: lol 3s 100ms infinite ease-in-out;
  animation: lol 3s 100ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(4) {
  -webkit-animation: lol 3s 200ms infinite ease-in-out;
  animation: lol 3s 200ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(3) {
  -webkit-animation: lol 3s 300ms infinite ease-in-out;
  animation: lol 3s 300ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(2) {
  -webkit-animation: lol 3s 400ms infinite ease-in-out;
  animation: lol 3s 400ms infinite ease-in-out;
}

.cs-loader-inner label:nth-child(1) {
  -webkit-animation: lol 3s 500ms infinite ease-in-out;
  animation: lol 3s 500ms infinite ease-in-out;
}
</style>
    <!-- Page Wrapper -->
      <div id="page-wrapper">
              <div class="cs-loader" id="loader">
                <div class="cs-loader-inner">
                  <label>K</label>
                  <label>E</label>
                  <label>N</label>
                  <label>T</label>
                  <label>I</label>
                  <label>S</label>
                  <label>I</label>
                  <label>K</label>
                </div>
              </div>
              <section id="covid" class="wrapper alt spotlight style2 mt-0">
                <div class="inner p-3">
                  <div class="content">
                    <label class="content-header text-center pl-3"> <img src="{{url('/')}}/img/logo_permata.png" alt="logo permata gbkp" class="logo">INFORMASI VIRUS COVID-19</label>
                    <div class="row">
                      <div class="col-12 text-left">
                        <label style="font-size:0.6em;">Kondisi bas wilayah Indonesia gundari : </label>
                      </div>
                    </div>
                    <div class="row">                      
                      <div class="col-6 col-md-3">
                        <div class="card-body card-1">
                          <div class="w-100 text-center title">TERKONFIRMASI</div>
                          <div class="w-100 text-center count" id="konfirmasi">0</div>
                          <div class="w-100 text-center jelma">jelma</div>
                        </div>
                      </div>

                      <div class="col-6 col-md-3">
                        <div class="card-body card-2">
                           <div class="w-100 text-center title">BAS PERAWATEN</div>
                          <div class="w-100 text-center count" id="perawatan">0</div>
                           <div class="w-100 text-center jelma">jelma</div>
                        </div>
                      </div>

                      <div class="col-6 col-md-3">
                        <div class="card-body card-3">
                           <div class="w-100 text-center title">ENGGO MALEM</div>
                           <div class="w-100 text-center count" id="sembuh">0</div>
                           <div class="w-100 text-center jelma">jelma</div>
                        </div>
                      </div>

                      <div class="col-6 col-md-3">
                        <div class="card-body card-4">
                           <div class="w-100 text-center title">MENINGGAL</div>
                           <div class="w-100 text-center count" id="meninggal">0</div>
                           <div class="w-100 text-center jelma">jelma</div>
                        </div>
                      </div>
                      <div class="col-12 text-right">
                        <label style="font-size: 0.5em;font-family: sans-serif;">data terakhir iperbarui bas<br><strong id="summaryLastUpdated"></strong><br> bas <a href="https://kawalcovid19.id/">kawalcovid.id</a> </label>
                      </div>

                      <div class="col-12 mt-2">
                        <a href="https://www.instagram.com/p/B99QNEFDKWq/" target="_blank">
                          <img src="{{url('/')}}/img/permata-gbkp-donasi-apd.jpg" alt="permata gbkp donasi apd"  style="width: 100%;">
                        </a>
                      </div>

                      <div class="col-12 mt-2">
                         <strong>Informasi Sideban : </strong>
                         <ul class="list-group">
                            <a href="https://www.youtube.com/watch?v=aEiovKP83Dg" target="_blank" class="list-group-item">Streaming Khotbah GBKP Runggun Tambun, Minggu 22 Maret 2020</a>

                            <a href="https://gbkp.or.id/wp-content/uploads/2020/03/0307-20-Pencegahan-Penyebaran-Virus-Corona.pdf" target="_blank" class="list-group-item">Surat Pastoral Pengelayasi Wabah Virus Corona</a>
                            
                            <a href="https://gbkp.or.id/wp-content/uploads/2020/03/0307-20-Pencegahan-Penyebaran-Virus-Corona.pdf" target="_blank" class="list-group-item">Surat Edaran Moderamen Terkait Pencegahan Virus Corona</a>
                          </ul>

                      </div>

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
var Page = (() => {
    const fetchDataTerkini = () => {
       $.ajax({
            url: "https://kawalcovid19.harippe.id/api/summary",
            method: 'get',
            dataType : "json",
            success:function(result){

               $("#konfirmasi").html(result.confirmed.value);    
               $("#perawatan").html(result.activeCare.value);    
               $("#sembuh").html(result.recovered.value);    
               $("#meninggal").html(result.deaths.value);    
               $("#summaryLastUpdated").html(result.metadata.lastUpdatedAt);    
              $("#loader").addClass("hidden");
            }
        });
    }

      return {
        init: () => {
          fetchDataTerkini();
      }
    };
})();

global.ready(()=> {
    Page.init();
});      
</script>
@endsection