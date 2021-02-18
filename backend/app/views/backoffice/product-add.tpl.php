

    <div class="container my-4">
        <p class="display-2">
            Ajouter un<strong>  Dinosaure</strong>
        </p>
        <div class="categories-list">
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
      
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom"name="nom" placeholder="Nom de la catégorie">
            </div>
            <div class="form-group">
                <label for="types">Type</label>
                <select  class="custom-select" id="types"name="types" >
                    <?php foreach($types as $type): ?>
                        <option value="<?=$type->getId() ?>"><?= $type->getName() ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="taille">taille</label>
                <input type="text" class="form-control" id="taille"name="taille" placeholder="Nom du dinosaure">
            </div>
            <div class="form-group">
                <label for="poids">poids</label>
                <input type="text" class="form-control" id="poids"name="poids"placeholder="poids du dinosaure">
            </div>
            <div class="form-group">
                <label for="picture">Image</label>
                <input type="file" class="form-control" id="picture" name="picture" aria-describedby="pictureHelpBlock"
                accept="image/png, image/jpeg">
                <small id="pictureHelpBlock" class="form-text text-muted">
                    
                </small>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block ">Valider</button>
        </form>
    </div>
</div>

    <!-- And for every user interaction, we import Bootstrap JS components -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>