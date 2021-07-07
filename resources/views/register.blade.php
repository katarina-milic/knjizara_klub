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

<body>

    <nav class="nav justify-content-center">
        <a class="nav-link" href="http://127.0.0.1:8000/">Login</a>
        <a class="nav-link active" href="http://127.0.0.1:8000/registracija">Registracija</a>
        <a class="nav-link" href="http://127.0.0.1:8000/iznajmljivanja">Iznajmljivanje</a>
    </nav>
    <div class="d-flex justify-content-center align-items-center content">
        <div class="col-4">
        <form id="registracijaForm">
            <div class="form-group">
                <label for="ime">Ime:</label>
                <input type="text" class="form-control" name="" id="ime" aria-describedby="helpId"
                    placeholder="Marko">
            </div>
            <div class="form-group">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" name="" id="prezime" aria-describedby="helpId"
                    placeholder="Markovic">
            </div>
            <div class="form-group">
                <label for="kontakt_telefon">Unesite broj telefona</label>
                <input type="text" class="form-control" name="" id="kontakt_telefon" aria-describedby="helpId"
                    placeholder="061 9912 24 24">
            </div>
            <div class="form-group">
                <label for="lozinka">Upisite lozinku</label>
                <input type="password" class="form-control" name="" id="lozinka" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Dalje</button>
        </form>
    </div>
    </div>
</body>

</html>
