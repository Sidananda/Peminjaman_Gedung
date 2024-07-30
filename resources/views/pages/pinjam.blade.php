<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('components.layouts.navbar-main')

    <!-- Welcome Start -->
    <section>
        <div id="beranda" class="container-fluid banner2">
            <div class="container text-center text-white">
                <h1 class="heading1">Form Peminjaman Gedung dan Ruangan</h1>
                <p></p>
            </div>
            <div class="container d-flex justify-content-center mt-3">
                <form action="{{ route('loan.store') }}" method="POST" enctype="multipart/form-data" class="d-flex form-inline" style="width: 700px;" id="formSelector">
                    @csrf
                    <select name="search" class="form-select shadow-sm" style="border-radius: 0.25rem 0 0 0.25rem; border-right: none;" id="formType">
                        <option value="civitas_unud">Civitas Akademika Universitas Udayana</option>
                        <option value="umum">Umum</option>
                    </select>
                    <button type="button" class="button-secondary" style="border-radius: 0 0.25rem 0.25rem 0; border-left: none;" onclick="selectForm()">Go</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Form Peminjaman  Start -->
    <section id="civitasForm">
        <div class="container mt-5">
            <div class="card p-4 shadow-sm">
                <form method="POST" action="{{ route('loan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center my-3">
                        <h3 class="heading3">Form Peminjaman Gedung dan Ruangan</h3>
                        <p class="body-text-small">Untuk Civitas Akademika Universitas Udayana</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nim">NIM</label>
                        <input type="text" class="form-control shadow-sm" id="nim" name="nim" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telepon">Nomor Telepon</label>
                        <input type="text" class="form-control shadow-sm" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <select name="fakultas" class="form-select shadow-sm" id="fakultas">
                                <option value="Fakultas A">Fakultas A</option>
                                <option value="Fakultas B">Fakultas B</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="prodi" class="form-label">Prodi</label>
                            <select name="prodi" class="form-select shadow-sm" id="prodi">
                                <!-- Pilihan prodi akan diisi dengan AJAX -->
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="gedung" class="form-label">Gedung</label>
                            <select name="gedung" class="form-select shadow-sm" id="gedung">
                                <option value="1">Gedung 1</option>
                                <option value="2">Gedung 2</option>
                                <option value="3">Gedung 3</option>
                                <option value="4">Gedung 4</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="ruangan" class="form-label">Ruangan</label>
                            <select name="ruangan" class="form-select shadow-sm" id="ruangan">
                                <!-- Pilihan ruangan akan diisi dengan AJAX -->
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal_mulai">Tanggal Mulai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam_mulai">Jam Awal Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam_mulai" name="jam_mulai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal_selesai">Tanggal Selesai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam_selesai">Jam Akhir Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam_selesai" name="jam_selesai" required>
                        </div>
                    </div>

                    <div class="mb-3">        
                        <label class="form-label" for="surat_izin_kegiatan">Surat Izin Kegiatan</label>
                        <input type="file" class="form-control shadow-sm" id="surat_izin_kegiatan" name="surat_izin_kegiatan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="keterangan">Keterangan</label>
                        <textarea class="form-control shadow-sm" id="keterangan" name="keterangan" placeholder="Kepanitiaan, perkuliahan..." required></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="persyaratan" required>
                        <label class="form-check-label" for="persyaratan">
                            Saya menerima persyaratan dan ketentuan yang berlaku
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="umumForm" style="display: none;">
        <div class="container mt-5">
            <div class="card p-4 shadow-sm">
                <form method="POST" action="{{ route('loan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center my-3">
                        <h3 class="heading3">Form Peminjaman Gedung dan Ruangan</h3>
                        <p class="body-text-small">Untuk Masyarakat Umum</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ktp">No KTP</label>
                        <input type="text" class="form-control shadow-sm" id="ktp" name="ktp" placeholder="Masukkan KTP" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telepon">Nomor Telepon</label>
                        <input type="text" class="form-control shadow-sm" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control shadow-sm" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="gedung" class="form-label">Gedung</label>
                            <select name="gedung" class="form-select shadow-sm" id="gedung">
                                <option value="1">Gedung 1</option>
                                <option value="2">Gedung 2</option>
                                <option value="3">Gedung 3</option>
                                <option value="4">Gedung 4</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="ruangan" class="form-label">Ruangan</label>
                            <select name="ruangan" class="form-select shadow-sm" id="ruangan">
                                <!-- Pilihan ruangan akan diisi dengan AJAX -->
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal_mulai">Tanggal Mulai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal_mulai" name="tanggal_mulai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam_mulai">Jam Awal Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam_mulai" name="jam_mulai" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="tanggal_selesai">Tanggal Selesai Peminjaman</label>
                            <input type="date" class="form-control shadow-sm" id="tanggal_selesai" name="tanggal_selesai" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jam_selesai">Jam Akhir Peminjaman</label>
                            <input type="time" class="form-control shadow-sm" id="jam_selesai" name="jam_selesai" required>
                        </div>
                    </div>

                    <div class="mb-3">        
                        <label class="form-label" for="surat_izin_kegiatan">Surat Izin Kegiatan</label>
                        <input type="file" class="form-control shadow-sm" id="surat_izin_kegiatan" name="surat_izin_kegiatan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="keterangan">Keterangan</label>
                        <textarea class="form-control shadow-sm" id="keterangan" name="keterangan" placeholder="Acara komunitas, sosial, dll." required></textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input shadow-sm" type="checkbox" value="" id="persyaratan" required>
                        <label class="form-check-label" for="persyaratan">
                            Saya menerima persyaratan dan ketentuan yang berlaku
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('components.layouts.footer')

    <!-- Custom JS -->
    <script>
        function selectForm() {
            var selectedForm = document.getElementById("formType").value;
            var civitasForm = document.getElementById("civitasForm");
            var umumForm = document.getElementById("umumForm");
    
            if (selectedForm === "civitas_unud") {
                civitasForm.style.display = "block";
                umumForm.style.display = "none";
            } else if (selectedForm === "umum") {
                civitasForm.style.display = "none";
                umumForm.style.display = "block";
            }
        }
    
        document.getElementById('fakultas').addEventListener('change', function() {
            var fakultas = this.value;
            fetch(`/get-prodi?fakultas=${fakultas}`)
                .then(response => response.json())
                .then(data => {
                    var prodiSelect = document.getElementById('prodi');
                    prodiSelect.innerHTML = '';
                    data.forEach(function(prodi) {
                        var option = document.createElement('option');
                        option.value = prodi;
                        option.text = prodi;
                        prodiSelect.appendChild(option);
                    });
                });
    
            // Reset ruangan dropdown
            document.getElementById('ruangan').innerHTML = '';
        });
    
        document.getElementById('prodi').addEventListener('change', function() {
            var fakultas = document.getElementById('fakultas').value;
            var prodi = this.value;
            fetch(`/get-ruangan?fakultas=${fakultas}&prodi=${prodi}`)
                .then(response => response.json())
                .then(data => {
                    var ruanganSelect = document.getElementById('ruangan');
                    ruanganSelect.innerHTML = '';
                    data.forEach(function(ruangan) {
                        var option = document.createElement('option');
                        option.value = ruangan;
                        option.text = ruangan;
                        ruanganSelect.appendChild(option);
                    });
                });
        });
    </script>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>
