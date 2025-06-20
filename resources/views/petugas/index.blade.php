@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Petugas</h1>
    <p>Selamat datang, Petugas! Silakan pilih menu di sidebar:</p>
    <ul>
        <li><a href="{{ route('petugas.reservasi.index') }}">Kelola Reservasi</a></li>

    </ul>
</div>
@endsection
