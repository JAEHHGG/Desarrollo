<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cookies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="#">PC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#licencia_">Inicio</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#readme_">Acerca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#acercade_">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#equipo_">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#contacto_">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>

    <!-- Seleccione práctica -->

    <div class="container fluid">

        <h3 class="center-align">Seleccione su Práctica</h3>

        <form action="#">
            <p>
                <label>
                    <input name="group1" type="radio" checked />
                    <span>Nestlé</span>
                </label>
            </p>
            <p class="center-align">
                <a href="nestle.php?practica=ns" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Compensar</span>
                </label>
            </p>
            <p class="center-align">
                <a href="compensar.php?practica=cp" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Bancolombia</span>
                </label>
            </p>
            <p class="center-align">
                <a href="bancolombia.php?practica=bc" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Brinsa S.A</span>
                </label>
            </p>
            <p class="center-align">
                <a href="brinsa.php?practica=br" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Ecopetrol</span>
                </label>
            </p>
            <p class="center-align">
                <a href="ecopetrol.php?practica=ec" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Loreal</span>
                </label>
            </p>
            <p class="center-align">
                <a href="loreal.php?practica=lr" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>EAN</span>
                </label>
            </p>
            <p class="center-align">
                <a href="ean.php?practica=ea" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Cruz Verde</span>
                </label>
            </p>
            <p class="center-align">
                <a href="cruzverde.php?practica=cv" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Avianca</span>
                </label>
            </p>
            <p class="center-align">
                <a href="avianca.php?practica=av" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Latam</span>
                </label>
            </p>
            <p class="center-align">
                <a href="latam.php?practica=lt" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Everis</span>
                </label>
            </p>
            <p class="center-align">
                <a href="everis.php?practica=evr" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" />
                    <span>Texmoda</span>
                </label>
            </p>
            <p class="center-align">
                <a href="texmoda.php?practica=tx" class="waves-effect waves-light btn-small">Seleccionar</a>
            </p>

            <br>

        </form>


    </div>

</body>

</html>
