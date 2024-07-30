<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top py-3">
    <div class="container py-1">
        <a class="navbar-brand" href="#" class="d-inline-block align-text-top">URB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('urb') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="{{ route('buildings.index') }}">Gedung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="{{ route('peminjaman') }}">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="{{ route('riwayat') }}">Riwayat Peminjaman</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="button-primary me-2"><a href="{{ route('home') }}">Log Out</a></button>
            </div>
        </div>
    </div>
</nav>