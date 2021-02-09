<div class="detail-dino">
  <div class="row">
        <div class="col-lg-4">
            <img src="<?=$baseUri?>/assets/img/<?=$dinosaure->getNumero()?>.jpg" alt="..." >
        </div>
        <div class ="col-sm-1">
        <div class="dinosaure-type">
            <?php foreach($types as $type) { ?>
            <li style="background-color: #<?=$type->getColor()?>;">
                <a href="<?=$router->generate('type', ['id' => $type->getId()])?>"><?=$type->getName()?></a>
            </li>
            <?php } ?>
        </div>
    </div>
        <div class="col-md-6">
            <div class="card" style="">
                <div class="card-header"><?=$dinosaure->getnom()?></div>
                    <div class="card-body">
                        
                        <ul>
                            <li>
                               <h2>Taille :<?=$dinosaure->getTaille()?></h2> 
                            </li>
                            <li>
                               <h2>Poids :<?=$dinosaure->getPoids()?></h2> 
                            </li>
                        </ul>
                    </div>
                
            </div>
        </div>
    
</div>
<footer>
    <a href="<?=$router->generate('home')?>">Revenir à la liste</a>
</footer>
    
     
        
        