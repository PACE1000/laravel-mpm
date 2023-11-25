@extends('layouts.app')

@section('content')
    <nav>
        <a href="{{route('tabelmahasiswa.create')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas.create')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah.create')}}">Tabel Mata Kuliah</a>
    </nav>
    <div class="container">
        <h2>Tabel Mata Kuliah</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Nama Pengampu</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matakuliah as $matakuliah)
                    <tr>
                    <td>{{$matakuliah->id}}</td>
                    <td>{{$matakuliah->Nama_Mata_Kuliah}}</td>
                    <td>{{$matakuliah->Nama_Pengampu}}</td>
                    <td>{{$matakuliah->Kode_Mata_Kuliah}}</td>
                    <td>{{$matakuliah->Semester}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('tabelmatakuliah.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="Nama_Mata_Kuliah">Nama Mata Kuliah:</label>
                <input type="text" name="Nama_Mata_Kuliah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Nama_Pengampu">Nama Pengampu:</label>
                <input type="text" name="Nama_Pengampu" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Kode_Mata_Kuliah">Kode Mata Kuliah:</label>
                <input type="text" name="Kode_Mata_Kuliah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="text" name="Semester" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Mata Kuliah</button>
        </form>
    </div>
@endsection