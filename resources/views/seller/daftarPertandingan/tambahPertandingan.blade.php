@extends('seller.master')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Tambah Pertandingan</h5>
                    <div class="card-body">
                        <form action="{{ url('/tambah-pertandingan') }}" method="POST" enctype="multipart/form-data">
                            <!-- Tambahkan enctype -->
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- Form Inputs -->
                                    <div class="mb-3 row">
                                        <label for="gambar" class="col-md-4 col-form-label">Gambar (Thumbnail)</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="file" id="gambar" name="gambar"
                                                accept="image/*" /> <!-- Input untuk gambar -->
                                            <small class="form-text text-muted">Maksimal ukuran gambar 2MB.</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nama-pertandingan" class="col-md-4 col-form-label">Nama
                                            Pertandingan</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" id="nama-pertandingan"
                                                name="nama_event" placeholder="Masukkan nama pertandingan" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="lokasi" class="col-md-4 col-form-label">Lokasi</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" id="lokasi" name="lokasi"
                                                placeholder="Masukkan lokasi" required />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="tanggal-pertandingan" class="col-md-4 col-form-label">Tanggal
                                            Pertandingan</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="date" id="tanggal-pertandingan"
                                                name="tgl_event" required />
                                        </div>
                                    </div>
                                    
                                    <!-- Input untuk Jam Pertandingan -->
                                    <div class="mb-3 row">
                                        <label for="jam-pertandingan" class="col-md-4 col-form-label">Jam Pertandingan</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="time" id="jam-pertandingan" name="jam" required />
                                        </div>
                                    </div>

                                    <!-- Input untuk Deskripsi Pertandingan -->
                                    <div class="mb-3 row">
                                        <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi pertandingan"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="harga-tiket" class="col-md-4 col-form-label">Harga Tiket</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="number" id="harga-tiket" name="harga"
                                                placeholder="Masukkan harga tiket (Rupiah)" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="stock-tiket" class="col-md-4 col-form-label">Stock Tiket</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="number" id="stock-tiket" name="stock_tiket"
                                                placeholder="Masukkan jumlah stock tiket" required />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('daftar-pertandingan') }}"
                                                class="btn btn-secondary">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
