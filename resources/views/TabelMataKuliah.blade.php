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
<center><h1>Tabel Mata Kuliah</h1></center>
<table class="table table-striped">
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
            <td>
                <form action="{{route('tabelmatakuliah.destroy',$matakuliah->id) }}" method="post"><a class="btn btn-sm btn-warning" href="{{ route('tabelmatakuliah.edit', $matakuliah->id)}}">Edit</a>
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