<div class="container">
    <h1 class="text-dark text-center m-4">Modifier le film</h1>
    <form action="update" method="POST" class="form-group m-1">
        <input type="text" name="name" value="{{ $results[0]['name'] }}" class="form-control m-1">
        <label for="date" class="text-dark m-1">Date de sortie</label>
        <input type="date" name="date" min="1900-01-01" max="2019-04-01" value="{{ $results[0]['date'] }}" class="form-control m-1">

        <select name="genre" id="genre" class="form-control m-1">
            <option value="{{ $results[0]['genre'] }}">{{ $results[0]['genre'] }}</option>
            @foreach ($genres as $genre)
                <option value="{{ $genre['name'] }}">{{ ucfirst(strtolower($genre['name'])) }}</option>
            @endforeach
        </select>
        <input type="hidden" name="id_movie" value="{{ $_SESSION['id_movie'] }}">
        <button type="submit" class="btn btn-outline-success m-1">Modifier</button>
    </form>
</div>