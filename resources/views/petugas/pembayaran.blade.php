@extends('petugas.layout') {{-- Pastikan file layout-nya ada di resources/views/petugas/layout.blade.php --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Data Pembayaran</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama User</th>
                <th>Nominal</th>
                <th>Bukti Pembayaran</th>
                <th>Status</th>
                <th>Update Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembayaran as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name ?? '-' }}</td>
                    <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                    <td>
                        @if ($item->bukti)
                            <a href="{{ asset('storage/' . $item->bukti) }}" target="_blank">Lihat</a>
                        @else
                            Belum Ada
                        @endif
                    </td>
                    <td>
                        <span class="badge
                            @if($item->status == 'menunggu') bg-warning
                            @elseif($item->status == 'diterima') bg-success
                            @elseif($item->status == 'ditolak') bg-danger
                            @else bg-secondary @endif">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('petugas.reservasi.verifikasi', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option disabled selected>Ubah Status</option>
                                <option value="menunggu">Menunggu</option>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada data pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
