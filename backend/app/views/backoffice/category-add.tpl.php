

    <div class="container my-4">
        <p class="display-2">
            Ajouter un<strong>  type</strong>
        </p>
        <div class="categories-list">
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
      
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="Nom de la catégorie">
            </div>
            <div class="form-group">
                <label for="name">couleur</label>
                <input type="text" class="form-control" id="name" placeholder="Nom de la catégorie">
                <small id="subtitleHelpBlock" class="form-text text-muted">
                    ajouter une couleur au format rgb ou #
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