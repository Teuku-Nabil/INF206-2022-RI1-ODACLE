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
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">

    <title>Landing Page</title>
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

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/login">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/daftar">Daftar</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- jumbotron --}}
    <div class="top-wrapper">
        <div class="container">
            <h1>WELCOME TO ODACLE</h1>
            <p>your healt is our priority</p>
            <div class="btn-wrapper">
                <a href="#" class="btn">Daftar Praktik</a>
            </div>
        </div>
        <div class="jadwal-hari-ini">
            <h4><strong>Jadwal Praktik Hari ini</strong></h4>
            <h5>{{ date('l, d-m-Y')}}</h5>
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
            <a href="/daftar" class="btn" style="color: black; background-color:white">Daftar</a>
        </div>
    </div>

    {{-- tengtang kami/biografi --}}
    <div class="card-tentangkami">
        <div class="card-header">
            Tentang Kami
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Odacle adalah klinik gigi dan mulut pertama di indoneia yang layanan informasi nya full <br>
                    menggunakan sistem informasi berbasis WEB atau aplikasi. Odacle selalu update dalam memberi <br>
                    informasi mengenai klinik yang terbaru, maupun jadwal dokter yang selalu di update. Odacle sendiri
                    <br> tidak menerima pasien yang daftar di tempat. Odacle hanya menerima pasien yang sudah melakukan
                    pendaftaran pada website atau aplikasi yang sudah disediakan.</p>
                <p>Odacle memiliki banyak dokter spesialis yang handal pada bidangnya sehingga kesehatan gigi anda
                    terjamin saat melakukan perwatan pada klinik kami. Di klinik Odacle anda bisa melakukan perawatan
                    gigi setiap minggunya dengan mengambil jam yang telah disediakan. anda juga bisa melakukan
                    konsultasi melalui website atau aplikasi yang telah disediakan.</p>
        </div>
    </div>


    {{-- akhir biografi --}}

    {{-- fitur2 rumah sakit --}}
    <div class="row justify-content-center">
        <div class="card1 col-sm-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Emergency Case</h5>
                <p class="card-text"> <br> untuk informasi emergensi silahkan menghubungi nomor telepon yang tertera di
                    bawah. nomor tersebut dikhususkan bagi pasien yang membutuhkan pertolongan tercepat dari kami.
                    <br><br> (021) 997665 4332 </p>
            </div>
        </div>
        <div class="card2 col-sm-3" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title">Dokter jaga</h5>
                <p> hari ini : {{ date ('d-m-Y') }}</p>
                <p> drg. Yanti, SpKG. --------------------------------- 10.00-18.00</p>
                <p> drg. Nabil, SpPros. ------------------------------- 15.00-21.00</p>
                <p> drg. Putri, SpPerio. ------------------------------- 18.00-21.00</p>
            </div>
        </div>
        <div class="card3 col-sm-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jam Poliklinik</h5>
                <p class="card-text"> senin ---------------- 08.00-21.00 </p>
                <p>selasa --------------- 08.00-21.00</p>
                <p>Rabu ---------------- 08.00-21.00</p>
                <p>Kamis --------------- 08.00-21.00</p>
                <p>Jumat --------------- 08.00-21.00</p>
                <p>Sabtu --------------- 08.00-21.00</p>
                <p>Minggu ------------- 08.00-21.00</p>
            </div>
        </div>
    </div>
    {{-- akhir navbar --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>