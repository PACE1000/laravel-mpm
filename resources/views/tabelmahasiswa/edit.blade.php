@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tabel Mahasiswa</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('tabelmahasiswa.update',$mahasiswa->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nama">Name:</label>
                <input type="text" name="Nama" class="form-control" id="Nama" value="{{$mahasiswa->Nama}}" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" name="NIM" class="form-control" id="NIM" value="{{$mahasiswa->NIM }}" placeholder="NIM">
            </div>
            <div class="form-group">
                <label for="Konsentrasi">Konsentrasi:</label>
                <input type="text" name="Konsentrasi" class="form-control" id="Konsentrasi" value="{{$mahasiswa->Konsentrasi}}" placeholder="Konsentrasi">
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <<input type="text" name="Semester" class="form-control" id="Semester" value="{{$mahasiswa->Semester}}" placeholder="Semester">
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Edit Mahasiswa</button>
        </form>
    </div>
@endsection