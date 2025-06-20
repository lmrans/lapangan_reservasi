@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Form Reservasi Lapangan</h3>

    <form action="{{ route('user.reservasi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="lapangan_id" class="form-label">Pilih Lapangan</label>
            <select name="lapangan_id" class="form-control" required>
                <option value="">-- Pilih --</option>
                @foreach($lapangan as $l)
                    <option value="{{ $l->id }}">{{ $l->nama_lapangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jam_mulai" class="form-label">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jam_selesai" class="form-label">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Reservasi</button>
    </form>
</div>
@endsection
