<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom CSS -->
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/user/antrian.css">
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">

    <title>Antrian</title>
</head>

<body>
@foreach($regispasien as $regis)
    <div class="antrian justify-content-center">
        <h2>TIKET ANTRIAN</h2>
        <div class="content-antrian">
            <div class="content-grup">
                <label class="Nama" for="Jadwal" style="font-size: 20px"><strong>Nama</strong></label>
                <p>{{Auth::user()->nama}}</p>
            </div>
            <div class="content-grup">
                <label class="label-antrian" for="Jadwal" style="font-size: 20px"><strong>NIK</strong></label>
                <p>{{Auth::user()->nik}}</p>
            </div>
            <div class="content-grup">
                <label class="label-antrian" for="waktu" style="font-size: 20px"><strong>Waktu</strong></label>
                <p>{{$regis->waktu}}</p>
            </div>
            <div class="content-grup">
                <label class="label-antrian" for="dokter" style="font-size: 20px"><strong>Dokter</strong></label>
                <p>{{$regis->dokter}}</p>
            </div>
            <div class="content-grup">
                <label class="label-antrian" for="nomor-antrian" style="font-size: 20px"><strong>Nomor
                        Antrian</strong></label>
                <p>{{$regis->no_antrian}}</p>
            </div>
        </div>
        <div class="button-antrian">
            <center><a href="/beranda" class="button-lanjut">Selanjutnya</a></center>
        </div>
    </div>
    @endforeach

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>