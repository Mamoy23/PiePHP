<div class="container">
    <h1 class="text-center text-dark">Tous les genres</h1>
    <table class="table">
        <?php foreach ($results as $result):?>
            <tr>
                <td><?= $result['name']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>