<div class="container">
    <h1 class="text-center text-dark m-4"> Bienvenue {{ ucfirst(strstr($email, '@', true)) }}</h1>
    
    <h2 class="text-dark">Modifier mon profil</h2>
    <form action="show" method="POST" class="form-group m-1">
        <input type="email" name="email" value="{{ $email }}" class="form-control m-1">
        <!-- <input type="password" name="password" value=""> -->
        <button type="submit" class="btn btn-outline-success m-1">Valider</button>
    </form>

    <button id="delete_button" class="btn btn-outline-danger m-1">Supprimer mon compte</button>
    <br />

    @if (isset($error))
        <p>{{ $error }}</p>
    @endif
</div>