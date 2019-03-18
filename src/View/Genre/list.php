<div class="container">
    <h1 class="text-dark text-center m-1">Mes genres</h1>
    @isset($results)
    <table class="table">
        <thead>
            <tr>
                <th></th>         
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <form action="delete" method="POST">
                @foreach ($results as $result)
                <tr>
                    <td><input type="checkbox" name="id_genre" value="{{ $result['id_genre'] }}" id="{{ $result['id_genre'] }}"></td>
                    <td>{{ $result['name'] }}</td>
                </tr>
                @endforeach 
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-danger">Supprimer ce genre</button>
    </form>
    @endisset

    <button class="btn btn-outline-info" id="add_genre">Ajouter un genre</button>
</div>

<script>
    $('document').ready(function(){
        $('#add_genre').click(function(){
            window.location.href = "add";
        });
    });
</script>