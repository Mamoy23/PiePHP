<div class="container">
    <h1 class="text-dark text-center m-1">Mes films</h1>
    <?php if(isset($results)):?>
    <table class="table">
        <thead>
            <tr>
                <th></th>         
                <th>Nom</th>
                <th>Date de sortie</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <form action="delete" method="POST">
                <?php foreach($results as $result):?>
                <tr>
                    <td><input type="checkbox" name="id_film" value="<?= $result['id_film']?>" id="<?= $result['id_film']?>"></td>
                    <td><?= $result['name']?></td>
                    <td><?= $result['date']?></td>
                    <td><?= $result['genre']?></td>
                </tr>
                <?php endforeach;?> 
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-danger">Supprimer ce film</button>
    </form>
    <?php endif;?>

    <button class="btn btn-outline-info" id="add_movie">Ajouter un film</button>
</div>

<script>
    $('document').ready(function(){
        $('#add_movie').click(function(){
            window.location.href = "add";
        });
    });
</script>