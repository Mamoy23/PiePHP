<div class="container">
    <h1 class="text-dark text-center m-1">Tous les films</h1>
    @isset($results)
    <table class="table">
        <thead>
            <tr>            
                <th>Nom</th>
                <th>Date de sortie</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <td>{{ ucfirst(strtolower($result['name'])) }}</td>
                <td>{{ $result['date'] }}</td>
                <td>{{ ucfirst(strtolower($result['genre'])) }}</td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    @endisset
</div>