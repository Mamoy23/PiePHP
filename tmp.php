<div class="container">
    <h1 class="text-dark text-center m-1">Tous les films</h1>
    <?php if(isset($results)): ?>
    <table class="table">
        <thead>
            <tr>            
                <th>Nom</th>
                <th>Date de sortie</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result): ?>
            <tr>
                <td><?= htmlentities( $result['name'] )?></td>
                <td><?= htmlentities( $result['date'] )?></td>
                <td><?= htmlentities( $result['genre'] )?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
    <?php endif; ?>
</div>