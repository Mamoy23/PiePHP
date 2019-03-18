<div class="container">
    <h1 class="text-dark text-center">Ajouter un genre</h1>
    <form action="add" method="POST" class="form-group">
        <input type="text" name="name" class="form-control m-1" placeholder="Nom du genre">
        <input type="hidden" name="id_user" value ="{{ $_SESSION['id_user'] }}">
        <button type="submit" class="btn btn-outline-success">Ajouter</button>
    </form>
</div>