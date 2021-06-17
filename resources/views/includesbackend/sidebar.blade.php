<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('backend/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard.index') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-wisata" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Category Wisata</span>

                        </a>
                        <div class="collapse" id="navbar-wisata">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('list-wisata-sejarah') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-spaceship mr-2"></i></span>
                                        <span class="sidenav-normal"> Daftar Wisata Sejarah </span>
                                    </a>
                                    <a href="{{ route('list-wisata-alam') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-compass-04 mr-2"></i></span>
                                        <span class="sidenav-normal"> Daftar Wisata Alam </span>
                                    </a>
                                    <a href="{{ route('list-wisata-keluarga') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-air-baloon mr-2"></i></span>
                                        <span class="sidenav-normal"> Daftar Wisata Keluarga </span>
                                    </a>
                                    <a href="{{ route('list-wisata-kuliner') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-bag-17 mr-2"></i></span>
                                        <span class="sidenav-normal"> Daftar Wisata Kuliner </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('wisata.create') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-square-pin mr-2"></i></span>
                                        <span class="sidenav-normal"> Tambahkan Wisata </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-examples">
                            <i class="fas fa-image  text-primary"></i>
                            <span class="nav-link-text">Gallery Wisata</span>

                        </a>
                        <div class="collapse" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <a href="{{ route('list-gallery-sejarah') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> <i class="ni ni-spaceship mr-2"></i></span>
                                    <span class="sidenav-normal"> Daftar Gallery Sejarah </span>
                                </a>
                                <a href="{{ route('list-gallery-alam') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> <i class="ni ni-compass-04 mr-2"></i></span>
                                    <span class="sidenav-normal"> Daftar Gallery Alam </span>
                                </a>
                                <a href="{{ route('list-gallery-kuliner') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> <i class="ni ni-air-baloon mr-2"></i></span>
                                    <span class="sidenav-normal"> Daftar Gallery Kuliner </span>
                                </a>
                                <a href="{{ route('list-gallery-keluarga') }}" class="nav-link">
                                    <span class="sidenav-mini-icon"> <i class="ni ni-bag-17 mr-2"></i></span>
                                    <span class="sidenav-normal"> Daftar Gallery Keluarga </span>
                                </a>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.create') }}" class="nav-link">
                                        <span class="sidenav-mini-icon"> <i class="ni ni-square-pin mr-2"></i></span>
                                        <span class="sidenav-normal"> Tambahkan Gallery </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kritik.index') }}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Kritik</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> --}}
                </ul>
            </div>
        </div>
    </div>
</nav>
