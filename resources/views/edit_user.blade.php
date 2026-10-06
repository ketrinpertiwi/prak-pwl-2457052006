@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2>Edit Pengguna</h2>

    <form action="{{ url('/user/' . $user->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">
                Nama Mahasiswa
            </label>

            <input
                type="text"
                name="nama"
                id="nama"
                class="form-control"
                value="{{ $user->name }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">
                NPM
            </label>

            <input
                type="text"
                name="npm"
                id="npm"
                class="form-control"
                value="{{ $user->nim }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">
                Kelas
            </label>

            <select
                name="kelas_id"
                id="kelas_id"
                class="form-select"
                required
            >
                @foreach ($kelas as $k)
                    <option
                        value="{{ $k->id }}"
                        {{ $user->kelas_id == $k->id ? 'selected' : '' }}
                    >
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="/user" class="btn btn-secondary">
            Batal
        </a>

    </form>

</div>

@endsection