<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiswaRequest $request)
    {
        // $validate = $request->validate(
        //     [
        //         'nama_siswa' => 'required',
        //         'nik' => 'required|numeric',
        //         'alamat' => 'required',
        //         'id_kelas' => 'required'
        //     ],
        //     [
        //         'nama_siswa.required' => 'Nama Siswa tidak boleh kosong'
        //     ]
        // );

        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'NIK' => $request->nik,
            'alamat' => $request->alamat,
            'id_kelas' => $request->id_kelas
        ]);

        return redirect()->route('siswa.index');
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
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiswaRequest $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nama_siswa' => $request->nama_siswa,
            'NIK' => $request->nik,
            'alamat' => $request->alamat,
            'id_kelas' => $request->id_kelas
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }

    public function showTrash()
    {
        $siswas = Siswa::onlyTrashed()->get();

        return view('siswa.trash', compact('siswas'));
    }

    public function restore($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id', $id)->first();
        $siswa->restore();
        return redirect()->route('siswa.trash');
    }

    public function delete($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id', $id)->first();
        $siswa->forceDelete();
        return redirect()->route('siswa.trash');
    }
}
