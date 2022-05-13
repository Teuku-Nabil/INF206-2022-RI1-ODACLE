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
    <link rel="stylesheet" href="style/daftar.css">

    <title>Daftar</title>
</head>

<body>
        <form action="/daftar" method="post" class="daftar">
            @csrf
            <div class="container justify-content-center">
                <h1>DAFTAR</h1>
                <form>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="textarea" name="nama" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="textarea" name="nik" class="form-control" placeholder="Masukkan NIK">
                        @if($errors->has('nik'))
                        <strong><div class="text-danger">
                            {{ $errors->first('nik') }}
                        </div></strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggallahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label>No HP </label>
                        <input type="textarea" name="nohp" class="form-control" placeholder="Masukkan No HP">
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control" placeholder="email@example.com">
                        @if($errors->has('email'))
                        <strong><div class="text-danger">
                            {{ $errors->first('email') }}
                        </div></strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password </label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    
                    <center><button type="submit" class="registerbtn" ><strong>Selanjutnya</strong></button></center>

                    <div class="container-signin" style="text-align: center">
                        <p>Already have an account? <a href="login">Sign in</a>.</p>
                    </div>
                </form>
        </form>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>