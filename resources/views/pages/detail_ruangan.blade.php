<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ruangan</title>

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

    <section class="container mt-5">
        <div class="text-center text-white">
            <h1 class="heading1">{{ $room->room_name }}</h1>
        </div>
        <div class="mt-5">
            <h4 class="heading4">Detail Fasilitas</h4>
            <div class="d-flex justify-content-around mt-3">
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->chair }} Kursi</h4>
                </div>
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->table }} Meja</h4>
                </div>
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->ac }} AC</h4>
                </div>
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->projector }} Proyektor</h4>
                </div>
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->board }} Papan Tulis</h4>
                </div>
                <div class="text-center p-3" style="border: 2px solid #FF7A00; border-radius: 10px;">
                    <h4 class="heading4" style="color: #FF7A00; margin: 0;">{{ $room->facilities->lamp }} Lampu</h4>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3 class="heading3">Jadwal Peminjaman</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Keterangan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room->schedules as $schedule)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $schedule->user->name }}</td>
                        <td>{{ $schedule->purpose }}</td>
                        <td>{{ $schedule->loan_start_date }}</td>
                        <td>{{ $schedule->loan_end_date }}</td>
                        <td>{{ $schedule->start_time }}</td>
                        <td>{{ $schedule->end_time }}</td>
                        <td>{{ $schedule->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    @include('components.layouts.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>