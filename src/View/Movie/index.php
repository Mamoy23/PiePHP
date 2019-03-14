<div class="container">
    <h1 class="text-dark text-center m-1">Tous les films</h1>
    <?php if(isset($results)):?>
    <table class="table">
        <thead>
            <tr>            
                <th>Nom</th>
                <th>Date de sortie</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result):?>
            <tr>
                <td><?= $result['name']?></td>
                <td><?= $result['date']?></td>
                <td><?= $result['genre']?></td>
            </tr>
            <?php endforeach;?> 
        </tbody>
    </table>
    <?php endif;?>
</div>