<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</head>

<body >

    <nav class="nav justify-content-center">
        <a class="nav-link" href="http://127.0.0.1:8000/">Login</a>
        <a class="nav-link" href="http://127.0.0.1:8000/registracija">Registracija</a>
        <a class="nav-link active" href="http://127.0.0.1:8000/iznajmljivanja">Iznajmljivanje</a>
    </nav>
    <div class="container">
    <table class="table table-warning">
        <thead>
            <tr>
                <th>Br.</th>
                <th>Autor</th>
                <th>Naslov</th>
                <th>Broj strana</th>
                <th>Zanr</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody id="knjigeTableBody">
        </tbody>
    </table>
    </div>
</body>

</html>
