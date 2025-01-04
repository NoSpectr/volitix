@extends('seller.master')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h2 class="card-header">Daftar Penjualan Tiket</h2>
                    <div class="card-body">
                        <!-- Dropdown untuk Tahun dan Bulan -->
                        <div class="mb-3">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih Tahun
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach ($years as $year)
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData('{{ $year }}', null)">{{ $year }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih Bulan
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach ($months as $index => $month)
                                        <li><a class="dropdown-item" href="javascript:void(0);"
                                                onclick="filterData(null, '{{ $index + 1 }}')">{{ $month }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Event</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Total Harga</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Status Pembayaran</th> <!-- Menambahkan kolom Status Pembayaran -->
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @php
                                        $totalSemua = 0; // Inisialisasi total semua
                                    @endphp
                                    @if ($pembayaran->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data yang ditampilkan.</td>
                                        </tr>
                                    @else
                                        @foreach ($pembayaran as $index => $item)
                                            @php
                                                $tiket = \App\Models\ModelTiket::find($item->id_tiket);
                                                // Tambahkan total harga hanya jika status pembayaran "Success"
                                                if ($item->status_pembayaran == 'Success') {
                                                    $totalSemua += $item->total_harga;
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($tiket && $tiket->gambar)
                                                        <img src="{{ asset('storage/' . $tiket->gambar) }}"
                                                            alt="Gambar {{ $tiket->nama_event }}"
                                                            style="width: 100px; height: auto;">
                                                    @else
                                                        <span>Tidak ada gambar</span>
                                                    @endif
                                                </td>
                                                <td><strong>{{ $tiket->nama_event ?? 'Event tidak ditemukan' }}</strong>
                                                </td>
                                                <td>{{ $item->jumlah_tiket }}</td>
                                                <td>Rp. {{ number_format($item->total_harga, 2, ',', '.') }}</td>
                                                <td>{{ $item->metode_pembayaran }}</td>
                                                <td>
                                                    @if ($item->status_pembayaran == 'Success')
                                                        <span class="badge bg-success">Sukses</span>
                                                    @elseif ($item->status_pembayaran == 'Pending')
                                                        <span class="badge bg-warning">Pending</span>
                                                    @else
                                                        <span class="badge bg-secondary">Menunggu</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Total Semua (Sukses):</strong></td>
                                        <td>Rp. {{ number_format($totalSemua, 2, ',', '.') }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        <!--/ Striped Rows -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <script>
        function filterData(year, month) {
            // Buat URL untuk mengirim permintaan ke server
            let url = '{{ route('penjualan-tiket') }}'; // Ganti dengan rute yang sesuai
            let params = new URLSearchParams();

            if (year) {
                params.append('year', year);
            }
            if (month) {
                params.append('month', month);
            }

            // Mengambil data dengan AJAX
            fetch(url + '?' + params.toString())
                .then(response => response.json())
                .then(data => {
                    // Update tabel dengan data baru
                    // Anda perlu menyesuaikan bagian ini untuk memperbarui tabel dengan data yang diterima
                    console.log(data);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
