<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal=jadwal::all();
        return view ('jadwal.index', compact ('jadwal'));
    }

    public function indexa()
    {
        $jadwal=jadwal::all();
        return view ('jadwala.index', compact ('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_piket' => 'required',
            'jam_pulang' => 'required',
        ]);

        $jadwal = new Jadwal;
        $jadwal->nama = $request->nama;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->jam_masuk = $request->jam_masuk;
        $jadwal->jam_piket = $request->jam_piket;
        $jadwal->jam_pulang = $request->jam_pulang;
        $jadwal->save();
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_piket' => 'required',
            'jam_pulang' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->nama = $request->nama;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->jam_masuk = $request->jam_masuk;
        $jadwal->jam_piket = $request->jam_piket;
        $jadwal->jam_pulang = $request->jam_pulang;
        $jadwal->save();
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwala.index');
    }
}
