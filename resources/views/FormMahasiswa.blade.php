@extends('layouts.app')
@section('content')
<div class="container">
    <nav>
        <a href="{{route('tabelmahasiswa.create')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas.create')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah.create')}}">Tabel Mata Kuliah</a>
    </nav>
    </div>
</div>
<div class="container">
<form action="{{ route('tabelmahasiswa.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Mahasiswa</button>
        </form>
</div>
@endsection