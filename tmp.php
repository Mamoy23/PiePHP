<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Films</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <h1 class="text-dark text-center m-1">Tous les films</h1>
        <?php if(isset($result)):?>
        <table class="table">
            <thead>
                <tr>            
                    <th>Nom</th>
                    <th>Date de sortie</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $result):?>
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
   
</body>
</html>