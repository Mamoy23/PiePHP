<div class="container">
    <h1 class="text-dark text-center m-1">Ajouter un film</h1>
    
    <form action="add" method="POST" class="form-group m-1">
        <input type="text" name="name" placeholder="Nom du film" class="form-control m-1">
        <label for="date" class="text-dark m-1">Date de sortie</label>
        <input type="date" name="date" min="1900-01-01" max="2019-04-01" class="form-control m-1">

        <select name="genre" id="genre" class="form-control m-1">
            <option value="">Genre</option>
            <?php foreach($genres as $genre):?>
                <option value="<?=$genre['name']?>"><?=ucfirst($genre['name'])?></option>
            <?php endforeach;?>
        </select>
        <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']?>">
        <button type="submit" class="btn btn-outline-success m-1">Ajouter</button>
    </form>
</div>