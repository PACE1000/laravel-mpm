<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MataKuliah;

class tabelmatakuliah extends Controller
{
    public function tabelmatakuliah()
    {
        $matakuliah = MataKuliah::all();
        return view('TabelMataKuliah',['matakuliah'=>$matakuliah]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Mata_Kuliah' => 'required',
            'Nama_Pengampu' => 'required',
            'Kode_Mata_Kuliah' => 'required',
            'Semester'=>'required',
        ]);


        MataKuliah::create($request->all());

        return redirect()->route('tabelmatakuliah')->with('success', 'Matakuliah data has been stored successfully.');
    }
    public function create()
    {
        $matakuliah = MataKuliah::all();
        return view('tabelmatakuliah.create',['matakuliah'=>$matakuliah]);
    }

    public function edit($id)
    {
        $matakuliah = MataKuliah::find($id);
        if (!$matakuliah) {
            return redirect()->route('tabelmatakuliah')->with('error', 'Mata Kuliah not found');
        }
        return view('tabelmatakuliah.edit', compact('matakuliah'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Mata_Kuliah' => 'required',
            'Nama_Pengampu' => 'required',
            'Kode_Mata_Kuliah' => 'required',
            'Semester' => 'required',
        ]);

        $matakuliah = MataKuliah::find($id);
        $matakuliah->Nama_Mata_Kuliah = $request->get('Nama_Mata_Kuliah');
        $matakuliah->Nama_Pengampu = $request->get('Nama_Pengampu');
        $matakuliah->Kode_Mata_Kuliah = $request->get('Kode_Mata_Kuliah');
        $matakuliah->Semester = $request->get('Semester');

        $matakuliah->save();
        return redirect()->route('tabelmatakuliah')
                         ->with('success', 'Data berhasil diupdate');
    }
    public function destroy($id)
    {
        $matakuliah = MataKuliah::find($id);
        $matakuliah->delete();
        return redirect()->route('tabelmatakuliah')
                         ->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
