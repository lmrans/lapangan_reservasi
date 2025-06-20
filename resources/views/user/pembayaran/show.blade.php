@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Pembayaran</h2>

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Reservasi Lapangan: {{ $pembayaran->reservasi->lapangan->nama }}</h5>

            <p><strong>Tanggal Reservasi:</strong> {{ $pembayaran->reservasi->tanggal }}</p>
            <p><strong>Jam:</strong> {{ $pembayaran->reservasi->jam_mulai }} - {{ $pembayaran->reservasi->jam_selesai }}</p>
            <p><strong>Total Bayar:</strong> Rp{{ number_format($pembayaran->jumlah, 0, ',', '.') }}</p>
            <p><strong>Status:</strong>
                @if($pembayaran-> $stats== 'menunggu')
                    <span class="badge bg-warning text-dark">Menunggu Verifikasi</span>
                @elseif($pembayaran->status == 'diterima')
                    <span class="badge bg-success">Diterima</span>
                @else
                    <span class="badge bg-danger">Ditolak</span>
                @endif
            </p>

            <p><strong>Bukti Transfer:</strong></p>
            @if($pembayaran->bukti)
                <img src="{{ asset('storage/bukti_pembayaran/' . $pembayaran->bukti) }}" class="img-fluid" style="max-width: 400px;">
            @else
                <p class="text-danger">Belum upload bukti pembayaran</p>
            @endif

            <a href="{{ route('user.pembayaran.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
