<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class tabelkelas extends Controller
{
    public function tabelkelas()
    {
        $kelas = Kelas::all();
        return view('TabelKelas',['kelas'=>$kelas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'ID_Mahasiswa' => 'required',
            'ID_Mata_Kuliah' => 'required'
        ]);


        Kelas::create($request->all());

        return redirect()->route('tabelkelas')->with('success', 'Kelas data has been stored successfully.');
    }
    public function create()
    {
        $kelas = Kelas::all();
        return view('tabelkelas.create',['kelas'=>$kelas]);
    }

    public function edit($id)
    {

        $kelas = Kelas::find($id);
        if (!$kelas) {
            return redirect()->route('tabelkelas')->with('error', 'Kelas not found');
        }
        return view('tabelkelas.edit', compact('kelas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas' => 'required',
            'ID_Mahasiswa' => 'required',
            'ID_Mata_Kuliah' => 'required'
        ]);

        $kelas = Kelas::find($id);
        $kelas->kelas = $request->get('kelas');
        $kelas->ID_Mahasiswa = $request->get('ID_Mahasiswa');
        $kelas->ID_Mata_Kuliah = $request->get('ID_Mata_Kuliah');

        $kelas->save();
        return redirect()->route('tabelkelas')
                         ->with('success', 'Data berhasil diupdate');
    }
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('tabelkelas')
                         ->with('success', 'Data Kelas berhasil dihapus');
    }
}
