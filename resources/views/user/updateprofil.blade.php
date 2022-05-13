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
    <title>Update Profil</title>
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
                        Update Profile
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profil.update') }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ old('nama', Auth::user()->nama) }}" autocomplete="nama" autofocus>

                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>

                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                        name="nik" value="{{ old('nik', Auth::user()->nik) }}" autocomplete="nik"
                                        autofocus>

                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggallahir" class="col-md-4 col-form-label text-md-right">Tanggal
                                    Lahir</label>

                                <div class="col-md-6">
                                    <input id="tanggallahir" type="date"
                                        class="form-control @error('date') is-invalid @enderror" name="tanggallahir"
                                        value="{{ old('tanggallahir', Auth::user()->tanggallahir) }}"
                                        autocomplete="date">

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nohp" class="col-md-4 col-form-label text-md-right">Nomor HP</label>

                                <div class="col-md-6">
                                    <input id="nohp" type="text"
                                        class="form-control @error('nohp') is-invalid @enderror" name="nohp"
                                        value="{{ old('nohp', Auth::user()->nohp) }}" autocomplete="nohp" autofocus>

                                    @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email', Auth::user()->email) }}" autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Profile
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