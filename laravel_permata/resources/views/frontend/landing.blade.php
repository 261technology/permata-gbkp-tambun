@extends('frontend.layout')

@section('header-css')
<link rel="stylesheet" href="{{url('/')}}/landing/main.css" />
@endsection


@section('header-js')
@endsection

@section('nav-top')
    <!-- Navbar -->        
     <nav class="navbar navbar-light navbar-expand-lg fixed-top d-none d-sm-block" id="navbar-top">
        <div class="container">
          <div class="collapse navbar-collapse justify-content-end scroll" id="myNavbar">
            <ul class="nav navbar-nav ml-auto scroll">
              <li class="nav-item"><a href="#banner" class="nav-link pl-10">Home</a></li>
              <li class="nav-item"><a href="#one" class="nav-link pl-10">Visi</a></li>
              <li class="nav-item"><a href="#two" class="nav-link pl-10">Misi</a></li>
              <li class="nav-item"><a href="#three" class="nav-link pl-10">Anggota</a></li>
              <li class="nav-item"><a href="#four" class="nav-link pl-10">Berita</a></li>
              <li class="nav-item"><a href="{{url('/')}}/login" class="nav-link pl-10">Login</a></li>
              </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
@endsection

@section('nav-bottom')
    <nav class="navbar fixed-bottom navbar-light d-block d-sm-none" id="navbar-bottom">
        <div class="row w-100 text-center">
            <a class="btn btn-sm col-6 nav-link-bottom {{ Request::segment(1) == '' ? 'active' : '' }}" href="{{url('/')}}"> Home</a>
            <a class="btn btn-sm col-6 nav-link-bottom {{ Request::segment(1) == 'login' ? 'active' : '' }}" href="{{url('/login')}}">Login</a>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Page Wrapper -->
      <div id="page-wrapper">
        <!-- Banner -->
          <section id="banner">
            <div class="inner">
              <div class="logo"><span class="icon fa-gem"></span></div>
              <h2>PERMATA GBKP RUNGGUN TAMBUN</h2>
              <p>Bersekutu Melayani Mewujudnyatakan Kehendak ALLAH Ditengah-tengah Gereja, Keluarga, Masyarakat, Bangsa dan Negara.</p>
            </div>
          </section>

        <!-- Wrapper -->
          <section id="wrapper">
            <!-- One -->
              <section id="one" class="wrapper spotlight style1">
                <div class="inner">
                  <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic01.jpg" alt="" /></a>
                  <div class="content">
                    <label class="content-header text-dark">VISI</label>
                    <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                  </div>
                </div>
              </section>

            <!-- Two -->
              <section id="two" class="wrapper alt spotlight style2">
                <div class="inner">
                  <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic02.jpg" alt="" /></a>
                  <div class="content">
                    <label class="content-header">Misi</label>
                    <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                    <a href="#" class="special">Learn more</a>
                  </div>
                </div>
              </section>

            <!-- Three -->
              <section id="three" class="wrapper spotlight style3">
                <div class="inner">
                  <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic03.jpg" alt="" /></a>
                  <div class="content">
                    <h2 class="major">Nullam dignissim</h2>
                    <p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
                    <a href="#" class="special">Learn more</a>
                  </div>
                </div>
              </section>

            <!-- Four -->
              <section id="four" class="wrapper alt style1">
                <div class="inner">
                  <h2 class="major">Vitae phasellus</h2>
                  <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
                  <section class="features">
                    <article>
                      <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic04.jpg" alt="" /></a>
                      <h3 class="major">Sed feugiat lorem</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                      <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic05.jpg" alt="" /></a>
                      <h3 class="major">Nisl placerat</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                      <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic06.jpg" alt="" /></a>
                      <h3 class="major">Ante fermentum</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                      <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="{{url('/')}}/assets/template/solid-state/images/pic07.jpg" alt="" /></a>
                      <h3 class="major">Fusce consequat</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                      <a href="#" class="special">Learn more</a>
                    </article>
                  </section>
                  <ul class="actions">
                    <li><a href="#" class="button">Browse All</a></li>
                  </ul>
                </div>
              </section>

          </section>

        <!-- Footer -->
          <section id="footer">
            <div class="inner">
              <h2 class="major">Get in touch</h2>
              <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
              <form method="post" action="#">
                <div class="fields">
                  <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                  </div>
                  <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                  </div>
                  <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                  </div>
                </div>
                <ul class="actions">
                  <li><input type="submit" value="Send Message" /></li>
                </ul>
              </form>
              <ul class="contact">
                <li class="icon solid fa-home">
                  Untitled Inc<br />
                  1234 Somewhere Road Suite #2894<br />
                  Nashville, TN 00000-0000
                </li>
                <li class="icon solid fa-phone">(000) 000-0000</li>
                <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                <li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
                <li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
                <li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
              </ul>
              <ul class="copyright">
                <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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