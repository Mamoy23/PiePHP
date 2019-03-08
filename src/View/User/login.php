<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Connexion</h1>
    <form action="login" method="POST">
        <input type="email" name="co_email" placeholder="email">
        <input type="password" name="co_password" placeholder="password">
        <button type="submit">Se connecter</button>
    </form>

    <?php if(isset($error)):?>
        <p><?= $error ?></p>
    <?php endif;?>
</body>
</html>