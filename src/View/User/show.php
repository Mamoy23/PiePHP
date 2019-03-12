<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://localhost/w2php502p1/webroot/js/jquery-3.3.1.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 class="text-center text-dark"> Bienvenue <?= ucfirst(strstr($email, '@', true))?></h1>
        
        <h2 class="text-dark">Modifier mon profil</h2>
        <form action="show" method="POST" class="form-group m-1">
            <input type="email" name="email" value="<?= $email?>" class="form-control m-1">
            <!-- <input type="password" name="password" value=""> -->
            <button type="submit" class="btn btn-outline-success m-1">Valider</button>
        </form>

        <button id="delete_button" class="btn btn-outline-danger m-1">Supprimer mon compte</button>
        <button id="logout_button" class="btn btn-outline-danger m-1">Se déconnecter</button>
        <br />
        <!-- <form action="delete" method="POST">
            <button type="submit">Supprimer mon compte</button>
        </form> -->

        <?php if(isset($error)):?>
            <p><?= $error ?></p>
        <?php endif;?>
    </div>
    
    <script>
    $('document').ready(function(){
        $('#delete_button').click(function(){
            res = confirm('Etes-vous sûr de vouloir vous désinscrire?');
            if(res){
                window.location.href = "delete";
            }
        });
        $('#logout_button').click(function(){
            res = confirm('Etes-vous sûr de vouloir vous déconnecter?');
            if(res){
                window.location.href = "logout";
            }
        });
    });
    </script>
</body>
</html>