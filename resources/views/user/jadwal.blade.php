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
    <link rel="stylesheet" href="style/user/registrasi.css">

    <title>Jadwal & Dokter</title>
</head>

<body>
    <form action="/regis" method="post" class="daftar">
        @csrf
        <div class="container justify-content-center">
        <a href="/beranda" style="color: red; font-size:20px;"><strong>Back</strong></a>
            <h1 class="mb-5">JADWAL & DOKTER</h1>
            <section style="padding-bottom: 20px;">
                <h1>Spesialis Gigi Anak</h1>
                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Putri,SpKGA</span></h4>
                        <ul>
                            <li class="btn">Senin &ensp; 08.00 - 12.00</li>
                            <li class="btn">Selasa &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>

                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Fazil,SpKGA</span></h4>
                        <ul>
                            <li class="btn">Kamis &ensp; 08.00 - 12.00</li>
                            <li class="btn">Jum'at &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section style="padding-bottom: 20px;">
                <h1>Spesialis Ortodonsia</h1>
                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Maya,SpOrt</span></h4>
                        <ul>
                            <li class="btn">Senin &ensp; 08.00 - 12.00</li>
                            <li class="btn">Selasa &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>

                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Fauzan,SpOrt</span></h4>
                        <ul>
                            <li class="btn">Kamis &ensp; 08.00 - 12.00</li>
                            <li class="btn">Jum'at &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section style="padding-bottom: 20px;">
                <h1>Spesialis Periodonsia</h1>
                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Fitri,SpPerio</span></h4>
                        <ul>
                            <li class="btn">Senin &ensp; 08.00 - 12.00</li>
                            <li class="btn">Selasa &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>

                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Ahmad,SpPerio</span></h4>
                        <ul>
                            <li class="btn">Kamis &ensp; 08.00 - 12.00</li>
                            <li class="btn">Jum'at &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section style="padding-bottom: 20px;">
                <h1>Spesialis Radiologi Gigi</h1>
                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Manda,SpRKG</span></h4>
                        <ul>
                            <li class="btn">Senin &ensp; 08.00 - 12.00</li>
                            <li class="btn">Selasa &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>

                <div class="data-dokter">
                    <img class="img-dokter rounded-circle" src="assets/images/dokter.png" alt="dokter">
                    <div class="data-rinci">
                        <h4><span>Drg.Abdul,SpRKG</span></h4>
                        <ul>
                            <li class="btn">Kamis &ensp; 08.00 - 12.00</li>
                            <li class="btn">Jum'at &ensp; 14.00 - 18.00</li>
                        </ul>
                    </div>
                </div>
            </section>
    </form>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>