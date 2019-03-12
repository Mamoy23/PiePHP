<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S'inscrire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://localhost/w2php502p1/webroot/js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-dark text-center m-1">Inscription</h1>
        <form action="add" method="POST" class="form-group m-1">
            <input type="email" name="email" placeholder="Email" class="form-control m-1">
            <input type="password" name="password" placeholder="Mot de passe" class="form-control m-1">
            <button type="submit" class="btn btn-outline-success m-1">S'inscrire</button>  
        </form>
        <div class="text-right">        
            <p class="text-info m-1">Déjà un compte ? </p>
            <button class="btn btn-outline-info m-1" id="login_button">Se connecter</button>
        </div>

    </div>
    <script>
    $('document').ready(function(){
        $('#login_button').click(function(){
                window.location.href = "login";
        });
    });
    </script>
</body>
</html>