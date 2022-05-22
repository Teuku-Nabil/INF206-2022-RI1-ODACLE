<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}


    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>

<body>
    <div class="alert-mess position-relative">
        @if(session()->has('status'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>{{ session('status') }}</strong>
        </div>
        @endif
    </div>
    <div class="login-form">
        <div class=login-half>
            <h1>MASUK</h1>
            @if(session('error'))
            <script>
                alert("{{ session('error') }}");
            </script>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <h3>Email</h3>
                    <input type="email" name="email" class="form-control" placeholder="email@example.com" autofocus
                        required>
                </div>
                <div class="form-group">
                    <h3>Password</h3>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                        required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">MASUK</button>
                </div>
            </form>
        </div>
        <div class="reg">
            <h3>Belum punya akun? <a href="daftar">Daftar</a></h3>
        </div>
        <div class="garis-tengah">
        </div>
        <div class="desc">
            <h1>Welcome Back</h1>
            <h3>To ODACLE Website</h3>
            <img src="assets/images/ODACLE Logo.png" class="img-logo">
            <h3 class="slog">Take care of your teeth with us at ODACLE</h3>
        </div>
    </div>

</body>

</html>