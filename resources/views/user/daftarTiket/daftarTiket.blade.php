@extends('user.user')

@section('content')
    <div class="container mt-5">
        <h4>Daftar Tiket</h4>

        <!-- Tabs -->
        <div class="row">
            <div class="col-xl-12">
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#eventMendatang" aria-controls="eventMendatang" aria-selected="true">
                                Event Mendatang
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#eventBerlalu" aria-controls="eventBerlalu" aria-selected="false">
                                Event Berlalu
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="eventMendatang" role="tabpanel">
                            <div class="row">
                                @if ($pembayaranMendatang->isEmpty())
                                    <div class="col-12">
                                        <div class="alert alert-info" role="alert">
                                            Belum Ada Tiket yang Dibeli
                                        </div>
                                    </div>
                                @else
                                    @foreach ($pembayaranMendatang as $item)
                                        @php
                                            $pertandingan = \App\Models\ModelTiket::find($item->id_tiket);
                                        @endphp
                                        <div class="col-12 mb-4">
                                            <div class="card shadow-none bg-transparent border border-secondary mb-3">
                                                <div class="card-body">
                                                    <div class="row g-0 d-flex">
                                                        <div class="col-12 col-md-4">
                                                            <img class="card-img"
                                                                src="{{ asset('storage/' . $pertandingan->gambar) }}"
                                                                alt="Gambar {{ $pertandingan->nama_event }}"
                                                                style="object-fit: cover;" class="responsive-img">
                                                        </div>
                                                        <div class="col-12 col-md-8">
                                                            <div class="card-body pt-0">
                                                                <h5 class="card-title mobile-padding">
                                                                    {{ $pertandingan->nama_event }}</h5>
                                                                <p class="card-text mb-0">
                                                                    <i class="bx bx-calendar"></i>
                                                                    {{ \Carbon\Carbon::parse($pertandingan->tgl_event)->format('d F Y') }}<br>
                                                                    <i class="bx bx-map"></i>
                                                                    {{ $pertandingan->lokasi }}<br>
                                                                    <strong>Jumlah Tiket: {{ $item->jumlah_tiket }}</strong>
                                                                </p>
                                                                <div class="mt-2">
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-bs-toggle="offcanvas"
                                                                        data-bs-target="#offcanvasEticket{{ $item->id }}"
                                                                        aria-controls="offcanvasEticket{{ $item->id }}">
                                                                        Lihat E-ticket
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Offcanvas untuk E-ticket -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1"
                                            id="offcanvasEticket{{ $item->id }}"
                                            aria-labelledby="offcanvasEticketLabel{{ $item->id }}">
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <center>
                                                    <h5 id="offcanvasEticketLabel{{ $item->id }}"
                                                        class="offcanvas-title">
                                                        Berikut adalah E-ticket Anda:
                                                    </h5>
                                                    <img src="{{ asset('assets/img/elements/21.png') }}" alt="QR Code"
                                                        style="max-width: 50%;">
                                                </center>
                                                <button type="button" class="btn btn-outline-secondary d-grid w-100"
                                                    data-bs-dismiss="offcanvas">Continue</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane fade" id="eventBerlalu" role="tabpanel">
                            <div class="row">
                                @if ($pembayaranBerlalu->isEmpty())
                                    <div class="col-12">
                                        <div class="alert alert-info" role="alert">
                                            Belum Ada Tiket yang Dibeli
                                        </div>
                                    </div>
                                @else
                                    @foreach ($pembayaranBerlalu as $item)
                                        @php
                                            $pertandingan = \App\Models\ModelTiket::find($item->id_tiket);
                                        @endphp
                                        <div class="col-12 mb-4">
                                            <div class="card shadow-none bg-transparent border border-secondary mb-3">
                                                <div class="card-body d-flex">
                                                    <div class="col-12 col-md-4">
                                                        <img class="card-img"
                                                            src="{{ asset('storage/' . $pertandingan->gambar) }}"
                                                            alt="Gambar {{ $pertandingan->nama_event }}"
                                                            style="object-fit: cover;" class="responsive-img">
                                                    </div>
                                                    <div class="col-12 col-md-8 d-flex flex-column ms-3">
                                                        <h5 class="card-title mobile-padding">
                                                            {{ $pertandingan->nama_event }}</h5>
                                                        <p class="card-text">
                                                            <i class="bx bx-calendar"></i>
                                                            {{ \Carbon\Carbon::parse($pertandingan->tgl_event)->format('d F Y') }}<br>
                                                            <i class="bx bx-map"></i>
                                                            {{ $pertandingan->lokasi }}<br>
                                                            <strong>Jumlah Tiket: {{ $item->jumlah_tiket }}</strong>
                                                        </p>
                                                        <div class="mt-auto">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasEticket{{ $item->id }}"
                                                                aria-controls="offcanvasEticket{{ $item->id }}">
                                                                Lihat E-ticket
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Offcanvas untuk E-ticket -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1"
                                            id="offcanvasEticket{{ $item->id }}"
                                            aria-labelledby="offcanvasEticketLabel{{ $item->id }}">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasEticketLabel{{ $item->id }}" class="offcanvas-title">
                                                    Berikut adalah E-ticket Anda:
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <center>
                                                    <img src="{{ asset('assets/img/elements/21.png') }}" alt="QR Code"
                                                        style="max-width: 50%;">
                                                </center>
                                                <div class="mt-3">
                                                    <p><strong>Nama Event:</strong> {{ $pertandingan->nama_event }}</p>
                                                    <p><strong>Tanggal Event:</strong>
                                                        {{ \Carbon\Carbon::parse($pertandingan->tgl_event)->format('d F Y') }}
                                                    </p>
                                                    <p><strong>Jumlah Tiket:</strong> {{ $item->jumlah_tiket }}</p>
                                                    <p><strong>Total Harga:</strong> Rp
                                                        {{ number_format($item->total_harga, 0, ',', '.') }}</p>
                                                </div>
                                                <button type="button"
                                                    class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                                                <button type="button" class="btn btn-outline-secondary d-grid w-100"
                                                    data-bs-dismiss="offcanvas">Cancel</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* CSS untuk gambar responsif */
            .responsive-img {
                height: 180px;
                /* Default height untuk desktop */
                width: 80%;
                /* Default width untuk desktop */
            }

            @media (max-width: 768px) {
                .responsive-img {
                    height: 150px;
                    /* Height untuk mobile */
                    width: 100%;
                    /* Width untuk mobile */
                }
            }

            /* CSS untuk padding pada nama event di mobile */
            .mobile-padding {
                padding-top: 10px;
                /* Padding atas untuk mobile */
            }
        </style>
    @endsection
