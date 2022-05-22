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
    <link rel="stylesheet" href="style/user/updateprofil.css">
    <title>Update Foto</title>
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
                        <a class="nav-link" aria-current="page" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Jadwal Praktik Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Riwayat Praktik</a>
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

    {{-- garis navbar --}}
    <img src="assets/images/garis.png" alt="garis" width="1600px">

    {{-- konten --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Foto
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('foto.upload') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Masukkan Foto</label>
                                <img alt="image" src="{{ asset('assets/images/' . Auth::user()->image) }}"
                                    class="img-fluid rounded-circle"
                                    style="width: 200px; height: 200px; padding: 10px; margin: 0px;">
                                <input name="image" type="file" class="form-control-file" id="image">
                                <p class="text-danger">{{ $errors->first("image") }}</p>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Foto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>