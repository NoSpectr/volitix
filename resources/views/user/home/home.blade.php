@extends('user.user')

@section('content')
    <div class="container mt-5">
        <h4>Pertandingan</h4>
        <div class="row">
            @if ($tikets->isEmpty())
                <div class="col-12">
                    <p class="text-center">Tidak ada hasil untuk "{{ request()->input('query') }}"</p>
                </div>
            @else
                @foreach ($tikets as $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4"> <!-- Mengubah kelas kolom untuk responsivitas -->
                        <div class="card">
                            <a href="{{ route('detailPertandingan', $item->id_tiket) }}" class="text-dark">
                                <!-- Menambahkan link ke detail pertandingan -->
                                @if ($item->gambar)
                                    <img class="card-img-top" src="{{ asset('storage/' . $item->gambar) }}"
                                        alt="Gambar {{ $item->nama_event }}" style="height: 185px; object-fit: contain;" />
                                @else
                                    <img class="card-img-top" src="default-image.jpg" alt="Gambar tidak tersedia"
                                        style="height: 200px; object-fit: contain;" />
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nama_event }}</h5>
                                    <p class="card-text">{{ $item->lokasi }}</p> <!-- Menambahkan lokasi di sini -->
                                    <p class="card-text">
                                        {{ \Carbon\Carbon::parse($item->tgl_event)->translatedFormat('d F Y') }}</p>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <!-- Menggunakan Flexbox untuk tata letak -->
                                        <p class="mb-0">Mulai dari</p> <!-- Menghilangkan margin bawah -->
                                        <p class="mb-0"><b>Rp {{ number_format($item->harga, 0, ',', '.') }}</b></p>
                                        <!-- Menghilangkan margin bawah -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
