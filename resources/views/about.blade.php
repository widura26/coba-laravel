@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<H3>{{ $name }}</H3>
<h3>{{ $email }}</h3>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
<h4>{{ $desc }}</h4>
@endsection
    