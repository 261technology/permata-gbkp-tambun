<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/app')}}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-warning">dev.</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(2) == 'anggota' ? 'active' : ''}}" href="{{url('/')}}/app/anggota">
                <i class="nav-icon icon-people"></i> Anggota
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/pa">
                <i class="nav-icon icon-puzzle"></i> Pen. Alkitab
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/pp">
                <i class="nav-icon icon-puzzle"></i> Perp. Permata
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/kas">
                <i class="nav-icon icon-puzzle"></i> Iuran Kas
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/keuangan">
                <i class="nav-icon fa fa-dollar"></i> Keuangan
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-title">Administasi</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/anggota/keluarga">
                <i class="nav-icon icon-puzzle"></i> Keluarga
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/rencana_keuangan">
                <i class="nav-icon icon-puzzle"></i> Renc. Keuangan
                <span class="badge badge-warning">dev.</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/app/">
                <i class="nav-icon fa fa-info"></i> Tentang
                <span class="badge badge-warning">dev.</span></a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>