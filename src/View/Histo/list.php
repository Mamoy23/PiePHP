<div class="container">
    <h1 class="text-dark text-center m-4">Mes films vus</h1>
    <button class="btn btn-outline-info" id="add_movie">Ajouter un film</button>
    @isset($results)
    @!empty($results)
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
                    <td><input type="radio" name="id_movie" value="{{ $result['id_movie'] }}" id="{{ $result['id_movie'] }}" 
                    onchange="document.getElementById('submit').disabled = !this.checked;"></td>
                    <td>{{ ucfirst(strtolower($result['name'])) }}</td>
                    <td>{{ $result['date'] }}</td>
                    <td>{{ ucfirst(strtolower($result['genre'])) }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <button type="submit" id="submit" class="btn btn-outline-danger" disabled>Supprimer ce film</button>
    </form>
    @else
        <p class="m-2">Cliquez juste au dessus pour ajouter votre premier film!</p>
    @end!empty
    @endisset

</div>