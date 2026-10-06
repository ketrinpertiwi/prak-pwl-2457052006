@extends('layouts.app')

@section('content')

<div class="container-fluid container-lg">
    <div style="display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 650px;">

            <div class="card card-custom" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 4px 16px rgba(12, 35, 64, 0.04); overflow: hidden;">
                <div style="background-color: #ffffff; padding: 24px 28px 0 28px; border-bottom: none;">
                    <div style="display: flex; align-items: center; gap: 14px;">
                        <div style="width: 48px; height: 48px; border-radius: 10px; background-color: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16"><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/><path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C8.844 9.034 8.243 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/></svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.35rem; font-weight: 700; color: #0c2340; margin: 0 0 2px 0;">Buat Pengguna Baru</h3>
                            <p style="color: #64748b; font-size: 0.88rem; margin: 0;">Isi formulir di bawah ini untuk menambahkan data mahasiswa baru.</p>
                        </div>
                    </div>
                </div>

                <div style="padding: 24px 28px 28px 28px;">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div style="margin-bottom: 18px;">
                            <label for="nama" style="font-weight: 600; color: #1e293b; font-size: 0.88rem; margin-bottom: 6px; display: block;">
                                Nama Lengkap <span style="color: #ef4444;">*</span>
                            </label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama mahasiswa" style="width: 100%; border: 1.5px solid #cbd5e1; border-radius: 8px; padding: 9px 12px; font-size: 0.92rem; color: #1e293b;" required>
                        </div>

                        <div style="margin-bottom: 18px;">
                            <label for="npm" style="font-weight: 600; color: #1e293b; font-size: 0.88rem; margin-bottom: 6px; display: block;">
                                NPM (Nomor Pokok Mahasiswa) <span style="color: #ef4444;">*</span>
                            </label>
                            <input type="text" name="npm" id="npm" class="form-control" placeholder="Contoh: 2457052006" style="width: 100%; border: 1.5px solid #cbd5e1; border-radius: 8px; padding: 9px 12px; font-size: 0.92rem; font-family: monospace; color: #1e293b;" required>
                        </div>

                        <div style="margin-bottom: 22px;">
                            <label for="kelas_id" style="font-weight: 600; color: #1e293b; font-size: 0.88rem; margin-bottom: 6px; display: block;">
                                Kelas Mahasiswa <span style="color: #ef4444;">*</span>
                            </label>
                            <select name="kelas_id" id="kelas_id" class="form-select" style="width: 100%; border: 1.5px solid #cbd5e1; border-radius: 8px; padding: 9px 12px; font-size: 0.92rem; color: #1e293b; background-color: #ffffff;" required>
                                <option value="" disabled selected>-- Pilih Kelas Mahasiswa --</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            <div style="font-size: 0.78rem; color: #64748b; margin-top: 5px;">
                                Data kelas diambil secara langsung dari database sistem.
                            </div>
                        </div>

                        <hr style="border: 0; border-top: 1px solid #f1f5f9; margin: 20px 0;">

                        <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ url('/user') }}" style="background-color: #ffffff; color: #475569; border: 1.5px solid #cbd5e1; padding: 9px 18px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
                                Kembali ke Daftar
                            </a>

                            <button type="submit" class="btn btn-blue" style="background-color: #0d6efd !important; color: #ffffff !important; border: none; padding: 9px 20px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l4.992-5.99a.75.75 0 0 0-.01-1.05z"/></svg>
                                Simpan Data
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <div style="text-align: center; margin-top: 14px; color: #64748b; font-size: 0.82rem; display: flex; align-items: center; justify-content: center; gap: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#10b981" viewBox="0 0 16 16"><path d="M5.338 1.59a1 1 0 0 0-.418.252L.743 6.024a1 1 0 0 0-.053 1.341l3.5 4.5a1 1 0 0 0 1.25.295l7.5-4.5a1 1 0 0 0 .343-1.353l-3.5-4.5a1 1 0 0 0-.948-.417z"/><path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/></svg>
                SIMASTER FMIPA Universitas Lampung
            </div>

        </div>
    </div>
</div>

@endsection