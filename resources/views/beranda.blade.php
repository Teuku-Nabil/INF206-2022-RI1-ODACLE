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
                            <a class="nav-link" href="#">logout</a>
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

        {{-- garis navbar --}}
        <img src="assets/images/garis.png" alt="garis" width="1600px">

        {{-- gambar beranda --}}
        <img src="assets/images/beranda-pasien.png" alt="beranda" width="1600px" height="200px">
        <b> WELCOME TO ODACLE
            <br>your health is our priority
        </b>


        {{-- img user --}}


        {{-- akhir navbar --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </body>
</html>
