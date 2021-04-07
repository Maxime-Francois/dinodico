<div class="container my-4">
        <p class="display-2">
            <strong>  Login</strong>
        </p>
        <div class="categories-list">
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
      
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="nom">Email</label>
                <input type="text" class="form-control" id="nom"name="nom" placeholder="veuillez rentrer votre adresse email">
            </div>
            <div class="form-group">
                <label for="nom">Mot de passe</label>
                <input type="text" class="form-control" id="nom"name="nom" placeholder="veuillez rentrer votre mot de passe">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block ">Valider</button>
        </form>
    </div>
</div>