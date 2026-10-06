@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2>Daftar Mata Kuliah</h2>

    <a href="/matakuliah/create" class="btn btn-primary mb-3">
        + Tambah Mata Kuliah
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mks as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        Belum ada data mata kuliah.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection