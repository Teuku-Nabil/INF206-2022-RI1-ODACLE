<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/dokter/jadwal-saya.css">
    <link rel="stylesheet" href="style/dokter/riwayat-praktik.css">

    <title>Riwayat Praktik</title>
</head>

<body>
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
                        <a class="nav-link" aria-current="page" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/riwayat">Riwayat Praktik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Jadwal Praktik Dokter</a>
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
    <div class="table-container">
        <div class="table-logo position-relative" style="background-color: #DDE9FC">
            <img src="assets/images/ODACLE Logo.png" alt="logo-odacle"
                class="logo position-absolute top-50 start-3 translate-middle-y" style="height: 70px">
            <h2 style="padding-bottom: 20px">
                <center>Riwayat Pemeriksaan</center>
            </h2>
        </div>
        <table class="table table-hover table-striped">
            <tr>
                <th>No</th>
                <th>Dokter</th>
                <th>Waktu</th>
                <th>Keluhan</th>
                <th>Catatan Dokter</th>
            </tr>
            @foreach ($regispasien as $r)
            <tr style="background-color: #DDE9FC">
                <td>#</td>
                <td>{{$r->dokter}}</td>
                <td>{{$r->waktu}}</td>
                <td>{{$r->keluhan}}</td>
                <td>{{$r->status}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>