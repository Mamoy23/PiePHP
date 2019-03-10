<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="webroot/js/jquery-3.3.1.min.js"></script> -->
</head>
<body>
    <h1> Bienvenue <?= ucfirst(strstr($email, '@', true))?></h1>

    
    <h2>Modifier mon profil</h2>
    <form action="show" method="POST">
        <input type="email" name="email" placeholder="<?= $email?>">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Valider</button>
    </form>

    <!-- <button id="delete_button">Supprimer mon compte</button> -->
    <br />
    <form action="delete" method="POST">
        <button type="submit">Supprimer mon compte</button>
    </form>

    <?php if(isset($error)):?>
        <p><?= $error ?></p>
    <?php endif;?>
    <!-- <script>
    $('document').ready(function(){
        $('#delete_button').click(function(){
        res = confirm('Etes-vous sûr de vouloir vous désinscrire?');
        if(res){
            window.location.href = "delete";
        }
        });
    });
    </script> -->
</body>
</html>