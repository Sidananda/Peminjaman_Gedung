<?php

namespace App\Http\Controllers;

use App\Models\LoanSchedules;
use Illuminate\Http\Request;

class LoanScheduleController extends Controller
{
    public function index()
    {
        $schedules = LoanSchedules::with(['building', 'room', 'user', 'admin'])->get();
        return view('loan_schedules.index', compact('schedules'));
    }

    public function create()
    {
        // retrieve necessary data for form options
        return view('loan_schedules.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'admin_id' => 'nullable|exists:admins,id',
            'user_id' => 'nullable|exists:users,id',
            'building_id' => 'required|exists:buildings,id',
            'room_id' => 'required|exists:rooms,id',
            'loan_start_date' => 'required|date',
            'loan_end_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'activity_letter' => 'nullable|string',
            'purpose' => 'required|string',
            'status_id' => 'required|in:available,pending,rejected,accepted',
        ]);

        LoanSchedules::create($validated);
        return redirect()->route('peminjaman.index')->with('success', 'Loan Schedule created successfully.');
    }

    public function show($id)
    {
        $schedule = LoanSchedules::with(['building', 'room', 'user', 'admin'])->findOrFail($id);
        return view('loan_schedules.show', compact('schedule'));
    }

    public function edit($id)
    {
        $schedule = LoanSchedules::findOrFail($id);
        return view('loan_schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'admin_id' => 'nullable|exists:admins,id',
            'user_id' => 'nullable|exists:users,id',
            'building_id' => 'required|exists:buildings,id',
            'room_id' => 'required|exists:rooms,id',
            'loan_start_date' => 'required|date',
            'loan_end_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'activity_letter' => 'nullable|string',
            'purpose' => 'required|string',
            'status_id' => 'required|in:available,pending,rejected,accepted',
        ]);

        $schedule = LoanSchedules::findOrFail($id);
        $schedule->update($validated);
        return redirect()->route('peminjaman.index')->with('success', 'Loan Schedule updated successfully.');
    }

    public function destroy($id)
    {
        $schedule = LoanSchedules::findOrFail($id);
        $schedule->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Loan Schedule deleted successfully.');
    }
}
