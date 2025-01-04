@extends('seller.master')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h2 class="card-header">Daftar Pertandingan</h2>
                    <div class="card-body">
                        <a href="{{ route('tambah-pertandingan') }}" class="btn btn-outline-primary mb-3">Tambah
                            Pertandingan</a>
                        <!-- Striped Rows -->
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Pertandingan</th>
                                        <th>Tanggal Pertandingan</th>
                                        <th>Harga Tiket</th>
                                        <th>Stock Tiket</th>
                                        <th>Actions</th> <!-- Hapus kolom lokasi -->
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @if ($tikets->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data yang ditampilkan.</td>
                                        </tr>
                                    @else
                                        @foreach ($tikets as $index => $tiket)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($tiket->gambar)
                                                        <img src="{{ asset('storage/' . $tiket->gambar) }}"
                                                            alt="Gambar {{ $tiket->nama_event }}"
                                                            style="width: 100px; height: auto;">
                                                    @else
                                                        <span>Tidak ada gambar</span>
                                                    @endif
                                                </td>
                                                <td><strong>{{ $tiket->nama_event }}</strong></td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($tiket->tgl_event)->format('d-m-Y') }} 
                                                    {{ \Carbon\Carbon::parse($tiket->jam)->format('H:i') }}
                                                </td> <!-- Format tanggal dan jam -->
                                                <td>Rp. {{ number_format($tiket->harga, 2) }}</td>
                                                <td>{{ $tiket->stock_tiket }}</td>
                                                <td>
                                                    <a href="{{ route('edit-pertandingan', $tiket->id_tiket) }}"
                                                        class="btn btn-outline-secondary">Edit</a>
                                                    <form action="{{ route('hapus-pertandingan', $tiket->id_tiket) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus pertandingan ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!--/ Striped Rows -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
