@extends('layouts.app')

@section('content')
    <nav>
        <a href="{{route('tabelmahasiswa.create')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas.create')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah.create')}}">Tabel Mata Kuliah</a>
    </nav>
    </div>
    <div class="container">
        <h2>Tabel Mahasiswa</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Konsentrasi</th>
                    <th>Semester</th>
                    <!-- Add other table headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mahasiswa)
                    <tr>
                    <td>{{$mahasiswa->id}}</td>
                    <td>{{$mahasiswa->NIM}}</td>
                    <td>{{$mahasiswa->Nama}}</td>
                    <td>{{$mahasiswa->Konsentrasi}}</td>
                    <td>{{$mahasiswa->Semester}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <form action="{{ route('tabelmahasiswa.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="Nama">Name:</label>
                <input type="text" name="Nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" name="NIM" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Konsentrasi">Konsentrasi:</label>
                <input type="text" name="Konsentrasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Semester">Semester:</label>
                <input type="text" name="Semester" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Mahasiswa</button>
        </form>
    </div>
@endsection