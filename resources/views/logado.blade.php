<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logado</title>
</head>
<body>
    <h1>Logado</h1>
    <h2>Usuário - {{ $usuario }}</h2>
    <h3><a href="{{ route('login.destroy') }}">Logout</a></h3>
</body>
</html>