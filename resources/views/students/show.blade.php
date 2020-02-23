@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-3">Detail Mahasiswa</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$student->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <button type="submit" class="btn btn-primary">edit</button>
                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                    <a href="{{ url('/students') }}" class="card-link">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection