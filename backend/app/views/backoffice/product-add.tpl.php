

    <div class="container my-4">
        <p class="display-2">
            Ajouter un<strong>  Dinosaure</strong>
        </p>
        <div class="categories-list">
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
      
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom"name="nom" placeholder="Nom du dinosaure">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="custom-select" name="type" id="type" aria-describedby="categoryHelpBlock">
                    <?php foreach ($types as $type) : ?>
                    <option
                        value="<?= $type->getId() ?>"
                        
                    >
                            <?= $type->getName() ?>
                    </option>
                    <?php endforeach; ?>
            </select>
            </div>
            <div class="form-group">
                <label for="taille">taille</label>
                <input type="text" class="form-control" id="taille"name="taille" placeholder="taille du dinosaure">
            </div>
            <div class="form-group">
                <label for="poids">poids</label>
                <input type="text" class="form-control" id="poids"name="poids"placeholder="poids du dinosaure">
            </div>
            <div class="form-group">
            <label for="picture">Image</label>
            <input type="text" class="form-control" id="picture" name="picture" placeholder="url de l'image" aria-describedby="pictureHelpBlock">
            <small id="pictureHelpBlock" class="form-text text-muted">
                URL relative d'une image (jpg, gif, svg ou png) 
            </small>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block ">Valider</button>
        </form>
    </div>
</div>