@extends('user.user')

@section('content')
    <div class="container mt-5">
        <h4>Kategori Tiket</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Normal</h5>
                            <strong id="harga-tiket">Rp {{ number_format($pertandingan->harga, 0, ',', '.') }}</strong>
                        </div>
                        <div class="btn-group" role="group" aria-label="Tiket Group" id="tiket-controls">
                            <button type="button" class="btn btn-outline-secondary" id="kurang-tiket">-</button>
                            <span class="btn btn-outline-secondary" id="jumlah-tiket">0</span>
                            <button type="button" class="btn btn-outline-secondary" id="tambah-tiket">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0 d-none d-md-flex">
                            <h5 class="card-title">Detail Pesanan</h5>
                            <div class="col-md-4">
                                <img class="card-img" src="{{ asset('storage/' . $pertandingan->gambar) }}"
                                    alt="Gambar {{ $pertandingan->nama_event }}"
                                    style="object-fit: cover; height: 80%; margin-bottom: 30px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0">
                                    <h5 class="card-title">{{ $pertandingan->nama_event }}</h5>
                                    <p class="card-text">
                                        <i class="bx bx-calendar"></i>
                                        {{ \Carbon\Carbon::parse($pertandingan->tanggal)->format('d F Y') }}<br>
                                        <i class="bx bx-map"></i> {{ $pertandingan->lokasi }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="d-none d-md-block">
                        <p class="mb-0 d-none d-md-block" id="jumlah-tiket-display">0 Tiket di pesan</p>
                        <hr class="d-none d-md-block">
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Total:</p>
                            <p class="mb-0" id="total-harga"><strong>Rp 0</strong></p>
                        </div>

                        <form id="checkout-form" action="{{ route('metodePembayaran') }}" method="POST">
                            @csrf
                            <input type="hidden" id="jumlah-tiket-input" name="jumlah_tiket" value="0">
                            <input type="hidden" name="pertandingan_id" value="{{ $pertandingan->id_tiket }}">
                            <input type="hidden" name="payment_method" id="payment-method-input" value="QRIS">
                            <button type="submit" class="btn btn-primary w-100 mt-2" id="checkout" disabled>Pilih Pembayaran</button>
                            <div id="error-message" class="text-danger mt-2" style="display: none;">Anda belum menambahkan tiket.</div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const tambahTiketButton = document.getElementById('tambah-tiket');
        const kurangTiketButton = document.getElementById('kurang-tiket');
        const jumlahTiketElement = document.getElementById('jumlah-tiket');
        const totalHargaElement = document.getElementById('total-harga');
        const hargaTiketElement = document.getElementById('harga-tiket');
        const jumlahTiketDisplay = document.getElementById('jumlah-tiket-display');
        const jumlahTiketInput = document.getElementById('jumlah-tiket-input');
        const checkoutButton = document.getElementById('checkout');
        const errorMessage = document.getElementById('error-message');

        let jumlahTiket = 0;
        const hargaTiket = parseInt(hargaTiketElement.innerText.replace(/[^0-9]/g, ''), 10);

        function updateDisplay() {
            jumlahTiketElement.innerText = jumlahTiket;
            jumlahTiketDisplay.innerText = `${jumlahTiket} Tiket di pesan`;
            const totalHarga = jumlahTiket * hargaTiket;
            totalHargaElement.innerHTML = `<strong>Rp ${totalHarga.toLocaleString()}</strong>`;
            jumlahTiketInput.value = jumlahTiket;

            if (jumlahTiket < 1) {
                checkoutButton.disabled = true;
                errorMessage.style.display = 'block';
            } else {
                checkoutButton.disabled = false;
                errorMessage.style.display = 'none';
            }
        }

        tambahTiketButton.addEventListener('click', () => {
            jumlahTiket++;
            updateDisplay();
        });

        kurangTiketButton.addEventListener('click', () => {
            if (jumlahTiket > 0) {
                jumlahTiket--;
                updateDisplay();
            }
        });
    </script>
@endsection
