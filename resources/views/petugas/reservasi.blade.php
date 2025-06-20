@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Reservasi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Lapangan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasi as $item)
                <tr>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->lapangan->nama_lapangan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam_mulai }} - {{ $item->jam_selesai }}</td>
                    <td>
                        @if ($item->status === 'menunggu')
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        @elseif ($item->status === 'diterima')
                            <span class="badge bg-success">Diterima</span>
                        @elseif ($item->status === 'ditolak')
                            <span class="badge bg-danger">Ditolak</span>
                        @else
                            <span class="badge bg-secondary">{{ ucfirst($item->status) }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($item->status === 'menunggu')
                            <div class="d-flex gap-1">
                                {{-- Tombol Verifikasi --}}
                                <form action="{{ route('petugas.reservasi.verifikasi', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Verifikasi reservasi ini?')">
                                        Verifikasi
                                    </button>
                                </form>

                                {{-- Tombol Tolak --}}
                                <form action="{{ route('petugas.reservasi.verifikasi', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tolak reservasi ini?')">
                                        Tolak
                                    </button>
                                </form>
                            </div>
                        @else
                            <span class="text-muted">Tidak ada aksi</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
