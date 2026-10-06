<!DOCTYPE html>
<html lang="id" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SIMASTER - Sistem Informasi Mahasiswa FMIPA UNILA' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: #f4f7fc;
            color: #1e293b;
            letter-spacing: -0.01em;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
        }

        .d-flex { display: flex !important; }
        .d-inline-flex { display: inline-flex !important; }
        .flex-column { flex-direction: column !important; }
        .flex-row { flex-direction: row !important; }
        .align-items-center { align-items: center !important; }
        .justify-content-between { justify-content: space-between !important; }
        .justify-content-center { justify-content: center !important; }

        ul.navbar-nav, .navbar-nav li, ul, li {
            list-style: none !important;
            list-style-type: none !important;
        }

        .bg-navy {
            background-color: #0c2340 !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 0.92rem;
            padding: 0.5rem 0.9rem;
            border-radius: 8px;
            text-decoration: none !important;
            transition: all 0.2s ease;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.12) !important;
        }

        .stat-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem;
            box-shadow: 0 2px 10px rgba(12, 35, 64, 0.03);
            transition: transform 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .card-custom {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(12, 35, 64, 0.04);
            overflow: hidden;
        }

        .table-custom {
            width: 100%;
            margin-bottom: 0;
            vertical-align: middle;
            border-collapse: collapse;
        }

        .table-custom thead th {
            background-color: #0c2340 !important;
            color: #ffffff !important;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            padding: 0.85rem 1.1rem;
            border: none;
            text-align: left;
        }

        .table-custom tbody tr {
            transition: background-color 0.15s ease;
            border-bottom: 1px solid #f1f5f9;
        }

        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }

        .table-custom tbody td {
            padding: 0.85rem 1.1rem;
            color: #334155;
            font-size: 0.92rem;
        }

        .badge-kelas {
            font-weight: 600;
            font-size: 0.78rem;
            padding: 0.35em 0.75em;
            border-radius: 50rem;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }

        .btn-blue {
            background-color: #0d6efd !important;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.6rem 1.25rem;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-blue:hover {
            background-color: #0b5ed7 !important;
            color: #ffffff !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main class="py-4 py-md-5">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXcS5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>