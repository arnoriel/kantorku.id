<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan=Karyawan::all();
        return view ('karyawan.index', compact ('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
        ]);

        $karyawan = new Karyawan;
            $karyawan->nama = $request->nama;
            $karyawan->telepon = $request->telepon;
            $karyawan->jk = $request->jk;
            $karyawan->alamat = $request->alamat;
            $karyawan->ttl = $request->ttl;
            $karyawan->save();
            return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
        ]);

        $karyawan = Karyawan::findOrFail($id);
            $karyawan->nama = $request->nama;
            $karyawan->telepon = $request->telepon;
            $karyawan->jk = $request->jk;
            $karyawan->alamat = $request->alamat;
            $karyawan->ttl = $request->ttl;
            $karyawan->save();
            return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
