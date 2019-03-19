<div class="container">
    <h1 class="text-dark text-center m-1">Mes films</h1>
    <button class="btn btn-outline-info" id="add_movie">Ajouter un film</button>
    @isset($results)
    <table class="table">
        <thead>
            <tr>
                <th></th>         
                <th>Nom</th>
                <th>Date de sortie</th>
                <th>Genre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="delete" method="POST">
                @foreach ($results as $result)
                <tr>
                    <td><input type="checkbox" name="id_movie" value="{{ $result['id_movie'] }}" id="{{ $result['id_movie'] }}"></td>
                    <td>{{ ucfirst(strtolower($result['name'])) }}</td>
                    <td>{{ $result['date'] }}</td>
                    <td>{{ ucfirst(strtolower($result['genre'])) }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-danger">Supprimer ce film</button>
    <button type="submit" formaction="update" id="update_movie" class="btn btn-outline-secondary">Modifier ce film</button>
    </form>
    @endisset

</div>

<script>
    $('document').ready(function(){
        $('#add_movie').click(function(){
            window.location.href = "add";
        });
        $('#update_movie').click(function(){
            window.location.href = "update";
        });
    });
</script>