<!DOCTYPE html>
<html>

<head>
    <title>Laporan Peminjaman Gedung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .report-container {
            width: 100%;
            margin: 0 auto;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .section-content {
            font-size: 14px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="report-container">
        <div class="section-title">Generated on : {{ $date }}</div>             
            <div class="section">
                <div class="section-title">Riwayat peminjaman</div>
                <div class="section-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Peminjam</th>
                                <th>Gedung</th>
                                <th>Ruangan</th>
                                <th>Keterangan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($histories as $history)
                            <tr>
                                <td>{{ $history->id }}</td>
                                <td>{{ $history->user->name }}</td>
                                <td>{{ $history->building->building_name }}</td>
                                <td>{{ $history->room->room_name }}</td>
                                <td>{{ $history->purpose }}</td>
                                <td>{{ $history->loan_start_date }}</td>
                                <td>{{ $history->loan_end_date }}</td>
                                <td>{{ $history->start_time }}</td>
                                <td>{{ $history->end_time }}</td>
                                <td>{{ $history->status_id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>
</body>

</html>