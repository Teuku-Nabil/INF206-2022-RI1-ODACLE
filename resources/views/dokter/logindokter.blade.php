<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/logindokter.css">
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <div class="login-form">
        <div class=login-half>
            <h1>MASUK</h1>
            <form action="/login-dokter" method="post">
                @csrf
                <div class="form-group">
                    <h3>Email</h3>
                    <input type="email" name="email" class="form-control" placeholder="Email@example.com">
                </div>
                <div class="form-group">
                    <h3>Password</h3>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">MASUK</button>
                </div>
            </form>
        </div>
        <div class="submit">
            <h3>Lupa Password? Hubungi Admin</h3>
        </div>
