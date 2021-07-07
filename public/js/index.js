$(function () {
    const url = "http://127.0.0.1:8000"

    loadKnjiga();



    $('#registracijaForm').on('submit', function (e) {
        e.preventDefault();

        if ($("#ime").val() == "" || $("#prezime").val() == "" || $("#kontakt_telefon").val() == "") {
            alert('Sva polja moraju biti popunjena.')
            return;
        }
        $.ajax({
            type: "POST",
            url: url + "/clanovi/registracija",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                ime: $("#ime").val(),
                prezime: $("#prezime").val(),
                kontakt_telefon: $("#kontakt_telefon").val(),
                lozinka: $("#lozinka").val(),
            },
            dataType: "JSON",
            success: function (response) {
                window.location.href = url + "/iznajmljivanja"
                sessionStorage.setItem('id_clan', response.id_clana)
            }
        });
    });
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: url + "/clanovi/login",
            data: {
                kontakt_telefon: $("#loginForm #kontakt_telefon").val(),
                lozinka: $("#loginForm #lozinka").val(),
            },
            dataType: "JSON",
            success: function (response) {
                alert(response.message)
                if (response.id_clana) {
                    if (response.id_clana == 1) {
                        window.location.href = url + "/admin-panel"
                        return;
                    }
                    window.location.href = url + "/iznajmljivanja"
                    sessionStorage.setItem('id_clan', response.id_clana)
                }
            }
        });
    });

    function loadKnjiga() {
        $.ajax({
            type: "GET",
            url: url + "/knjige/get",
            dataType: "json",
            success: function (res) {
                prikazSvihKnjigaTabelarno(res.knjige);
            }
        });
    }

    function prikazSvihKnjigaTabelarno(knjige) {
        $("#knjigeTableBody").html("");
        $("#knjigeTableBodyAdmin").html("");

        knjige.forEach((knjiga, index) => {
            $("#knjigeTableBody").append(
                `            
            <tr>
                <td scope="row">${index + 1}</td>
                <td>${knjiga.autor}</td>
                <td>${knjiga.naslov}</td>
                <td>${knjiga.broj_strana}</td>
                <td>${knjiga.zanr}</td>
                <td><button type="button" name="" id="${knjiga.id}" class="btn btn-primary btn-lg btn-block iznajmljivanje">Iznajmi</button></td>
            </tr>
            `
            );
            $("#knjigeTableBodyAdmin").append(
                `            
            <tr>
                <td scope="row">${index + 1}</td>
                <td>${knjiga.autor}</td>
                <td>${knjiga.naslov}</td>
                <td>${knjiga.broj_strana}</td>
                <td>${knjiga.zanr}</td>
                <td><button type="button" name="" id="${knjiga.id}" class="btn btn-danger btn-lg btn-block brisanje">Obrisi</button></td>
            </tr>
            `
            );
        });
    }

    $("body").on('click', '.iznajmljivanje', function () {
        $.ajax({
            type: "POST",
            url: url + "/knjige/iznajmi",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id_knjiga: $(this).attr("id"),
                id_clan: sessionStorage.getItem("id_clan")
            },
            dataType: "JSON",
            success: function (response) {
                alert(response.message)
            }
        });
    });
    $("body").on('click', '.brisanje', function () {
        $.ajax({
            type: "POST",
            url: url + "/knjige/obrisi",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                _method: "DELETE",
                id_knjiga: $(this).attr("id"),
            },
            dataType: "JSON",
            success: function (response) {
                loadKnjiga();
                alert(response.message)
            }
        });
    });

});