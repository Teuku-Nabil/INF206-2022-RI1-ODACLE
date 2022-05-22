<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Riwayat Praktik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/jadwal">Jadwal Praktik Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">logout</a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ms-auto">
                <li class="profil">
                    <p class="text">{{Auth::user()->nama}}</p>
                </li>
                <li class="profil">
                    <a href="/profil">
                        <img src="{{ asset('assets/images/' . Auth::user()->image) }}" alt="user"
                            class="image rounded-circle">
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    {{-- jumbotron --}}
    <div class="top-wrapper">
        <div class="container">
            <h1>WELCOME TO ODACLE</h1>
            <p>your health is our priority</p>
            <div class="btn-wrapper">
                <a href="/pilih-spesialis" class="btn">Daftar Sekarang</a>
            </div>
        </div>
        <div class="jadwal-hari-ini">
            <h4><strong>Jadwal Praktik Hari ini</strong></h4>
            <h5>{{ date('l, d-m-Y') }}</h5>
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
            <a href="/pilih-spesialis" class="btn" style="color: black; background-color:white">Daftar</a>
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
                        <p>Kami memiliki dokter bedah mulut dan gigi yang sudah memiliki sertifikat internasional dan
                            juga memiliki kualitas dokter lulusan perguruan tinggi ternama di indonesia maupun di luar
                            negeri. Kami memiliki 10 dokter dan 10 perawat. Kami memiliki dokter yang ahli pada
                            spesialis-spesialis bidang mulut dan gigi.</p>
                    </div>
                </div>
                <div class="feature col-md-3" style="background-color: #469CAF">
                    <img class="fea-img" src="assets/features/fasilitas.png" alt="pelayanan">
                    <div class="fea-text">
                        <h4>Layanan</h4>
                        <p>Klinik ODACLE adalah klinik pertama di Aceh yang memiliki layanan full service online, Dimana
                            semua pelayanan bisa dilakukan melalui aplikasi ODACLE.COM. Kami memiliki sistem layanan
                            yang sangat teraktif dalam mengupdate informasi-informasi terbaru.</p>
                    </div>
                </div>
                <div class="feature col-md-3" style="background-color: #257F92">
                    <img class="fea-img" src="assets/features/suntik.png" alt="perawatan">
                    <div class="fea-text">
                        <h4>Perawatan</h4>
                        <p>Klinik Odacle memiliki peringkat terbaik dalam kinerja perawatan yang dilakukan oleh dokter
                            dan perawat. Klinik Odacle selalu memeriksa pasien-pasien yang sedang dalam kondisi
                            perawatan intens. Odacle juga memiliki peraturan ketat bagi pekerja nya dimana mereka tidak
                            bisa meninggalkan pasien yang sedang dirawat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- akhir navbar --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>