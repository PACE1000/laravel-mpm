@extends('layouts.app')

@section('content')
    <nav>
        <a href="{{route('tabelmahasiswa.create')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas.create')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah.create')}}">Tabel Mata Kuliah</a>
    </nav>
    </div>
    <div class="container">
        <h2>Tabel Kelas</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kelas</th>
                    <th>ID_Mahasiswa</th>
                    <th>ID_Mata_Kuliah</th>

                </tr>
            </thead>
            <tbody>
                @foreach($kelas as $kelas)
                    <tr>
                    <td>{{$kelas->id}}</td>
                    <td>{{$kelas->kelas}}</td>
                    <td>{{$kelas->ID_Mahasiswa}}</td>
                    <td>{{$kelas->ID_Mata_Kuliah}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('tabelkelas.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="kelas">kelas:</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ID_Mahasiswa">ID_Mahasiswa:</label>
                <input type="text" name="ID_Mahasiswa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ID_Mata_Kuliah">ID_Mata_Kuliah:</label>
                <input type="text" name="ID_Mata_Kuliah" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Kelas</button>
        </form>
    </div>
@endsection