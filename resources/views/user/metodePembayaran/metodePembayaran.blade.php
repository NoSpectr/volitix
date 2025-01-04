@extends('user.user')

@section('content')
    <div class="container mt-5">
        <h4>Metode Pembayaran</h4>
        <div class="row">
            <!-- Kolom untuk Kartu Pembayaran -->
            <div class="col-md-8 mb-4">
                <!-- Kartu 1: Virtual Account -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Virtual Account</h5>
                        <div class="form-check">
                            <label class="form-check-label" for="bca" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="bca"
                                    value="BCA" style="margin-right: 10px;" />
                                <img src="https://assets.norbr.io/image/logo/BCA_whitebg.svg" alt="BCA"
                                    style="width: 60px; height: auto; margin-right: 10px;"> BCA
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="bri" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="bri"
                                    value="BRI" style="margin-right: 10px;" />
                                <img src="https://specials-images.forbesimg.com/dam/imageserve/66eb19d7812fe443fd87e06e/400x0.png?cropX1=70&cropX2=630&cropY1=70&cropY2=630"
                                    alt="BRI" style="width: 60px; height: auto; margin-right: 10px;"> BRI
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="mandiri" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="mandiri"
                                    value="Mandiri" style="margin-right: 10px;" />
                                <img src="https://assets.weforum.org/organization/image/responsive_small_webp_osz_gFWEiQc2wyKPtbyyBAMRJUG7zCnz4WW36QprKc4.webp"
                                    alt="Mandiri" style="width: 60px; height: auto; margin-right: 10px;"> Mandiri
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="bni" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="bni"
                                    value="BNI" style="margin-right: 10px;" />
                                <img src="https://assets.norbr.io/image/logo/BNI_whitebg.svg" alt="BNI"
                                    style="width: 60px; height: auto; margin-right: 10px;"> BNI
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="permata" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="permata"
                                    value="Permata" style="margin-right: 10px;" />
                                <img src="https://www.axway.com/sites/default/files/customers/Permata_Bank_logo_500x225_0.png"
                                    alt="Permata" style="width: 60px; height: auto; margin-right: 10px;"> Permata
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="bsi" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="bsi"
                                    value="BSI" style="margin-right: 10px;" />
                                <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/11/cara-membuat-rekening-bank-syariah-indonesia-bsi-secara-online-2024.webp"
                                    alt="BSI" style="width: 60px; height: auto; margin-right: 10px;"> BSI
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Kartu 2: E-wallet & QRIS -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">E-wallet & QRIS</h5>
                        <div class="form-check">
                            <label class="form-check-label" for="qris" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="qris"
                                    value="QRIS" style="margin-right: 10px;" />
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logo_QRIS.svg" alt="QRIS"
                                    style="width: 60px; height: auto; margin-right: 10px;"> QRIS
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="ovo" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="ovo"
                                    value="OVO" style="margin-right: 10px;" />
                                <img src="https://blob.cloudcomputing.id/images/a618a1e5-6218-4a40-bb86-a064bfb50469/logo-ovo-l-min.jpg"
                                    alt="OVO" style="width: 60px; height: auto; margin-right: 10px;"> OVO
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="dana" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="dana"
                                    value="DANA" style="margin-right: 10px;" />
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg"
                                    alt="DANA" style="width: 60px; height: auto; margin-right: 10px;"> DANA
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="shopeepay" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="shopeepay"
                                    value="SHOPEEPAY" style="margin-right: 10px;" />
                                <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01ggbphqep9hcjr829g4r5e6et.png"
                                    alt="SHOPEEPAY" style="width: 60px; height: auto; margin-right: 10px;"> SHOPEEPAY
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="linkaja" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="linkaja"
                                    value="LINKAJA" style="margin-right: 10px;" />
                                <img src="https://bewara.co.id/wp-content/uploads/2023/05/link-aja-e1684593519358.png"
                                    alt="LINKAJA" style="width: 60px; height: auto; margin-right: 10px;"> LINKAJA
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Kartu 3: Retail Outlets -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Retail Outlets</h5>
                        <div class="form-check">
                            <label class="form-check-label" for="indomaret" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="indomaret"
                                    value="Indomaret" style="margin-right: 10px;" />
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_Indomaret.png"
                                    alt="Indomaret" style="width: 60px; height: auto; margin-right: 10px;"> Indomaret
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="alfamaret" style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="alfamaret"
                                    value="Alfamaret" style="margin-right: 10px;" />
                                <img src="https://cdn.prod.website-files.com/64199d190fc7afa82666d89c/6491beeced5bfcd9b9608c44_alfamart.png"
                                    alt="Alfamaret" style="width: 60px; height: auto; margin-right: 10px;"> Alfamaret
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Kartu 4: Kartu Debit/Kredit -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Kartu Debit/Kredit</h5>
                        <div class="form-check">
                            <label class="form-check-label" for="credit_card"
                                style="display: flex; align-items: center;">
                                <input class="form-check-input" type="radio" name="payment_method" id="credit_card"
                                    value="Credit Card" style="margin-right: 10px;" />
                                <i class='bx bx-credit-card'></i> Credit Card
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom untuk Kartu Detail Pesanan -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Pesanan</h5>
                        <div class="row g-0 d-none d-md-flex">
                            <div class="col-md-4">
                                <img class="card-img" src="{{ asset('storage/' . $tiket->gambar) }}"
                                    alt="Gambar {{ $tiket->nama_event }}"
                                    style="object-fit: cover; height: 70%; margin-bottom: 70px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0">
                                    <h5 class="card-title">{{ $tiket->nama_event }}</h5>
                                    <p class="card-text">
                                        <i class="bx bx-calendar"></i>
                                        {{ \Carbon\Carbon::parse($tiket->tgl_event)->format('d F Y') }}<br>
                                        <i class="bx bx-map"></i> {{ $tiket->lokasi }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr class="d-none d-md-block">
                        <p class="mb-0 d-none d-md-block" id="jumlah-tiket-display">{{ $jumlahTiket }} Tiket di pesan</p>
                        <hr class="d-none d-md-block">
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Subtotal:</p>
                            <p class="mb-0" id="subtotal-harga"><strong>Rp
                                    {{ number_format($jumlahTiket * $tiket->harga, 0, ',', '.') }}</strong></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Admin:</p>
                            <p class="mb-0"><strong>Rp 2000</strong></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Total:</p>
                            <p class="mb-0" id="total-harga"><strong>Rp
                                    {{ number_format($jumlahTiket * $tiket->harga + 2000, 0, ',', '.') }}</strong>
                            </p>
                        </div>
                        <form id="payment-form" action="{{ route('payment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="id_tiket" value="{{ $tiket->id_tiket }}">
                            <input type="hidden" name="jumlah_tiket" value="{{ $jumlahTiket }}">
                            <input type="hidden" name="total_harga" value="{{ $jumlahTiket * $tiket->harga + 2000 }}">
                            <input type="hidden" name="payment_method" id="payment_method">
                            <!-- Input untuk metode pembayaran -->
                            <button type="submit" class="btn btn-primary" id="checkout">Bayar Sekarang</button>
                        </form>
                        <div id="error-message" class="text-danger mt-2" style="display: none;">Anda belum memilih metode
                            pembayaran!</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.getElementById('checkout').addEventListener('click', function(event) {
            const selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked');
            const errorMessage = document.getElementById('error-message');

            // Validasi untuk memastikan metode pembayaran dipilih
            if (!selectedPaymentMethod) {
                event.preventDefault(); // Mencegah pengiriman form
                errorMessage.style.display = 'block'; // Tampilkan pesan error
            } else {
                errorMessage.style.display = 'none'; // Sembunyikan pesan error jika ada metode yang dipilih
                // Update nilai payment_method di form
                document.getElementById('payment_method').value = selectedPaymentMethod.value;
            }

            // Validasi untuk memastikan metode pembayaran adalah QRIS
            if (selectedPaymentMethod && selectedPaymentMethod.value !== 'QRIS') {
                event.preventDefault(); // Mencegah pengiriman form
                alert('Pembayaran sekarang hanya bisa QRIS'); // Tampilkan pesan error
            }
        });
    </script>
@endsection
