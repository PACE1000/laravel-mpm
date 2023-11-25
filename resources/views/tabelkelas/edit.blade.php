@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tabel Kelas</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('tabelkelas.update',$kelas->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kelas">kelas:</label>
                <input type="text" name="kelas" class="form-control" id="kelas" value="{{$kelas->kelas}}" placeholder="kelas">
            </div>
            <div class="form-group">
                <label for="ID_Mahasiswa">ID_Mahasiswa:</label>
                <input type="text" name="ID_Mahasiswa" class="form-control" id="ID_Mahasiswa" value="{{$kelas->ID_Mahasiswa }}" placeholder="ID_Mahasiswa">
            </div>
            <div class="form-group">
                <label for="ID_Mata_Kuliah">ID_Mata_Kuliah:</label>
                <input type="text" name="ID_Mata_Kuliah" class="form-control" id="ID_Mata_Kuliah" value="{{$kelas->ID_Mata_Kuliah}}" placeholder="ID_Mata_Kuliah">
            </div>

            <button type="submit" class="btn btn-primary">Edit Kelas</button>
        </form>
    </div>
@endsection