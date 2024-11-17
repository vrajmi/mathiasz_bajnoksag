<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezdőlap - Mathiász Bajnokság</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: rgb(1, 106, 112);
            background: linear-gradient(0deg,
                    rgba(1, 106, 112, 1) 0%,
                    rgba(0, 51, 54, 1) 90%);
            color: #eeeeee;
            font-family: "Kanit", sans-serif;
        }

        .navbar-text {
            color: #eeeeee;
        }

        .navbar-text:hover {
            text-decoration: underline;
        }

        .navbar-toggler {
            background-color: #eeeeee;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .top {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url("../img/background.png");
            background-position: bottom;
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 5px;
            border-style: solid;
            border-color: #eeeeee;
        }

        .btn {
            margin-top: 50px;
            padding: 13px;
            width: 120px;
            height: 70px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        header {
            padding-bottom: 250px;
        }

        .title {
            padding-top: 100px;
        }

        main {
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
        }

        .navbar-brand img {
            width: 80px;
        }

        .navbar-nav {
            align-items: center;
        }

        .navbar-nav>li {
            margin-left: 50px;
            margin-right: 50px;
        }

        .navbar .navbar-nav .nav-link {
            color: #eeeeee;
            font-size: 1.1em;
            padding: 0.5em 1em;
        }

        .divider {
            font-size: 30px;
            display: flex;
            align-items: center;
            padding-bottom: 50px;
        }

        .divider::before,
        .divider::after {
            flex: 1;
            content: "";
            padding: 3px;
            background-color: rgb(255, 0, 0);
            margin: 5px;
        }

        section {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .form-check-label {
            margin-right: 10px;
        }

        .up {
            padding-bottom: 10px;
        }

        .logo {
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
    @yield('content')
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">Mathiász Bajnokság</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.create') }}">Jelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Jelentkezők listája</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sponsor.create') }}">Szponzor rögzítése</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sponsor.index') }}">Szponzorok listája</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container text-center">
        <div class="row">
            <div class="col-12 title">
                <h1>Mathiász Bajnokság</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h2>Íjászverseny Felhívás 🎯🏹</h2>
                <h3>Kedves Íjászok és Íjászat iránt érdeklődők!</h3>
                <p>Szeretettel meghívunk benneteket az "Pontosság Napja" Íjászversenyre, amely izgalmas kihívásokat és
                    kellemes közösségi élményeket kínál minden résztvevő számára!</p>


                <h4>Verseny adatai</h4>

                <p>
                    Időpont: 2024. 11. 17.
                    <br>
                    Helyszín: 8630 Balatonboglár, Szabadság utca 41.
                    <br>
                    Verseny kezdete: 9:00
                </p>

                <h4>Versenykategóriák</h4>

                <p>
                    Kezdő íjászok - Mindenki, aki nem rendelkezik versenytapasztalattal.
                    Haladó íjászok - Akik már rendszeresen részt vesznek versenyeken.
                </p>

                <h4>Versenyszabályok</h4>

                <p>
                    A versenyzők saját felszereléssel indulhatnak.
                    A céltáblák távolsága kategóriánként változik (15-70 méter).
                    Pontozás: a célpont közepét eltaláló lövés ér a legtöbbet.
                </p>

                <h4>Díjazás</h4>

                <p>
                    A kategóriák legjobbjai érmeket, kupákat és értékes ajándékokat nyernek! 🎖️

                    Ne hagyjátok ki ezt az izgalmas alkalmat, hogy összemérjétek tudásotokat és találkozzatok a hazai
                    íjász
                    közösség legjobbjaival!
                </p>

                <h5>Várjuk a jelentkezéseteket!</h5>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h2>Versenyfelhívás</h2>
                <h3>Íjászat - A pontosság és koncentráció sportja</h3>

                <h4>Az íjászat alapjai:</h4>
                <p>
                    Az íjászat lényege, hogy az íjjal és a nyíllal célba találjunk. A sportágnak számos változata
                    létezik: például a klasszikus céllövő íjászat, a terepíjászat, a vadászati íjászat, valamint a
                    tradicionális íjászat, amelyben modern eszközök helyett hagyományos felszereléseket használnak.
                </p>
                <h4>Az íjászok három fő típusa közül választhatnak:</h4>

                <ul>
                    <li>Reflexíj: a modern olimpiai íjászat hivatalos íjtípusa, amely különböző kiegészítőkkel, például
                        célzóval és stabilizátorral rendelkezik.</li>
                    <li>Csigás íj: precíziós eszköz, amely a technológiai fejlesztéseknek köszönhetően pontosabb
                        célzást
                        tesz lehetővé.</li>
                    <li>Tradicionális íj: egyszerű, letisztult kialakítású eszköz, amelyet gyakran hagyományőrző
                        íjászok
                        használnak.</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h2>Szervezők Elérhetőségei</h2>
            </div>

            <div class="col-6">
                <h3>Név: Vodenicsár Rajmund</h3>
                <h3>Tel: +36 30 123-456</h3>
                <h3>E-mail: vodenicsar.rajmund_romeo@liveedu.mathiasz.hu</h3>
            </div>

            <div class="col-6">
                <h3>Név: Test Lajos</h3>
                <h3>Tel: +36 30 123-456</h3>
                <h3>E-mail: test.lajos@liveedu.mathiasz.hu</h3>
            </div>
        </div>
    </main>
    <hr>
    <footer class="container text-center">
        <div class="row">
            <div class="col-12">
                <h6>2024 © Vodenicsár Rajmund Rómeó</h6>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>