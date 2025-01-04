@extends('seller.master')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang Kembali, {{ Auth::user()->name }}! 🎉</h5>
                                <p class="mb-4">
                                    Siapkan diri Anda untuk pengalaman seru di dunia bola voli dan mari kita buat acara yang
                                    tak terlupakan bersama!
                                </p>
                                <a href="{{ url('tambah-pertandingan') }}" class="btn btn-sm btn-outline-primary">Buat
                                    Pertandingan</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 order-3 order-md-2">
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="50"
                                            height="50" id="fi_2693507">
                                            <g id="Calendar">
                                                <path
                                                    d="M57,8H52V6a4,4,0,0,0-8,0V8H36V6a4,4,0,0,0-8,0V8H20V6a4,4,0,0,0-8,0V8H7a5,5,0,0,0-5,5V53a5,5,0,0,0,5,5H35a1,1,0,0,0,0-2H7a3.009,3.009,0,0,1-3-3V22H60V39a1,1,0,0,0,2,0V13A5,5,0,0,0,57,8ZM46,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM30,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM14,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM60,20H4V13a3.009,3.009,0,0,1,3-3h5v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h5a3.009,3.009,0,0,1,3,3Z">
                                                </path>
                                                <path
                                                    d="M30,29a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z">
                                                </path>
                                                <path
                                                    d="M18,29a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z">
                                                </path>
                                                <path
                                                    d="M52,34a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H48a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2Zm-4-5h4v3H48Z">
                                                </path>
                                                <path
                                                    d="M30,38a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z">
                                                </path>
                                                <path
                                                    d="M18,38a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z">
                                                </path>
                                                <path
                                                    d="M28,45H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,28,45Zm-4,5V47h4v3Z">
                                                </path>
                                                <path
                                                    d="M36,34h4a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H36a2,2,0,0,0-2,2v3A2,2,0,0,0,36,34Zm0-5h4v3H36Z">
                                                </path>
                                                <path
                                                    d="M34,41a2,2,0,0,0,2,2,1,1,0,0,0,0-2V38h4a1,1,0,0,0,0-2H36a2,2,0,0,0-2,2Z">
                                                </path>
                                                <path
                                                    d="M16,45H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,16,45Zm-4,5V47h4v3Z">
                                                </path>
                                                <path
                                                    d="M49,36A13,13,0,1,0,62,49,13.015,13.015,0,0,0,49,36Zm0,24A11,11,0,1,1,60,49,11.013,11.013,0,0,1,49,60Z">
                                                </path>
                                                <path
                                                    d="M54.778,44.808,47,52.586,43.465,49.05a1,1,0,0,0-1.414,1.414l4.242,4.243a1,1,0,0,0,1.414,0l8.485-8.485a1,1,0,0,0-1.414-1.414Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Jumlah Pertandingan Aktif</span>
                                <h3 class="card-title text-nowrap mb-2">{{ $jumlahEventAktif }} Pertandingan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4"> <!-- Gunakan col-12 untuk mobile dan col-md-4 untuk desktop -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <svg id="fi_2067046" enable-background="new 0 0 128 128" height="50"
                                            viewBox="0 0 128 128" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m121.5 64c1 0 1.7-.8 1.8-1.7v-21.8c0-1-.8-1.7-1.8-1.8h-4.8l-2.1-14.3c-.1-1-1-1.6-2-1.5l-27.1 4h-.1l-79.2 11.9s-1.5.3-1.5 1.7v21.7c0 1 .8 1.7 1.7 1.8 4.4 0 7.9 3.5 7.9 7.9s-3.5 7.9-7.9 7.9c-1 0-1.7.8-1.8 1.7v21.7c0 1 .8 1.7 1.8 1.8h115c1 0 1.7-.8 1.8-1.8v-21.6c0-1-.8-1.7-1.7-1.8-4.4 0-7.9-3.5-7.9-7.9s3.5-7.9 7.9-7.9zm-37.3-33.3.7 4.7c.1.9.9 1.5 1.7 1.5h.3c1-.1 1.6-1 1.5-2l-.7-4.7 23.7-3.5 1.8 12.1h-83.1zm35.6 52.5v18.4h-25.9v-4.8c0-1-.8-1.8-1.8-1.8s-1.8.8-1.8 1.8v4.8h-82v-18.4c6.2-1 10.5-6.8 9.5-13-.8-4.9-4.6-8.8-9.5-9.5v-18.4h82.1v4.7c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-4.8h25.9v18.4c-6.2 1-10.5 6.8-9.5 13 .6 5 4.4 8.8 9.4 9.6z">
                                            </path>
                                            <path
                                                d="m92.1 74.6c-1 0-1.7.8-1.8 1.7v11.6c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-11.5c0-1-.8-1.8-1.8-1.8z">
                                            </path>
                                            <path
                                                d="m92.1 54.2c-1 0-1.7.8-1.8 1.7v11.6c0 1 .8 1.8 1.8 1.8s1.8-.8 1.8-1.8v-11.6c0-.9-.8-1.7-1.8-1.7z">
                                            </path>
                                            <path
                                                d="m27.3 57h21.7c1 0 1.8-.8 1.8-1.8s-.8-1.7-1.8-1.7h-21.7c-1 0-1.8.8-1.8 1.8s.8 1.7 1.8 1.7z">
                                            </path>
                                            <path
                                                d="m70.7 64.6h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                            </path>
                                            <path
                                                d="m70.7 75.7h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                            </path>
                                            <path
                                                d="m70.7 86.8h-43.4c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8h43.4c1 0 1.8-.8 1.8-1.8s-.8-1.8-1.8-1.8z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Jumlah Tiket Terjual</span>
                                <h3 class="card-title mb-2">{{ number_format($jumlahPembayaranSuccess, 0, ',', '.') }}
                                    Tiket Terjual</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4"> <!-- Gunakan col-12 untuk mobile dan col-md-4 untuk desktop -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="fi_4221516" viewBox="0 0 512 512"
                                            width="50" height="50">
                                            <path
                                                d="M488,144H440a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V152A8,8,0,0,0,488,144Zm-8,304H448V160h32Z">
                                            </path>
                                            <path
                                                d="M408,464a8,8,0,0,0,8-8V216a8,8,0,0,0-8-8H360a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM368,224h32V448H368Z">
                                            </path>
                                            <path
                                                d="M328,464a8,8,0,0,0,8-8V272a8,8,0,0,0-8-8H280a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM288,280h32V448H288Z">
                                            </path>
                                            <path
                                                d="M248,464a8,8,0,0,0,8-8V336a8,8,0,0,0-8-8H200a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM208,344h32V448H208Z">
                                            </path>
                                            <path
                                                d="M168,464a8,8,0,0,0,8-8V368a8,8,0,0,0-8-8H120a8,8,0,0,0-8,8v88a8,8,0,0,0,8,8Zm-40-88h32v72H128Z">
                                            </path>
                                            <path
                                                d="M88,464a8,8,0,0,0,8-8V408a8,8,0,0,0-8-8H40a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8ZM48,416H80v32H48Z">
                                            </path>
                                            <path
                                                d="M216,144h16a8,8,0,0,0,0-16h-8v-8a8,8,0,0,0-16,0v9.376A24,24,0,0,0,216,176a8,8,0,0,1,0,16H200a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-9.376A24,24,0,0,0,216,160a8,8,0,0,1,0-16Z">
                                            </path>
                                            <path
                                                d="M488,48H440a8,8,0,0,0,0,16h28.686l-112,112H311.664c.219-2.639.336-5.306.336-8a96,96,0,1,0-113.677,94.362L164.687,296H104a8,8,0,0,0-5.657,2.343l-80,80a8,8,0,0,0,11.314,11.314L107.313,312H168a8,8,0,0,0,5.657-2.343l45.723-45.723A96.19,96.19,0,0,0,308.963,192H360a8,8,0,0,0,5.657-2.343L480,75.314V104a8,8,0,0,0,16,0V56A8,8,0,0,0,488,48ZM216,248a80,80,0,1,1,80-80A80.091,80.091,0,0,1,216,248Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Total Penjualan</span>
                                <h3 class="card-title text-nowrap mb-2">Rp.
                                    {{ number_format($totalPenjualan, 0, ',', '.') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
