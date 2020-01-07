<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Permata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

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
    <link rel="stylesheet" href="{{url('/')}}/vendor/fontawesome-all.min.css" />
    @yield('header-css')

    <script src="{{url('/')}}/assets/template/solid-state/assets/js/jquery.scrollex.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/browser.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/breakpoints.min.js"></script>
    <script src="{{url('/')}}/assets/template/solid-state/assets/js/util.js"></script>

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
    @yield('nav-top')
    @yield('content')
    @yield('nav-bottom')
    @yield('footer-js')
    </body>
</html>
