@extends('layouts.app')

@section('content')

<div class="container-fluid container-lg">
    
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 gap-3" style="display: flex !important; flex-direction: row !important; align-items: center !important; justify-content: space-between !important; width: 100%;">
        <div>
            <h2 class="fw-bold mb-1" style="font-size: 1.65rem; font-weight: 800; color: #0c2340; letter-spacing: -0.02em; margin: 0;">
                Daftar Pengguna
            </h2>
            <p class="text-muted mb-0" style="color: #64748b; font-size: 0.92rem; margin-top: 4px;">
                Kelola data pengguna mahasiswa FMIPA Universitas Lampung dengan mudah.
            </p>
        </div>

        <div>
            <a href="{{ route('user.create') }}" class="btn btn-blue shadow-sm" style="background-color: #0d6efd !important; color: #ffffff !important; text-decoration: none; padding: 9px 18px; border-radius: 8px; font-weight: 600; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/></svg>
                <span>Tambah Pengguna</span>
            </a>
        </div>
    </div>

    <div class="row g-3 mb-4" style="display: flex; flex-wrap: wrap; margin-right: -8px; margin-left: -8px;">
        <div class="col-12 col-md-4" style="padding-right: 8px; padding-left: 8px; flex: 1 0 0%;">
            <div class="stat-card d-flex align-items-center gap-3" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px 20px; display: flex !important; align-items: center !important; gap: 16px;">
                <div class="rounded-3 bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; border-radius: 10px; background-color: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.004a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.72C2.312 10.629 3.282 10 5 10c.018 0 .036 0 .054.001A7 7 0 0 0 4.92 10M4.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5M6 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/></svg>
                </div>
                <div>
                    <div style="font-size: 0.8rem; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.03em;">Total Mahasiswa</div>
                    <div style="font-size: 1.4rem; font-weight: 800; color: #0c2340; line-height: 1.2;">{{ count($users) }} <span style="font-size: 0.85rem; font-weight: 500; color: #64748b;">Orang</span></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4" style="padding-right: 8px; padding-left: 8px; flex: 1 0 0%;">
            <div class="stat-card d-flex align-items-center gap-3" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px 20px; display: flex !important; align-items: center !important; gap: 16px;">
                <div class="rounded-3 bg-success-subtle text-success d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; border-radius: 10px; background-color: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0 1 1v-2h.5a.5.5 0 0 0 .5-.5V7.4a.5.5 0 0 0-.211-.406z"/></svg>
                </div>
                <div>
                    <div style="font-size: 0.8rem; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.03em;">Jurusan</div>
                    <div style="font-size: 1.15rem; font-weight: 700; color: #0c2340; line-height: 1.2;">Sistem Informasi</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4" style="padding-right: 8px; padding-left: 8px; flex: 1 0 0%;">
            <div class="stat-card d-flex align-items-center gap-3" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px 20px; display: flex !important; align-items: center !important; gap: 16px;">
                <div class="rounded-3 bg-purple-subtle text-purple d-flex align-items-center justify-content-center" style="width: 46px; height: 46px; border-radius: 10px; background-color: #f3e8ff; color: #9333ea; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.5-3.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5m-3-1a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M4 1v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V1H4zm5 3H5V2h4v2z"/><path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h.5v2a3 3 0 0 0 3 3h2a3 3 0 0 0 3-3V2h.5A1.5 1.5 0 0 1 13 3.5v7.24a4.5 4.5 0 0 0-1-.24V7.5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h4.15a4.5 4.5 0 0 0 .35 1H2.5A1.5 1.5 0 0 1 1 12.5v-9z"/></svg>
                </div>
                <div>
                    <div style="font-size: 0.8rem; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.03em;">Fakultas</div>
                    <div style="font-size: 1.15rem; font-weight: 700; color: #0c2340; line-height: 1.2;">FMIPA UNILA</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-custom" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 4px 16px rgba(12, 35, 64, 0.04); overflow: hidden;">
        <div style="padding: 16px 24px; border-bottom: 1px solid #f1f5f9; display: flex; align-items: center; justify-content: space-between; background-color: #ffffff;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#0d6efd" viewBox="0 0 16 16"><path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h4zM10 2H6v3h4zm0 4H6v3h4zm0 4H6v3h4zM5 2H1v3h4zm0 4H1v3h4zm0 4H1v3h4z"/></svg>
                <span style="font-weight: 700; color: #0c2340; font-size: 0.95rem;">Tabel Data Pengguna Mahasiswa</span>
            </div>
            <span style="font-size: 0.82rem; color: #64748b; font-weight: 500;">FMIPA UNILA</span>
        </div>

        <div class="card-body p-0" style="padding: 0;">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-custom align-middle" style="width: 100%; border-collapse: collapse; margin-bottom: 0;">
                    <thead>
                        <tr style="background-color: #0c2340; color: #ffffff;">
                            <th scope="col" style="width: 70px; text-align: center; padding: 12px 16px; background-color: #0c2340; color: #ffffff; font-weight: 600; font-size: 0.85rem;">ID</th>
                            <th scope="col" style="padding: 12px 16px; background-color: #0c2340; color: #ffffff; font-weight: 600; font-size: 0.85rem;">Nama Mahasiswa</th>
                            <th scope="col" style="width: 180px; padding: 12px 16px; background-color: #0c2340; color: #ffffff; font-weight: 600; font-size: 0.85rem;">NPM</th>
                            <th scope="col" style="width: 140px; text-align: center; padding: 12px 16px; background-color: #0c2340; color: #ffffff; font-weight: 600; font-size: 0.85rem;">Kelas</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                            @php
                                $kelasUpper = strtoupper(trim($user->nama_kelas ?? ''));
                                $badgeStyle = match(true) {
                                    str_contains($kelasUpper, 'A') => 'background-color: #e0f2fe !important; color: #0369a1 !important; border: 1px solid #bae6fd !important;',
                                    str_contains($kelasUpper, 'B') => 'background-color: #dcfce7 !important; color: #15803d !important; border: 1px solid #bbf7d0 !important;',
                                    str_contains($kelasUpper, 'C') => 'background-color: #f3e8ff !important; color: #6b21a8 !important; border: 1px solid #e9d5ff !important;',
                                    default => 'background-color: #e2e8f0 !important; color: #334155 !important; border: 1px solid #cbd5e1 !important;',
                                };
                            @endphp
                            <tr style="border-bottom: 1px solid #f1f5f9;">
                                <td style="text-align: center; padding: 12px 16px; color: #64748b; font-family: monospace; font-weight: 600; font-size: 0.9rem;">
                                    #{{ $user->id }}
                                </td>
                                <td style="padding: 12px 16px;">
                                    <div style="display: flex; align-items: center; gap: 10px; flex-direction: row;">
                                        <div style="width: 36px; height: 36px; border-radius: 50%; background-color: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.9rem; flex-shrink: 0;">
                                            {{ strtoupper(substr($user->nama ?? 'U', 0, 1)) }}
                                        </div>
                                        <div style="font-weight: 600; color: #1e293b; font-size: 0.92rem;">
                                            {{ $user->nama }}
                                        </div>
                                    </div>
                                </td>
                                <td style="padding: 12px 16px;">
                                    <span style="font-family: monospace; background-color: #f8fafc; padding: 4px 10px; border-radius: 6px; border: 1px solid #e2e8f0; color: #1e293b; font-size: 0.88rem; display: inline-flex; align-items: center; gap: 6px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#0d6efd" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm14 3H1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/><path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/></svg>
                                        {{ $user->nim }}
                                    </span>
                                </td>
                                <td style="text-align: center; padding: 12px 16px;">
                                    <span style="display: inline-flex; align-items: center; gap: 5px; padding: 4px 11px; border-radius: 50rem; font-weight: 600; font-size: 0.78rem; {{ $badgeStyle }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/></svg>
                                        {{ $user->nama_kelas }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" style="text-align: center; padding: 36px 16px; color: #64748b;">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#cbd5e1" viewBox="0 0 16 16" style="margin-bottom: 10px;"><path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .109.312l-.5 4A1.5 1.5 0 0 1 14.014 14H1.986a1.5 1.5 0 0 1-1.49-1.375l-.5-4a.5.5 0 0 1 .11-.312z"/></svg>
                                        <h6 style="font-weight: 600; color: #1e293b; margin-bottom: 4px;">Belum Ada Data Pengguna</h6>
                                        <p style="color: #64748b; font-size: 0.88rem; margin-bottom: 14px;">Silakan tambahkan data pengguna mahasiswa melalui tombol di atas.</p>
                                        <a href="{{ route('user.create') }}" class="btn btn-blue" style="font-size: 0.85rem; padding: 6px 16px;">
                                            Tambah Pengguna Baru
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if(count($users) > 0)
        <div style="background-color: #ffffff; padding: 12px 20px; border-top: 1px solid #f1f5f9; display: flex; align-items: center; justify-content: space-between; font-size: 0.84rem; color: #64748b;">
            <span>Total Pengguna: <strong style="color: #0c2340;">{{ count($users) }} Mahasiswa</strong></span>
            <span style="display: flex; align-items: center; gap: 4px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#0d6efd" viewBox="0 0 16 16"><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/></svg>
                Data tersimpan di database PostgreSQL
            </span>
        </div>
        @endif
    </div>

</div>

@endsection