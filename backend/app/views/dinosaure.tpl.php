<div class="detail-dino">
  <div class="row">
        <div class="col">
            <img src="<?=$baseUri?>/assets/img/<?=$dinosaure->getNumero()?>.jpg" alt="..." >
        </div>
        <div class="col">
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
    
     
        
        