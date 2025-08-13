<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $nomor = 1;
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswa','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->email = $request->email;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->no_hhp = $request->no_hhp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->email = $request->email;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->no_hhp = $request->no_hhp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return redirect('/mahasiswa');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa');
    }
}
