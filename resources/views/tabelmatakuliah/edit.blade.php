@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tabel Mata Kuliah</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('tabelmatakuliah.update',$matakuliah->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nama_Mata_Kuliah">Nama_Mata_Kuliah:</label>
                <input type="text" name="Nama_Mata_Kuliah" class="form-control" id="Nama_Mata_Kuliah" value="{{$matakuliah->Nama_Mata_Kuliah}}" placeholder="Nama_Mata_Kuliah">
            </div>
            <div class="form-group">
                <label for="Nama_Pengampu">Nama_Pengampu:</label>
                <input type="text" name="Nama_Pengampu" class="form-control" id="Nama_Pengampu" value="{{$matakuliah->Nama_Pengampu}}" placeholder="Nama_Pengampu">
            </div>
            <div class="form-group">
                <label for="Kode_Mata_Kuliah">Kode_Mata_Kuliah:</label>
                <input type="text" name="Kode_Mata_Kuliah" class="form-control" id="Kode_Mata_Kuliah" value="{{$matakuliah->Kode_Mata_Kuliah}}" placeholder="Kode_Mata_Kuliah">
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <<input type="text" name="Semester" class="form-control" id="Semester" value="{{$matakuliah->Semester}}" placeholder="Semester">
            </div>
            <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
        </form>
    </div>
@endsection