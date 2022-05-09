<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- css custom --}}
        <link rel="stylesheet" href="style/beranda-pasien.css">
        <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">

        <title>Beranda</title>
    </head>
    <body>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                {{-- logo odacle --}}
                <nav class="navbar navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/ODACLE Logo.png" alt="logo odacle" height="60">
                        </a>
                    </div>
                </nav>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Riwayat Praktik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Konsultasi Lanjutan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">logout</a>
                        </li>
                    </ul>
                </div>

                <h1 class="nama-profil">Om-Om</h1>
                <div class="position-relative">
                    <div class="position-absolute top-0 end-10">
                        <a href="profil">
                        <img src="assets/images/user.png" type="button" alt="user" height="60px">
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- jumbotron --}}
        <div class="top-wrapper">
            <div class="container">
                <h1>WELCOME TO ODACLE</h1>
                <p>your healt is our priority</p>
                <div class="btn-wrapper">
                    <a href="#" class="btn">Buat Janji Dokter</a>
                    <a href="#" class="btn">Ajukan Konsultasi Lanjutan</a>
                </div>
            </div>
            <div class="jadwal-hari-ini">
                <h4><strong>Jadwal Praktik<br>Hari ini</strong></h4>
                <h5>tanggal sekarang 25 maret 2022</h5>
                <div class="jadwal-dokter">
                    <p>Drg.Nama dokter</p>
                    <p>Spesialis apa</p>
                    <p>08.00-21.00</p>
                </div>
                <div class="jadwal-dokter">
                    <p>Drg.Nama dokter</p>
                    <p>Spesialis apa</p>
                    <p>08.00-21.00</p>
                </div>
                <a href="#" class="btn">Daftar</a>
            </div>
        </div>

        {{-- fitur2 rumah sakit --}}
        <div class="require">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="feature col-md-3" style="background-color: #257F92">
                        <img class="fea-img" src="assets/features/dokter kami.png" alt="dokter kami">
                        <div class="fea-text">
                            <h4>Dokter Kami</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo doloribus architecto nihil tempora placeat. Doloribus, iure soluta cumque quia sunt pariatur labore natus quos repellat animi eius obcaecati? Mollitia, placeat.</p>
                        </div>
                    </div>
                    <div class="feature col-md-3" style="background-color: #469CAF">
                        <img class="fea-img" src="assets/features/fasilitas.png" alt="pelayanan">
                        <div class="fea-text">
                            <h4>Layanan</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quidem quas molestias, maxime veritatis dolorem pariatur sequi, est fuga earum voluptatum doloribus laboriosam dignissimos illum error aspernatur facilis veniam neque.</p>
                        </div>
                    </div>
                    <div class="feature col-md-3" style="background-color: #257F92">
                        <img class="fea-img" src="assets/features/suntik.png" alt="perawatan">
                        <div class="fea-text">
                            <h4>Perawatan</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi vero ipsa earum qui commodi incidunt deleniti soluta asperiores ipsam doloremque. Aperiam ab omnis, facere commodi dolor et placeat vel unde.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        {{-- akhir navbar --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </body>
</html>
