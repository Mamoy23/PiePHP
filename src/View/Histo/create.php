<div class="container">
    <h1 class="text-dark text-center m-4">Ajouter un film</h1>
    
    <form action="add" method="POST" class="form-group m-1">
        <select name="id_movie" class="form-control m-1">
            <option value="">Choisir un film</option>
            @foreach ($movies as $movie)
                <option value="{{ $movie['id_movie'] }}">{{ ucfirst(strtolower($movie['name'])) }}</option>
            @endforeach
        </select>
        <input type="hidden" name="id_user" value="{{ $_SESSION['id_user'] }}">
        <button type="submit" class="btn btn-outline-success m-1">Ajouter</button>
    </form>
</div>