<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class tabelmahasiswa extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tabelmahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('TabelMahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'NIM' => 'required',
            'Konsentrasi' => 'required',
            'Semester' => 'required',
        ]);


        Mahasiswa::create($request->all());

        return redirect()->route('tabelmahasiswa')->with('success', 'Mahasiswa data has been stored successfully.');
    }
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        return view('tabelmahasiswa.create',['mahasiswa'=>$mahasiswa]);
    }

    public function edit($id)
    {

        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return redirect()->route('tabelmahasiswa')->with('error', 'Mahasiswa not found');
        }
        return view('tabelmahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required',
            'NIM' => 'required',
            'Konsentrasi' => 'required',
            'Semester' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->Nama = $request->get('Nama');
        $mahasiswa->NIM = $request->get('NIM');
        $mahasiswa->Konsentrasi = $request->get('Konsentrasi');
        $mahasiswa->Semester = $request->get('Semester');

        $mahasiswa->save();
        return redirect()->route('tabelmahasiswa')
                         ->with('success', 'Data berhasil diupdate');
    }
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('tabelmahasiswa')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
