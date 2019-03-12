<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://localhost/w2php502p1/webroot/js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-dark text-center">Connexion</h1>
        <form action="login" method="POST">
            <input type="email" name="co_email" placeholder="Email" class="form-control m-1">
            <input type="password" name="co_password" placeholder="Mot de passe" class="form-control m-1">
            <button type="submit" class="btn btn-outline-success m-1">Se connecter</button>
        </form>

        <div class="text-right">
            <p class="text-info m-1">Vous n'êtes pas encore inscrit ?</p>
            <button class="btn btn-outline-info m-1" id="signin_button">S'inscrire</button>
        </div>

        <?php if(isset($error)):?>
            <p class="alert alert-danger"><?= $error ?></p>
        <?php endif;?>
    </div>
    <script>
    $('document').ready(function(){
        $('#signin_button').click(function(){
                window.location.href = "add";
        });
    });
    </script>
</body>
</html>