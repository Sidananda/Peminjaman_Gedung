<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | URB</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section>
        <div class="sidebar">
            <div>
                <h2 class="heading2 mt-3 mb-5">URB</h2>
                <a href="#beranda" class="mb-2"><i class="fas fa-home"></i> Beranda</a>
                <button class="dropdown-btn mb-2"><i class="fas fa-user"></i> Auth
                    <span class="dropdown-icon">▾</span>
                </button>
                <div class="dropdown-container">
                    <a href="#login">Login</a>
                    <a href="#register">Register</a>
                </div>
                <button class="dropdown-btn mb-3"><i class="fas fa-user-cog"></i> Profile Admin
                    <span class="dropdown-icon">▾</span>
                </button>
                <div class="dropdown-container">
                    <a href="#prodi">Prodi</a>
                    <a href="#fakultas">Fakultas</a>
                    <a href="#sarpras">Sarpras</a>
                </div>
                <a href="#data-user" class="mb-2"><i class="fas fa-users"></i> Data User</a>
                <a href="#riwayat-peminjaman" class="mb-2"><i class="fas fa-history"></i> Data Riwayat Peminjaman</a>
                <a href="#data-gedung" class="mb-2"><i class="fas fa-building"></i> Data Gedung</a>
                <a href="#mengelola-jadwal" class="mb-2"><i class="fas fa-calendar-alt"></i> Jadwal Peminjaman</a>
            </div>
        </div>
    </section>
    
    
    <section>
        <div class="container">
            <div class="ms-5 p-5">
                <h1 class="heading2">Selamat Datang Admin 1 👋</h1>
            </div>
            <div class="row ms-5 ps-5">
                <div class="col-md-6">
                    <div class="text-white p-3 rounded" style="background-color: #FF7A00">
                        <h3>Peminjaman Hari Ini</h3>
                        <p>Jumlah Peminjaman Hari Ini: 5</p>
                        <a href="#peminjaman-hari-ini" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-white p-3 rounded" style="background-color: #FF7A00">
                        <h3>Total Keseluruhan Peminjaman</h3>
                        <p>Total Peminjaman: 123</p>
                        <a href="#total-peminjaman" class="btn btn-dark">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="row ms-5 ps-5 mt-5">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center fs-5">
                                <th scope="col">No</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Gedung</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">1</th>
                                <td>Ananda</td>
                                <td>Gedung A</td>
                                <td>Ruangan 101</td>
                                <td>Perkuliahan</td>
                                <td>2024-06-23</td>
                                <td><span class="status-circle bg-secondary"></span> Tersedia</td>
                            </tr>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">2</th>
                                <td>Sida</td>
                                <td>Gedung B</td>
                                <td>Ruangan 202</td>
                                <td>Kepanitiaan</td>
                                <td>2024-06-24</td>
                                <td><span class="status-circle bg-warning"></span> Pending</td>
                            </tr>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">3</th>
                                <td>Bhargo</td>
                                <td>Gedung C</td>
                                <td>Ruangan 303</td>
                                <td>Perkuliahan</td>
                                <td>2024-06-25</td>
                                <td><span class="status-circle bg-danger"></span> Ditolak</td>
                            </tr>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">4</th>
                                <td>Pasek</td>
                                <td>Gedung D</td>
                                <td>Ruangan 404</td>
                                <td>Kepanitiaan</td>
                                <td>2024-06-26</td>
                                <td><span class="status-circle bg-success"></span> Diterima</td>
                            </tr>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">5</th>
                                <td>Devit</td>
                                <td>Gedung E</td>
                                <td>Ruangan 505</td>
                                <td>Perkuliahan</td>
                                <td>2024-06-27</td>
                                <td><span class="status-circle bg-secondary"></span> Tersedia</td>
                            </tr>
                            <tr class="fs-6">
                                <th scope="row" class="text-center">6</th>
                                <td>Yogananda</td>
                                <td>Gedung F</td>
                                <td>Ruangan 606</td>
                                <td>Kepanitiaan</td>
                                <td>2024-06-28</td>
                                <td><span class="status-circle bg-warning"></span> Pending</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var dropdownButtons = document.querySelectorAll('.dropdown-btn');

    dropdownButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            this.classList.toggle('active');
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    });
});
</script>

<script src="{{ asset('js/script.js') }}"></script>

</html>