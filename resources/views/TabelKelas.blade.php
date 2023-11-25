@extends('layouts.app')
@section('content')
<div class="container">
    <nav>
        <a href="{{route('tabelmahasiswa')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah')}}">Tabel Mata Kuliah</a>
    </nav>
    </div>
</div>

<div class = "container">
<center><h1>Tabel Kelas</h1></center>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kelas</th>
            <th>ID Mahasiswa</th>
            <th>ID MataKuliah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas as $kelas)
        <tr>
            <td>{{$kelas->id}}</td>
            <td>{{$kelas->kelas}}</td>
            <td>{{$kelas->ID_Mahasiswa}}</td>
            <td>{{$kelas->ID_Mata_Kuliah}}</td>
            <td>
                    <form action="{{route('tabelkelas.destroy',$kelas->id) }}" method="post"><a class="btn btn-sm btn-warning" href="{{ route('tabelkelas.edit', $kelas->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button> 
                    </form>
                    </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
@endsection