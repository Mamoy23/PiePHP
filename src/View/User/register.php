<!DOCTYPE html>
<html>
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

    <?php if(isset($error)):?>
        <p><?= $error ?></p>
    <?php endif; ?>

</div>
<script>
$('document').ready(function(){
    $('#login_button').click(function(){
            window.location.href = "login";
    });
});
</script>