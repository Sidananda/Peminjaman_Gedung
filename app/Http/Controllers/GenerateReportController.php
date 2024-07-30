<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanSchedules;
use PDF; // Menggunakan alias 'PDF'
use Carbon\Carbon;

class GenerateReportController extends Controller
{
    public function generateHistoryReport()
    {
        $today = date("Y-m-d H:i:s");
        $histories = LoanSchedules::all();

        $data = [
            'date' => $today,
            'histories' => $histories
        ];

        // $pdf = PDF::loadView('pdf.history_report', $data); // Menggunakan alias 'PDF'
        // return $pdf->stream();
    }
}
