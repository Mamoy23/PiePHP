<div class="container">
    <h1 class="text-dark text-center m-4">Connexion</h1>
    <form action="login" method="POST">
        <input type="email" name="co_email" placeholder="Email" class="form-control m-1">
        <input type="password" name="co_password" placeholder="Mot de passe" class="form-control m-1">
        <button type="submit" class="btn btn-outline-success m-1">Se connecter</button>
    </form>

    <div class="text-right">
        <p class="text-info m-1">Vous n'êtes pas encore inscrit ?</p>
        <button class="btn btn-outline-info m-1" id="signin_button">S'inscrire</button>
    </div>

    @isset($error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endisset
</div>