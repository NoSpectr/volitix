@extends('user.user')

@section('content')
    <div class="container mt-5">
        <h4>Detail Pembayaran</h4>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-none bg-transparent border border-secondary mb-3">
                                    <div class="card-body">
                                        <p class="mt-3">Pindai Kode QR di bawah dengan Aplikasi Mobile Banking atau
                                            E-wallet:</p>
                                        <img src="{{ asset('assets/img/elements/21.png') }}" alt="QR Code"
                                            style="max-width: 100%;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card shadow-none bg-transparent border border-secondary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Metode Pembayaran:</h5>
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logo_QRIS.svg"
                                                alt="QRIS" style="width: 60px; height: auto; margin-right: 10px;">
                                            <span>QRIS</span>
                                        </div>
                                        <hr>
                                        <p class="card-text">Jumlah Tiket: {{ $jumlahTiket }}</p>
                                        <p class="card-text">Total Harga: Rp {{ number_format($totalHarga, 0, ',', '.') }}
                                        </p>
                                        <hr>
                                        <p class="card-text">Status Pembayaran:
                                            @if ($pembayaran && $pembayaran->status_pembayaran == 'Pending')
                                                <button type="button" class="btn rounded-pill btn-secondary"
                                                    disabled>Pending</button>
                                            @else
                                                <button type="button" class="btn rounded-pill btn-success"
                                                    disabled>Success</button>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 d-flex flex-column flex-md-row justify-content-center">
                            @if ($pembayaran && $pembayaran->status_pembayaran == 'Pending')
                                <!-- Form untuk update status pembayaran -->
                                <form action="{{ route('payment.updateStatus', $pembayaran->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn rounded-pill btn-info mb-2 mb-md-0 me-md-2">Cek Status
                                        Pembayaran</button>
                                </form>
                            @endif
                            <a href="{{ route('daftar.tiket') }}" class="btn btn-secondary">Lihat Detail Transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
