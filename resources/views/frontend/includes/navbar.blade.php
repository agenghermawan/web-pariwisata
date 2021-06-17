<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-none">
        <a href="#" class="navbar-brand">
            {{-- <p style="color: #000080;"><b><i>Pariwisata Jawa Tengah</i></b></p> --}}
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="/" class="nav-link active">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        Wisata
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('wisatasejarah.index') }}" class="dropdown-item">Wisata Sejarah</a>
                        <a href="{{ route('wisatakuliner.index') }}" class="dropdown-item">Wisata Kuliner</a>
                        <a href="{{ route('wisataalam.index') }}" class="dropdown-item">Wisata Alam</a>
                        <a href="{{ route('wisatakeluarga.index') }}" class="dropdown-item">Wisata Keluarga</a>
                    </div>
                </li>

                <li class="nav-item mx-md-2">
                    <a href="{{ route('kritik.create') }}" class="nav-link">Kritik Saran</a>
                </li>

                <li class="nav-item mx-md-2">
                    <a href="{{ route('tentang.index') }}" class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('kontak') }}" class="nav-link">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
