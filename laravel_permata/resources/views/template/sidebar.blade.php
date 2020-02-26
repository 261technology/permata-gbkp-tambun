<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/application')}}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-warning">dev.</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(2) == 'anggota' ? 'active' : ''}}" href="{{url('/')}}/application/anggota">
                <i class="nav-icon icon-people"></i> Anggota
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(2) == 'acara' ? 'active' : ''}}" href="{{url('/')}}/application/acara">
                <i class="nav-icon icon-people"></i> Acara
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/application/pa"> 
                <i class="nav-icon icon-puzzle"></i> Pen. Alkitab</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon fa fa-file"></i> Laporan</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}/application/laporan/iuran kas">
                  <i class="nav-icon icon-list"></i> Keuangan</a>
                  <span class="badge badge-warning">dev.</span> 
                </li>
              </ul>
            </li>
            <li class="nav-title">Administasi</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/application/agenda">
                <i class="nav-icon fa fa-calendar"></i> Agenda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(2) == 'anggota' ? 'active' : ''}}" href="{{url('/')}}/application/anggota">
                <i class="nav-icon icon-people"></i> Anggota</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon fa fa-dollar"></i> Keuangan</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}/application/keuangan/pemasukan">
                  <i class="nav-icon icon-list"></i> Pemasukan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}/application/keuangan/pengeluaran">
                  <i class="nav-icon icon-list"></i> Pengeluaran
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/application/anggota/keluarga">
                <i class="nav-icon icon-puzzle"></i> Keluarga
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/application/">
                <i class="nav-icon fa fa-info"></i> Tentang
                <span class="badge badge-warning">dev.</span></a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>