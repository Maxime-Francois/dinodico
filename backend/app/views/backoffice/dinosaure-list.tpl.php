

    <div class="container my-4">
        <p class="display-2">
            liste des <strong>dinosaures</strong>
        </p>
        <div class="card text-white mb-3" style="">
        
        <a href="<?= $router->generate('admin') ?>" class="btn btn-success float-right">Retour</a>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <!-- <th scope="col">image</th> -->
                    <th scope="col">taille</th>
                    <th scope="col">poids</th>
                    <th scope="col">image</th>
                    
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($dinosaures as $dinosaure):?>
                <tr>
                    <th scope="row"><?=$dinosaure->getId() ?></th>
                    <td><?=$dinosaure->getNom() ?></td>
                    <td><?=$dinosaure->getTaille() ?></td>
                    <td><?=$dinosaure->getPoids() ?></td>
                    
                    
                    <td><img src="<?=  $dinosaure->getPicture() ?>" width="50"></td>
                    <td class="text-right">
                        <a href="" class="btn btn-lg btn-warning">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-lg btn-danger dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
             
            </tbody>
        </table><a href="<?= $router->generate('dinosaure-add') ?>" class="btn btn-success ">Ajouter<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a>
    </div>
</div>