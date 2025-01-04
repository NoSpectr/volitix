@extends('user.user')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left" src="{{ asset('storage/' . $pertandingan->gambar) }}"
                                alt="Gambar {{ $pertandingan->nama_event }}" style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pertandingan->nama_event }}</h5>
                                <p class="card-text">
                                    {{ $pertandingan->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Pertandingan</h5>
                                <p class="card-text">
                                <div class="mb-1"> <!-- Menggunakan mb-1 untuk margin bawah yang lebih kecil -->
                                    <i class='bx bx-calendar'></i>
                                    {{ \Carbon\Carbon::parse($pertandingan->tanggal)->format('d F Y') }}
                                </div>
                                <div class="mb-1"> <!-- Menggunakan mb-1 untuk margin bawah yang lebih kecil -->
                                    <i class='bx bx-time'></i>
                                    {{ \Carbon\Carbon::parse($pertandingan->waktu)->format('H:i') }}
                                </div>
                                <div>
                                    <i class='bx bx-map'></i> {{ $pertandingan->lokasi }}
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Harga</h5>
                                <p class="card-text">
                                    Mulai dari: <strong>Rp {{ number_format($pertandingan->harga, 0, ',', '.') }}</strong>
                                </p>
                                <a href="{{ route('kategori.tiket', ['id' => $pertandingan->id_tiket]) }}" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
