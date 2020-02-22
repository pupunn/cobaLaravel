@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$mhs -> name}}</td>
                        <td>{{$mhs -> nim}}</td>
                        <td>{{$mhs -> email}}</td>
                        <td>{{$mhs -> jurusan}}</td>
                        <td>
                            <a href="{{ url('mahasiswa/edit') }}" class="badge badge-success">edit</a>
                            <a href="{{ url('mahasiswa/delete') }}" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection