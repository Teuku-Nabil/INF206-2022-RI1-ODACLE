<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda
    </title>
</head>
<body>
    <form action="/logout" method="get">
        @csrf
        <button type="submit">logout</button>
    </form>
</body>
</html>