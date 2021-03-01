<div class="detail-dino">
  <div class="row">
        <div class="col">
            <img src="<?=$dinosaure->getPicture()?>" alt="..."style="
    width: 800px;
    height: 500px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    " >
        </div>
       
        
    
        <div class="col">
            <div class="card" style="">
                <div class="card-header"><?=$dinosaure->getnom()?></div> 
                    <div class="card-body"> 
                        
                        <ul>
                            <div class="dinosaure-type">
                                <?php foreach($types as $type) { ?>
                                    <li style="background-color: #<?=$type->getColor()?>;">
                                        <a href="<?=$router->generate('type', ['id' => $type->getId()])?>"><?=$type->getName()?></a>
                                    </li>
                                 <?php } ?>
                                </div>
                            <div class="infos">
                            <li>
                               <h2>Taille :<?=$dinosaure->getTaille()?></h2> 
                            </li>
                            <li>
                               <h2>Poids :<?=$dinosaure->getPoids()?></h2> 
                            </li>
                        </div>
                        </ul>
                    </div>
                
            </div>
        </div>
    
</div>
<footer>
    <a  class="btn btn-primary" href="<?=$router->generate('home')?>">Revenir à la liste </a>
</footer>
    
     
        
        