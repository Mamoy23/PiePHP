<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Cinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://localhost/w2php502p1/webroot/js/jquery-3.3.1.min.js"></script>
    <script src="http://localhost/w2php502p1/webroot/js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <link href="http://localhost/w2php502p1/webroot/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php if(isset($_SESSION) && !empty($_SESSION)): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/w2php502p1/movies">My Cinema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/w2php502p1/user/show">Profil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Films
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/w2php502p1/movies">Tous les films</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/w2php502p1/movies/list">Mes films</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genres
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/w2php502p1/genres">Tous les genres</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/w2php502p1/genres/list">Mes genres</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/w2php502p1/histo/list">Historique</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <button id="logout_button" class="btn btn-outline-danger m-1">Se déconnecter</button>
        </div>
    </nav>
    <?php endif;?>
    
    <?= $view ?>
</body>
</html>