<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>PERMATA GBKP RUNGGUN TAMBUN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name=”description” content="PERMATA GBKP RUNGGUN TAMBUN Bersekutu Melayani Mewujudnyatakan Kehendak ALLAH Ditengah-tengah Gereja, Keluarga, Masyarakat, Bangsa dan Negara.">
    <meta name="google" content="notranslate" />
    <meta name="google-site-verification" content="tW0WUpvfArHS_Vuvfmi0lCd59v4QOMco7yGOmqZwxkg" />


    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Beranda - Persadan Man Anak Gerejanta | PERMATA GBKP" />
    <meta property="og:description" content="PERMATA GBKP RUNGGUN TAMBUN Bersekutu Melayani Mewujudnyatakan Kehendak ALLAH Ditengah-tengah Gereja, Keluarga, Masyarakat, Bangsa dan Negara." />
    <meta property="og:url" content="https://kitapermata.com" />
    <meta property="og:site_name" content="PERMATA GBKP RUNGGUN TAMBUN" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="PERMATA GBKP RUNGGUN TAMBUN Bersekutu Melayani Mewujudnyatakan Kehendak ALLAH Ditengah-tengah Gereja, Keluarga, Masyarakat, Bangsa dan Negara." />
    <meta name="twitter:title" content="PERMATA GBKP RUNGGUN TAMBUN" />
    <meta name="twitter:image" content="https://kitapermata.com/img/logo_permata.png" />

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='google-fonts-css'  href='//fonts.googleapis.com/css?family=Montserrat%3A400%2C600&#038;ver=0.1.19' type='text/css' media='all' />

    <!-- Jquery -->
    <script src="{{url('/')}}/vendor/jquery.min.js"></script>
    <script src="{{url('/')}}/vendor/popper.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('/')}}/vendor/bootstrap.min.css" />
    <script src="{{url('/')}}/vendor/bootstrap.min.js"></script>

    <!-- Icon -->
    <link rel="icon" href="{{url('/')}}/img/logo32x32.png" sizes="32x32" />
    <link rel="stylesheet" href="{{url('/')}}/vendor/fontawesome-all.min.css" />
    @yield('header-css')

    <script src="{{url('/')}}/assets/template/solid-state/assets/js/jquery.scrollex.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/browser.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/breakpoints.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/util.js"></script>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KR3W8NF');</script>

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => Auth::user()
        ]) !!};

        const global = $(document);  
    </script>
    @yield('header-js')
</head>
    <body class="is-preload ">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR3W8NF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('nav-top')
    @yield('content')
    @yield('nav-bottom')
    @yield('footer-js')
    </body>
</html>
