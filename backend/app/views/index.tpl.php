<section class="cards text-center">
  <?php foreach ($dinosaures as $dinosaure ) { ?>
  
        <article class="zoom">
          <img  class ="article-img"src="<?=$baseUri?>/assets/img/<?=$dinosaure->getNumero()?>.jpg" alt="Image du dinosaure">
          
          <button type="button" class="btn btn-primary" ><?= $dinosaure->getNom()?> 
         
          </button>
         </article>
         
<?php } ?>
</section>

