@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Lapangan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.lapangan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_lapangan" class="form-label">Nama Lapangan</label>
            <input type="text" name="nama_lapangan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kode_lapangan" class="form-label">Kode Lapangan</label>
            <input type="text" name="kode_lapangan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="harga_per_jam" class="form-label">Harga per Jam</label>
            <input type="number" step="0.01" name="harga_per_jam" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
