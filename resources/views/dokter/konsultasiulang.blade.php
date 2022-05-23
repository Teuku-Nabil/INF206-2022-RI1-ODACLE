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
    <link rel="stylesheet" href="style/daftar.css">

    <title>Jadwal Konsultasi</title>
</head>

<body>
        <form action="/daftar" method="post" class="daftar">
            @csrf
            <div class="container justify-content-center">
                <h1>Jadwal Konsultasi</h1>
                <form>
                    <div class="form-group">
                        <label>Tanggal Konsultasi Ulang</label>
                        <input type="date" name="tanggal-konsul" class="form-control" placeholder="Masukkan Tanggal Konsultasi">
                    </div>
                
             </div>
                    
                    <center><button type="submit" class="registerbtn" >Simpan</button></center>

                    </div>
                </form>
        </form>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>