@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->name}}
                    <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection