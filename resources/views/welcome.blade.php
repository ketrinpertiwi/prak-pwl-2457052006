<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            background: #FDFDFC;
            color: #1b1b18;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
        }

        .container {
            width: 100%;
            max-width: 1024px;
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 0 1px rgba(26, 26, 0, 0.16);
        }

        .left {
            flex: 1;
            padding: 80px;
            background: white;
            min-height: 445px;
        }

        .right {
            width: 438px;
            background: #fff2f2;
            position: relative;
            overflow: hidden;
            min-height: 445px;
        }

        .nama {
            font-size: 13px;
            line-height: 20px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .judul {
            font-size: 13px;
            line-height: 20px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .deskripsi {
            font-size: 13px;
            line-height: 20px;
            color: #706f6c;
            margin-top: 0;
            margin-bottom: 8px;
        }

        .petunjuk {
            list-style: none;
            padding: 0;
            margin: 0 0 24px 0;
        }

        .petunjuk li {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 8px 0;
            font-size: 13px;
            line-height: 20px;
        }

        .bulatan {
            width: 14px;
            height: 14px;
            border: 1px solid #e3e3e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .bulatan::after {
            content: "";
            width: 6px;
            height: 6px;
            background: #dbdbd7;
            border-radius: 50%;
        }

        a {
            color: #f53003;
            text-decoration: underline;
            text-underline-offset: 4px;
            font-weight: 500;
        }

        .deploy {
            display: inline-block;
            padding: 6px 20px;
            background: #1b1b18;
            color: white;
            border: 1px solid black;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        .laravel-text {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 100px;
            font-weight: 600;
            color: #f53003;
            opacity: 0.9;
        }

        .shape {
            position: absolute;
            width: 250px;
            height: 250px;
            border: 2px solid #f53003;
            transform: rotate(35deg);
            right: 40px;
            top: 120px;
            opacity: 0.5;
        }

        .shape2 {
            position: absolute;
            width: 180px;
            height: 180px;
            border: 2px solid #f8b803;
            transform: rotate(-30deg);
            right: 100px;
            top: 200px;
            opacity: 0.7;
        }

        @media (max-width: 900px) {
            body {
                padding: 24px;
            }

            .container {
                flex-direction: column-reverse;
            }

            .right {
                width: 100%;
                min-height: 300px;
            }

            .left {
                padding: 40px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- BAGIAN KIRI -->
        <div class="left">

            <!-- NAMA DAN NPM -->
            <div class="nama">
                Halo! Saya Ketrin dengan NPM 2457052006
            </div>

            <!-- JUDUL LARAVEL -->
            <div class="judul">
                Let's get started
            </div>

            <p class="deskripsi">
                Laravel has an incredibly rich ecosystem.<br>
                We suggest starting with the following.
            </p>

            <ul class="petunjuk">

                <li>
                    <span class="bulatan"></span>

                    <span>
                        Read the
                        <a href="https://laravel.com/docs" target="_blank">
                            Documentation ↗
                        </a>
                    </span>
                </li>

                <li>
                    <span class="bulatan"></span>

                    <span>
                        Watch video tutorials at
                        <a href="https://laracasts.com" target="_blank">
                            Laracasts ↗
                        </a>
                    </span>
                </li>

            </ul>

            <a
                href="https://cloud.laravel.com"
                target="_blank"
                class="deploy"
            >
                Deploy now
            </a>

        </div>


        <!-- BAGIAN KANAN -->
        <div class="right">

            <div class="laravel-text">
                Laravel
            </div>

            <div class="shape"></div>
            <div class="shape2"></div>

        </div>

    </div>

</body>
</html>