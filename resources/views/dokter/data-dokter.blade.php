<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- css custom --}}
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/user/data-dokter.css">
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">

    <title>ODACLE</title>
</head>

<body>
    <section>
        <h1>Nama Spesialisnya pokoknnya</h1> {{-- tinggal tambah nama aja dari controllernya --}}
        {{-- bagian sini pake looping aja --}}
        <div class="data-dokter">
            <img class="img-dokter" src="assets/images/dokter.png" alt="dokter">
            <div class="data-rinci">
                <h4><span>Nama Dokternya</span></h4>
                <ul>
                    <li>hari, tanggal</li>
                    <li>hari, tanggal</li>
                    <li>hari, tanggal</li>
                </ul>
            </div>
        </div>
    </section>


    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>