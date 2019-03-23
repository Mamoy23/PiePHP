<div class="container">
    <h1 class="text-dark text-center m-4">Mes genres</h1>
    <button class="btn btn-outline-info" id="add_genre">Ajouter un genre</button>
    <?php if(isset($results)): ?>
    <?php if(!empty($results)): ?>
    <table class="table">
        <thead>
            <tr>
                <th></th>         
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <form action="delete" method="POST">
                <?php foreach($results as $result): ?>
                <tr>
                    <td><input type="radio" name="id_genre" value="<?= htmlentities( $result['id_genre'] )?>" id="<?= htmlentities( $result['id_genre'] )?>" class="check"></td>
                    <td><?= htmlentities( $result['name'] )?></td>
                </tr>
                <?php endforeach; ?> 
        </tbody>
    </table>
            <button type="submit" class="btn btn-outline-danger submit" disabled>Supprimer ce genre</button>
            <button type="submit" formaction="update" id="update_movie" class="btn btn-outline-secondary submit" disabled>Modifier ce genre</button>
            </form>
    <?php else: ?>
        <p class="m-2">Cliquez juste au dessus pour ajouter votre premier genre!</p>
    <?php endif; ?>
    <?php endif; ?>
</div>