@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
@endsection


@section('header-js')
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">
        <!-- Banner -->
          <section id="banner">
            <div class="inner">
              <div class="logo"><img src="{{url('/')}}/img/logo_permata.png" alt="LOGO PERMATA GBKP" height="100"></div>
              <h2>PERMATA GBKP RUNGGUN TAMBUN</h2>
              <p>Bersekutu Melayani Mewujudnyatakan Kehendak ALLAH Ditengah-tengah Gereja, Keluarga, Masyarakat, Bangsa dan Negara.</p>
            </div>
          </section>

        <!-- Wrapper -->
          <section id="wrapper">
            <!-- One -->
              <section id="one" class="wrapper spotlight style1">
                <div class="inner">
                  <a href="#" class="image"><img alt="visi permata"  src="{{url('/')}}/assets/template/solid-state/images/pic01.jpg" alt="" /></a>
                  <div class="content">
                    <label class="content-header text-dark">VISI</label>
                    <div class="w-100 text-left"><p>“1 Korintus 3:9 dan 1 Petrus 2:9-10  : Menjadi kawan sekerja Allah untuk menyatakan rahmat Allah kepada dunia. Dalam Bahasa Inggris : to be God’s fellow-workers to manifest God’s mercy to the world, dan dalam Bahasa Karo diartikan sebagai Aron Dibata guna jadi pasu-pasu man isi doni.“</p></div>
                  </div>
                </div>
              </section>

            <!-- Two -->
              <section id="two" class="wrapper alt spotlight style2">
                <div class="inner">
                  <a href="#" class="image"><img alt="misi permata"  src="{{url('/')}}/assets/template/solid-state/images/pic02.jpg" alt="" /></a>
                  <div class="content">
                    <label class="content-header">Misi</label>
                    <ul>
                      <li>1. Mengembangkan spiritual jemaat berbasis Alkitab</li>
                      <li>2. Mempererat persaudaraan PERMATA GBKP yang saling menopang dan membangun</li>
                      <li>3. Memperkokoh sinergi jaringan organisasi PERMATA GBKP</li>
                      <li>4. Menggali dan mengembangkan potensi PERMATA GBKP</li>
                      <li>5. Meningkatkan rasa kemanusiaan dan keutuhan ciptaan Allah</li>
                    </ul>
                  </div>
                </div>
              </section>

            <!-- Three -->
              <section id="three" class="wrapper spotlight style3">
                <div class="inner">
                  <a href="#" class="image"><img alt="tentang permata" src="{{url('/')}}/assets/template/solid-state/images/pic03.jpg" alt="" /></a>
                  <div class="content">
                    <h2 class="major">Tentang Kami</h2>
                    <div class="w-100 text-left">
                      <p>Persadan Man Anak Gerejanta (PERMATA GBKP) adalah salah satu persekutuan kategorial bagi Pemuda GBKP. Kehadiran PERMATA GBKP ditengah-tengah GBKP adalah sebagai tanda kasih setia Allah terhadap kesinambungan gerejaNya ditengah-tengah dunia ini. PERMATA GBKP juga merupakan jemaat kini dan masa yang akan datang yang senantiasa harus mempersiapkan diri dan berusaha memahami panggilan bersaksi, bersekutu dan melayani dari Tuhan Allah terhadap dirinya masing-masing agar mereka mewujudnyatakan Kehendak Allah ditengah-tengah gereja, keluarga, masyarakat, bangsa dan negara.</p>
                    </div>
                  </div>
                </div>
              </section>
        <!-- Footer -->
          <section id="footer">
            <div class="inner">
              <h2 class="major">Yuk Kenal PERMATA GBKP Lebih Dekat</h2>
              <ul class="contact mb-0">
                <li class="icon brands fa-instagram "><a style="color:#c2c1d8" href="https://www.instagram.com/permatatambun">Instagram @permatatambun</a></li>
              </ul>
              <ul class="copyright">
                <li>&copy; <strong>PERMATA GBKP</strong> RUNGGUN TAMBUN 2020</li>
              </ul>
            </div>
          </section>

      </div>

    <!-- Scripts -->

@endsection
  
@section('footer-js')  
<script src="{{url('/')}}/assets/template/solid-state/assets/js/main.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        $("body").scrollspy({ target: ".navbar"});

      //smooth scrolling on all links inside the navbar
      $(".scroll a").on("click", function(event) {
        
        if (this.hash !== "") {
          
          event.preventDefault();

          var hash = this.hash;

          $('.nav-link').removeClass('active');
          $(this).addClass('active');

         
          $("html, body").animate(
            {
              scrollTop: $(hash).offset().top
            },
            800,
            function() {
              window.location.hash = hash;
            }
          );
        }
      });
    });
</script>
@endsection