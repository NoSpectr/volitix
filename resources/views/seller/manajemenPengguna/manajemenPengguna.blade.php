@extends('seller.master')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h2 class="card-header">Manajemen Pengguna</h2>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="card-body">
                        <!-- Striped Rows -->
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @if ($users->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data yang ditampilkan.</td>
                                        </tr>
                                    @else
                                        @foreach ($users as $index => $user)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><strong>{{ $user->name }}</strong></td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ ucfirst($user->role) }}</td>
                                                <!-- Menampilkan role dengan huruf kapital pertama -->
                                                <td>
                                                    <a href="{{ route('edit-pengguna', $user->id) }}"
                                                        class="btn btn-outline-secondary">Edit</a>
                                                    <form action="{{ route('hapus-pengguna', $user->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
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
