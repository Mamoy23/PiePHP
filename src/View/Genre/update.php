<div class="container">
    <h1 class="text-dark text-center m-1">Modifier le genre</h1>
    <form action="update" method="POST" class="form-group m-1">
        <input type="text" name="name" value="{{ $results[0]['name'] }}" class="form-control m-1">
        <input type="hidden" name="id_genre" value="{{ $_SESSION['id_genre'] }}">
        <button type="submit" class="btn btn-outline-success m-1">Modifier</button>
    </form>
</div>