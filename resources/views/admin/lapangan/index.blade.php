@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Lapangan</h1>

        <a href="{{ route('admin.lapangan.create') }}" class="btn btn-primary mb-3">Tambah Lapangan</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Lapangan</th>
                    <th>Lokasi</th>
                    <th>Kode Lapangan</th>
                    <th>Deskripsi</th>
                    <th>Harga / Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lapangan as $field)
                    <tr>
                        <td>{{ $field->nama_lapangan }}</td>
                        <td>{{ $field->lokasi }}</td>
                        <td>{{ $field->kode_lapangan }}</td>
                        <td>{{ $field->deskripsi }}</td>
                        <td>Rp {{ number_format($field->harga_per_jam, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('admin.lapangan.edit', $field->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.lapangan.destroy', $field->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus lapangan?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
