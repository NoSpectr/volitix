<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>VoliTix</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="app-brand demo">
                            <a href="{{ url('home') }}" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <svg id="fi_4841005" enable-background="new 0 0 512 512" height="512"
                                        viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m507.645 208.745c-8.714-46.693-50.707-50.616-81.064-84.683-46.887-52.616-94.561-124.062-170.581-124.062-7.943 0-15.802.363-23.56 1.071-54.453 4.968-103.977 26.989-143.186 60.677l-64.811 283.606 22.49 58.417c30.383 42.908 73.641 76.054 124.149 93.808 26.573 9.341 61.375-42.135 91.14-42.135 103.123 0 177.292-18.72 226.333-92.283 15.047-32.6 23.445-68.899 23.445-107.161 0-16.144-1.497-31.939-4.355-47.255z"
                                                fill="#f1cd88"></path>
                                            <path
                                                d="m507.645 208.745-35.744 11.342c1.557 11.75 2.361 23.737 2.361 35.913 0 54.525-16.116 105.284-43.844 147.775l57.209-38.622c15.632-33.108 24.373-70.109 24.373-109.153 0-16.145-1.497-31.94-4.355-47.255z"
                                                fill="#ebb34c"></path>
                                            <path
                                                d="m461.356 103.121c.999 16.247-.706 43.684-9.19 57.581-5.43 8.894-18.648 9.228-29.73 11.894-35.14-61.203-86.412-114.226-151.931-152.065-12.486-7.211-25.188-13.691-38.065-19.46 7.757-.711 15.617-1.071 23.56-1.071 84.073 0 158.689 40.527 205.356 103.121z"
                                                fill="#717ed4"></path>
                                            <g fill="#5766cc">
                                                <path
                                                    d="m446.574 136.59c5.821-10.771 10.766-21.963 14.783-33.469-37.24-49.95-92.279-85.846-155.718-98.31-.513-.093-1.03-.182-1.536-.279 62.226 24.927 113.048 72.278 142.471 132.058z">
                                                </path>
                                                <path
                                                    d="m100.494 153.641c-11.386-7.709-23.407-13.395-38.515-13.719-13.747-.296-27.645 3.895-41.129 14.75-13.422 31.08-20.85 65.333-20.85 101.328 0 55.043 17.377 106.028 46.933 147.771-1.432-13.98-2.161-28.167-2.161-42.527 0-75.657 20.284-146.575 55.722-207.603z">
                                                </path>
                                                <path
                                                    d="m245.049 441.927c-9.467-25.085-14.659-52.282-14.659-80.684 0-5.182.175-10.322.525-15.422.785-11.862 34.776-27.522 37.306-38.821 4.34-19.376-10.444-40.472-1.523-57.645-16.473-25.827-49.093-41.96-75.919-59.916-31.822 49.562-50.273 108.53-50.273 171.803 0 48.779 10.971 95.004 30.575 136.335 26.579 9.345 55.157 14.423 84.919 14.423 10.044 0 19.955-.577 29.7-1.71-8.961-10.398-6.696-21.61-13.685-33.511-6.492-11.056-22.382-22.707-26.966-34.852z">
                                                </path>
                                            </g>
                                            <path
                                                d="m461.356 103.121c-8.736 25.023-21.809 48.594-38.92 69.475-16.988 20.748-37.952 38.828-62.542 53.034-4.492 2.586-9.035 5.007-13.619 7.252l-90.285 23.169c-14.124 27.186-22.942 57.566-25.075 89.77 58.823 2.792 119.12-10.714 173.915-42.351 42.268-24.405 76.833-57.042 102.814-94.726-7.283-39.053-23.438-74.975-46.288-105.623z"
                                                fill="#ddebfd"></path>
                                            <path
                                                d="m446.574 136.59c16.83 34.196 26.651 72.46 27.603 112.921 12.37-12.737 23.55-26.38 33.468-40.765-7.283-39.054-23.439-74.976-46.288-105.624-4.017 11.504-8.962 22.697-14.783 33.468z"
                                                fill="#bed9fd"></path>
                                            <path
                                                d="m452.692 386.38c-65.519 37.828-137.076 55.712-207.643 55.547 9.519 25.219 23.365 48.305 40.651 68.363 90.285-10.425 166.253-67.826 202.855-147.13-11.425 8.262-23.387 16.019-35.863 23.22z"
                                                fill="#ddebfd"></path>
                                            <path
                                                d="m435.405 395.818c-30.281 50.117-76.341 89.632-131.304 111.65 2.391-.455 4.848-.958 7.355-1.5 78.846-17.41 144.035-71.169 177.099-142.807-11.425 8.262-23.387 16.018-35.863 23.219-5.717 3.301-11.482 6.44-17.287 9.438z"
                                                fill="#bed9fd"></path>
                                            <path
                                                d="m222.643 103.44c-42.258-24.394-87.783-38.004-133.389-41.692-29.329 25.198-52.879 56.918-68.403 92.923 26.043-4.955 53.003-5.419 79.643-1.03 33.084 5.422 64.061 18.124 90.285 35.799 26.826 17.956 48.738 40.785 65.211 66.612 30.607-1.36 61.327-8.911 90.285-23.169-27.001-52.333-68.837-97.806-123.632-129.443z"
                                                fill="#717ed4"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="app-brand-text demo menu-text fw-bolder ms-2">VoliTix</span>
                            </a>

                            <a href="javascript:void(0);"
                                class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                                <i class="bx bx-chevron-left bx-sm align-middle"></i>
                            </a>
                        </div>
                        <!-- Search -->
                        <div class="navbar-nav align-items-center ms-3"> <!-- Tambahkan ms-3 untuk margin start -->
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <form action="{{ url('/search') }}" method="GET"> <!-- Tambahkan form -->
                                    <input type="text" name="query" class="form-control border-0 shadow-none"
                                        placeholder="Search..." aria-label="Search..." />
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('profile-user') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('daftar.tiket') }}">
                                            <i class='bx bx-map-alt me-2'></i>
                                            <span class="align-middle">Daftar Tiket</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <main id="main" class="main">
                        @yield('content')
                    </main>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-center py-2 flex-md-row flex-column text-center">
                            <div class="mb-2 mb-md-0">
                                VoliTix ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved by
                                <a href="https://github.com/NoSpectr" target="_blank"
                                    class="footer-link fw-bolder">ibnuu.s</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    <!-- Popper.js -->
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Menu JS -->
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Pastikan jQuery sudah dimuat -->
    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var query = $(this).val();

                if (query.length > 0) {
                    $.ajax({
                        url: '{{ url('/search') }}', // URL untuk pencarian
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            // Update hasil pencarian di halaman
                            $('#search-results').html(data);
                        },
                        error: function() {
                            console.log('Error occurred while searching.');
                        }
                    });
                } else {
                    // Jika input kosong, bersihkan hasil pencarian
                    $('#search-results').html('');
                }
            });
        });
    </script>
</body>

</html>
