@extends('layout/main')

@section('title', 'Web Programming UNPAS')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Hello, {{$name}}!</h2>
        </div>
    </div>
</div>
@endsection