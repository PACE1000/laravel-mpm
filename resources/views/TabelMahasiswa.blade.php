@extends('layouts.app')
@section('content')
    <div class="container">
    <nav>
        <a href="{{route('tabelmahasiswa')}}">Tabel Mahasiswa</a>
        <a href="{{route('tabelkelas')}}">Tabel Kelas</a>
        <a href="{{route('tabelmatakuliah')}}">Tabel Mata Kuliah</a>
    </nav>
    </div>
    <div class="container">
    <center><h1>Tabel Mahasiswa</h1></center>    
    <div>
    <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Konsentrasi</th>
                    <th>Semester</th>

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
                    <td>
                    <form action="{{route('tabelmahasiswa.destroy',$mahasiswa->id) }}" method="post"><a class="btn btn-sm btn-warning" href="{{ route('tabelmahasiswa.edit', $mahasiswa->id)}}">Edit</a>
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
    </div>
</body>
@endsection
