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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top py-3">
        <div class="container py-1">
            <a class="navbar-brand" href="#">URB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#faq">FAQ</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="button-secondary me-2"><a href="{{ route('login') }}">Masuk</a></button>
                    <button class="button-primary"><a href="{{ route('register') }}">Daftar</a></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Beranda Start -->
    <section>
        <div id="beranda" class="container-fluid banner">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="mt-5 heading1">Layanan Peminjaman Gedung <br>
                        Universitas Udayana
                    </h1>
                    <p class="mt-2 body-text">
                        Pilihan yang tepat untuk mendukung segala kegiatan anda di
                        Universitas Udayana. Temukan fleksibilitas dan kemudahan
                        dalam setiap peminjaman gedung.
                    </p>
                    <button class="mt-4 button-secondary" style="width: 230px; height: 50px;"><a href="{{ route('login') }}">G e t &nbsp; S
                            t a r t e d</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- Beranda End -->

    <!-- Tentang Starts -->
    <section>
        <div id="tentang" class="container container-all">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="heading2 fw-bold">Apa itu <span style="color: #FF7A00;">URB</span>?</h1>
                    <p class="body-text">
                        URB (UdayanaRoomBook) adalah sistem manajemen
                        peminjaman gedung yang dibuat khusus untuk Universitas
                        Udayana. URB memudahkan pengguna seperti mahasiswa,
                        dosen, staf administrasi, dan pimpinan fakultas untuk melihat
                        ketersediaan, melakukan peminjaman, dan mengelola jadwal
                        gedung di seluruh kampus.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./img/img-tentang1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-5">
                    <img src="./img/img-tentang2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 text-end">
                    <h1 class="heading2 fw-bold">Tinjauan Fitur <span style="color: #FF7A00;">URB</span></h1>
                    <p class="body-text">
                        UdayanaRoomBook (URB) menyediakan fitur utama seperti
                        pencarian ketersediaan ruangan dan gedung, peminjaman
                        dengan notifikasi, dan pelacakan aktivitas pengguna.
                        Pengguna yang berwenang, seperti Korma, Korti, dan anggota organisasi,
                        dapat melakukan peminjaman dengan akses terbatas. URB
                        bertujuan meningkatkan efisiensi penggunaan fasilitas kampus.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang End -->

    <!-- Layanan Start -->
    <section>
        <div class="d-flex justify-content-center align-items-center mt-5 pt-3">
            <h4 class="mt-3 text-center text-white rounded-3 px-5 py-3 position-absolute body-text"
                style="background-color: #FF7A00; max-width: 50%;">B a g a i m a n a &nbsp; k a m i &nbsp; <span
                    class="text-dark">m e l a y a n i</span> &nbsp; a n d a . . .</h4>
        </div>
        <div id="layanan" class="">
            <div class="row text-white">
                <div class="col-md-4 banner-layanan1">
                    <h2 class="heading2 px-5">Kemudahan Akses</h2>
                    <p class="body-text-small"><a href="#">Lebih lanjut ></a></p>
                </div>
                <div class="col-md-4 banner-layanan2">
                    <h2 class="heading2 px-5">Notifikasi Real Time</h2>
                    <p class="body-text-small"><a href="#">Lebih lanjut ></a></p>
                </div>
                <div class="col-md-4 banner-layanan3">
                    <h2 class="heading2 px-5">Fleksibilitas Penggunaan</h2>
                    <p class="body-text-small"><a href="#">Lebih lanjut ></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Layanan End -->

    <!-- FAQ Starts-->
    <section>
        <div id="faq" class="container container-all">
            <div class="row">
                <div class="col-md-5">
                    <div>
                        <div class="faq-blank position-absolute" style="background-color: #FF7A00;">
                            <p>&nbsp;</p>
                        </div>
                        <h1 class="heading1 position-absolute">
                            Frequently <br>
                            Asked Questions
                        </h1>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    Question #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Question #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Question #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Question #4
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the fourth item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Question #5
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the fifth item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    Question #6
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the sixth item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    Question #7
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the seventh item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed body-text" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    Question #8
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the eighth item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use to
                                    style each element. These classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any of this with custom
                                    CSS or overriding our default variables. It's also worth noting that just about
                                    any HTML can go within the <code>.accordion-body</code>, though the transition
                                    does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ End -->


    <!-- Footer Start -->
    @include('components.layouts.footer')
    <!-- Footer End -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>

</html>