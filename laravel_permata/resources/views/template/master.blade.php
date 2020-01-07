<!DOCTYPE html>
<html>
  <head> 
    @include('template.assets')
    @yield('assets')
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('template.header')
    <div class="app-body">
        @include('template.sidebar')      
          <main class="main">
              <div class="container-fluid">
                @include('template.pesan')
                @yield('content')
              </div>
          </main>
    </div>
        @include('template.footer')
  </body>
</html>

@yield('footcode')