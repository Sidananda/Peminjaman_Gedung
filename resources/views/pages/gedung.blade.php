<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URB</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('components.layouts.navbar-main')

    <section>
        <div id="beranda" class="container-fluid banner2">
            <div class="container text-center text-white">
                <h1 class="heading1">Gedung Yang Kami Miliki</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="text-center text-white">
                <h1 class="heading2" style="font-weight: 600; color:black;">List Gedung <span style="color: #FF7A00">Universitas Udayana</span></h1>
            </div>
            <form action="{{ route('buildings.index') }}" method="GET">
                <div class="row mt-3">
                    <div class="col-6">
                        <select name="faculty" class="form-select shadow-sm">
                            <option value="">Cari sesuai Fakultas</option>
                            @foreach($faculties as $faculty)
                                <option value="{{ $faculty->faculty }}">{{ $faculty->faculty }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="prodi" class="form-select shadow-sm">
                            <option value="">Cari sesuai Prodi</option>
                            @foreach($prodis as $prodi)
                                <option value="{{ $prodi->prodi }}">{{ $prodi->prodi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="button-secondary" style="width: 200px">Cari Gedung</button>
                </div>
            </form>
            <div class="mt-5">
                <h3>Highlighted Buildings</h3>
                <div class="d-flex flex-wrap justify-content-between gap-4">
                    @foreach($highlightedBuildings as $building)
                        <div class="card shadow-sm" style="width: 415px;">
                            <img src="{{ asset('img/bg-unud.png') }}" class="card-img-top" alt="Building Image">
                            <div class="card-body">
                                <h5 class="body-text" style="font-weight: 500;">{{ $building->building_name }}</h5>
                                <p class="body-text-small">Lokasi: {{ $building->location }}</p>
                                <button class="button-primary" style="width: 130px;"><a href="{{ route('buildings.show', $building->id) }}">Lihat Detail</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-5">
                <h3>Search Results</h3>
                <div class="d-flex flex-wrap justify-content-between gap-4">
                    @foreach($buildings as $building)
                        <div class="card shadow-sm" style="width: 415px;">
                            <img src="{{ asset('img/bg-unud.png') }}" class="card-img-top" alt="Building Image">
                            <div class="card-body">
                                <h5 class="body-text" style="font-weight: 500;">{{ $building->building_name }}</h5>
                                <p class="body-text-small">Lokasi: {{ $building->location }}</p>
                                <button class="button-primary" style="width: 130px;"><a href="{{ route('buildings.show', $building->id) }}">Lihat Detail</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.layouts.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>