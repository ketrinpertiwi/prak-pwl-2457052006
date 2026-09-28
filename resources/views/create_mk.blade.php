@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2>Tambah Mata Kuliah</h2>

    <form action="/matakuliah" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_mk" class="form-label">
                Nama Mata Kuliah
            </label>

            <input
                type="text"
                name="nama_mk"
                id="nama_mk"
                class="form-control"
                required
            >
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">
                SKS
            </label>

            <input
                type="number"
                name="sks"
                id="sks"
                class="form-control"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>

@endsection