<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/daftar.css">
    <link rel="stylesheet" href="style/dokter/jadwal-saya.css">

    <title>Daftar</title>
</head>
<body>

    <div class="table-container">
        <div class="table-logo position-relative" style="background-color: #DDE9FC">
            <img src="assets/images/ODACLE Logo.png" alt="logo-odacle" class="logo position-absolute top-50 start-3 translate-middle-y" style="height: 70px">
            <h2 style="padding-bottom: 20px"><center>Jadwal Praktik Dokter</center></h2>
            <a href=/beranda-dokter>
            <img src="assets/images/silang.png" alt="silang" class="logo position-absolute top-0 end-0 " style="height: 30px">
            </a>
        </div>
            <table class="table table-hover table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No.hp</th>
                <th>Hari</th>
                <th>Dokter</th>
                <th>Tanggal Berobat</th>
            </tr>
            @foreach($pasiendaftar as $pd)
            <tr style="background-color: #DDE9FC">
                <td>#</td>
                <td>{{$pd->nama}}</td>
                <td>{{$pd->nik}}</td>
                <td>{{$pd->no_hp}}</td>
                <td>{{$pd->hari}}</td>
                <td>{{$pd->nama_dokter}}</td>
                <td>{{$pd->tanggal}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 
    