<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>

    <!-- Font Awesome untuk logo sosial media -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background-color: #f5f3ff;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 430px;
            background-color: white;
            border-radius: 25px;
            overflow: hidden;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        /* Bagian atas */
        .header {
            height: 210px;
            background-color: #7568b5;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Foto profil kosong */
        .profile-photo {
            width: 125px;
            height: 125px;

            border-radius: 50%;
            background-color: #eeeeee;

            border: 5px solid white;

            display: flex;
            justify-content: center;
            align-items: center;

            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
        }

        .profile-photo i {
            font-size: 65px;
            color: #aaaaaa;
        }

        /* Bagian isi */
        .content {
            padding: 30px 45px 35px;
            text-align: center;
        }

        .content h1 {
            font-size: 28px;
            color: #333333;
            margin-bottom: 25px;
        }

        /* Data mahasiswa */
        .info {
            margin-bottom: 12px;
            padding: 13px;

            background-color: #eeeafd;
            border-radius: 7px;

            color: #444444;
            font-size: 17px;
        }

        .label {
            font-weight: bold;
            color: #7568b5;
        }

        /* Sosial media */
        .social {
            margin-top: 28px;
            padding-top: 20px;

            border-top: 1px solid #dddddd;

            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .social a {
            text-decoration: none;
            color: #7568b5;

            font-size: 28px;

            transition: 0.2s;
        }

        .social a:hover {
            color: #51458d;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 20px;

            font-size: 13px;
            color: #999999;
        }
    </style>
</head>

<body>

    <div class="card">

        <!-- HEADER -->
        <div class="header">

            <div class="profile-photo">
                <i class="fa-solid fa-user"></i>
            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <h1>{{ $nama }}</h1>

            <div class="info">
                <span class="label">NPM</span><br>
                {{ $npm }}
            </div>

            <div class="info">
                <span class="label">Jurusan</span><br>
                Sistem Informasi
            </div>

            <div class="info">
                <span class="label">Kelas</span><br>
                {{ $kelas }}
            </div>


            <!-- SOSIAL MEDIA -->
            <div class="social">

                <a href="https://instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://github.com/" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://linkedin.com/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>

            </div>


            <div class="footer">
                Pemrograman Web Lanjut
            </div>

        </div>

    </div>

</body>
</html>