<nav class="navbar navbar-expand-lg navbar-dark bg-navy sticky-top shadow-sm" style="background-color: #0c2340 !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 0.8rem 0;">
    <div class="container-fluid container-lg d-flex align-items-center justify-content-between" style="display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100%;">
        
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-white text-decoration-none m-0" href="{{ url('/user') }}" style="display: flex !important; align-items: center !important; gap: 10px; text-decoration: none; margin: 0;">
            <div class="brand-icon-box d-flex align-items-center justify-content-center bg-primary rounded-3 text-white" style="background-color: #0d6efd !important; border-radius: 8px; padding: 7px 10px; display: flex; align-items: center; justify-content: center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#ffffff" viewBox="0 0 16 16">
                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0 1 1v-2h.5a.5.5 0 0 0 .5-.5V7.4a.5.5 0 0 0-.211-.406z"/>
                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                </svg>
            </div>
            <div class="d-flex align-items-center gap-2" style="display: flex !important; align-items: center !important; gap: 8px;">
                <span style="color: #ffffff; font-weight: 800; font-size: 1.2rem; letter-spacing: -0.02em;">SIMASTER</span>
                <span class="badge bg-primary-subtle text-primary-emphasis border border-primary-subtle" style="background-color: rgba(224, 242, 254, 0.95) !important; color: #0369a1 !important; border: 1px solid #bae6fd !important; border-radius: 6px; padding: 4px 9px; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.03em;">FMIPA UNILA</span>
            </div>
        </a>

        <div class="d-flex align-items-center" style="display: flex !important; align-items: center !important;">
            <ul class="navbar-nav d-flex flex-row align-items-center gap-2 mb-0 ps-0" style="list-style: none !important; margin: 0; padding: 0; display: flex !important; flex-direction: row !important; align-items: center !important; gap: 10px;">
                <li class="nav-item" style="list-style: none !important; margin: 0;">
                    <a class="nav-link text-white px-3 py-2 rounded-2 {{ request()->is('/') || (request()->is('user') && !request()->is('user/create')) ? 'active fw-bold' : '' }}" href="{{ url('/user') }}" style="text-decoration: none; color: #ffffff !important; display: flex; align-items: center; gap: 6px; padding: 7px 14px; border-radius: 8px; font-size: 0.92rem; font-weight: 500;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/></svg>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item" style="list-style: none !important; margin: 0;">
                    <a class="nav-link text-white px-3 py-2 rounded-2 {{ request()->is('user') && !request()->is('user/create') ? 'active fw-bold' : '' }}" href="{{ url('/user') }}" style="text-decoration: none; color: #ffffff !important; display: flex; align-items: center; gap: 6px; padding: 7px 14px; border-radius: 8px; font-size: 0.92rem; font-weight: 500;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.004a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.72C2.312 10.629 3.282 10 5 10c.018 0 .036 0 .054.001A7 7 0 0 0 4.92 10M4.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5M6 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/></svg>
                        <span>Pengguna</span>
                    </a>
                </li>
                <li class="nav-item ms-1" style="list-style: none !important; margin: 0;">
                    <a class="btn btn-primary btn-sm px-3 py-2 rounded-pill fw-medium d-inline-flex align-items-center gap-1 shadow-sm text-white" href="{{ route('user.create') }}" style="background-color: #0d6efd !important; text-decoration: none; border: none; border-radius: 50rem; padding: 8px 18px; font-weight: 600; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 6px; color: #ffffff !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/><path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C8.844 9.034 8.243 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/></svg>
                        <span>Tambah Pengguna</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
