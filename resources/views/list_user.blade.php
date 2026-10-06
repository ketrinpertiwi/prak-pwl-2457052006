@extends('layouts.app')

@section('content')

<div class="container-fluid container-lg">

    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">Daftar Pengguna</h2>
            <p class="text-muted mb-0">
                Kelola data pengguna mahasiswa FMIPA Universitas Lampung dengan mudah.
            </p>
        </div>

        <div>
            <a href="{{ route('user.create') }}" class="btn btn-primary">
                + Tambah Pengguna
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header">
            <strong>Tabel Data Pengguna Mahasiswa</strong>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th style="width: 70px; text-align: center;">ID</th>
                            <th>Nama Mahasiswa</th>
                            <th>NPM</th>
                            <th style="text-align: center;">Kelas</th>
                            <th style="width: 180px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($users as $user)

                            <tr>
                                <td style="text-align: center;">
                                    #{{ $user->id }}
                                </td>

                                <td>
                                    <strong>{{ $user->nama }}</strong>
                                </td>

                                <td>
                                    {{ $user->nim }}
                                </td>

                                <td style="text-align: center;">
                                    {{ $user->nama_kelas }}
                                </td>

                                <td style="text-align: center;">

                                    {{-- Tombol Edit --}}
                                    <a
                                        href="{{ url('/user/' . $user->id . '/edit') }}"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form
                                        action="{{ url('/user/' . $user->id) }}"
                                        method="POST"
                                        style="display: inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    Belum ada data pengguna.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>

        @if(count($users) > 0)

            <div class="card-footer d-flex justify-content-between">
                <span>
                    Total Pengguna:
                    <strong>{{ count($users) }} Mahasiswa</strong>
                </span>

                <span>
                    Data tersimpan di database PostgreSQL
                </span>
            </div>

        @endif

    </div>

</div>

@endsection