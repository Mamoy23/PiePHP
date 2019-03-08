<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1> Bienvenue <?= ucfirst(strstr($email, '@', true))?></h1>

    
    <h2>Modifier mon profil</h2>
    <form action="show" method="POST">
        <input type="email" name="up_mail" placeholder="email">
        <input type="password" name="up_password" placeholder="password">
        <button type="submit">Valider</button>
    </form>

    <?php if(isset($error)):?>
        <p><?= $error ?></p>
    <?php endif;?>
</body>
</html>