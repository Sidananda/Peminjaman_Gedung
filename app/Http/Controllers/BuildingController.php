<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Room;

class BuildingController extends Controller
{
    public function index(Request $request)
    {
        $faculties = Building::select('faculty')->distinct()->get();
        $prodis = Building::select('prodi')->distinct()->get();

        $query = Building::query();

        if ($request->has('faculty') && $request->faculty != '') {
            $query->where('faculty', $request->faculty);
        }

        if ($request->has('prodi') && $request->prodi != '') {
            $query->where('prodi', $request->prodi);
        }

        $buildings = $query->get();
        $highlightedBuildings = Building::where('is_highlighted', true)->get();

        return view('pages.gedung', compact('buildings', 'faculties', 'prodis', 'highlightedBuildings'));
    }

    public function show($id)
    {
        $building = Building::with('rooms.facilities')->findOrFail($id);
        return view('pages.detail_gedung', compact('building'));
    }

    public function roomDetail($id)
    {
        $room = Room::with('facilities', 'schedules.user')->findOrFail($id);
        return view('pages.detail_ruangan', compact('room'));
    }

    public function getProdi(Request $request)
    {
        $fakultas = $request->input('fakultas');
        $prodi = Building::where('faculty', $fakultas)->pluck('prodi');

        return response()->json($prodi);
    }

    public function getRuangan(Request $request)
    {
        $fakultas = $request->input('fakultas');
        $prodi = $request->input('prodi');
        $ruangan = Room::whereHas('building', function ($query) use ($fakultas, $prodi) {
            $query->where('faculty', $fakultas)->where('prodi', $prodi);
        })->pluck('room_name');

        return response()->json($ruangan);
    }
}