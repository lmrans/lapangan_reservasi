@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Lapangan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Lapangan</th>
                    <th>Lokasi</th>
                    <th>Harga per Jam</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lapangan as $item)
                    <tr>
                        <td>{{ $item->nama_lapangan }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>Rp {{ number_format($item->harga_per_jam, 0, ',', '.') }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
