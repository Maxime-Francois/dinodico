

    <div class="container my-4">
        <p class="display-2">
            Ajouter un<strong>  type</strong>
        </p>
        <div class="categories-list">
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
      
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name"placeholder="Nom de la catégorie">
            </div>
            <div class="form-group">
                <label for="color">couleur</label>
                <input type="text" class="form-control" id="color"name="color" placeholder="couleur de la catégorie">
                <small id="subtitleHelpBlock" class="form-text text-muted">
                    ajouter une couleur au format rgb ou #
                </small>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block ">Valider</button>
        </form>
    </div>
</div>

