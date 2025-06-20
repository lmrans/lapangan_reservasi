@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Lapangan</h1>

    <form action="{{ route('admin.lapangan.update', $lapangan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_lapangan">Nama Lapangan</label>
            <input type="text" name="nama_lapangan" class="form-control" value="{{ $lapangan->nama_lapangan }}" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $lapangan->lokasi }}" required>
        </div>

        <div class="form-group">
            <label for="kode_lapangan">Kode Lapangan</label>
            <input type="text" name="kode_lapangan" class="form-control" value="{{ $lapangan->kode_lapangan }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $lapangan->deskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="harga_per_jam">Harga per Jam</label>
            <input type="number" step="0.01" name="harga_per_jam" class="form-control" value="{{ $lapangan->harga_per_jam }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
