<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/daftar.css">

    <title>Daftar</title>
</head>
<body>
        <form action="action_page.php">
            <div class="container justify-content-center">
                <h1>DAFTAR</h1>
                <p>Please fill in this form to create an account.</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="textarea" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK </label>
                            <input type="textarea" name="nik" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Lahir : </label>
                            <input type="date" name="tgllahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No HP </label>
                            <input type="textarea" name="NoHp" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="textarea" name="Email" class="form-control">
                        </div>
                    </div>
                </div>
            
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Selanjutnya</button>
                <div class="container signin">
                    <p>Already have an account? <a href="login">Sign in</a>.</p>
                </div>
            </div>
            
        </form>

        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 

