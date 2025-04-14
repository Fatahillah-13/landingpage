<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class CounselingController extends Controller
{
    public function index()
    {
        $jadwal = Konsultasi::all();
        // Ambil tanggal hari ini
        $today = now()->toDateString();

        // Ambil slot yang sudah dipesan hari ini
        $bookedSlots = Konsultasi::where('consul_date', $today)->pluck('consul_time')->toArray();

        return view('pages.counseling.counseling', compact('jadwal','today', 'bookedSlots'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'level' => 'required|string',
            'department' => 'required|string',
            'consul_type' => 'required|in:online,offline',
            'consul_date' => 'required|date|after_or_equal:today',
            'consul_time' => 'required|string', // tambahkan ini jika ingin cek jam spesifik
            'description' => 'required|string',
        ]);

        // Cek apakah jadwal sudah terisi
        $exists = Konsultasi::where('consul_date', $validated['consul_date'])
            ->where('consul_time', $validated['consul_time'])
            ->exists();

        if ($exists) {
            return back()->with('error', 'Slot sudah terisi. Silakan pilih waktu lain.');
        }

        Konsultasi::create($validated);

        return redirect()->back()->with('success', 'Jadwal berhasil dipilih!');
    }
}
