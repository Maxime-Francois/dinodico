<section class="cards text-center">
    <?php foreach ($dinosaures as $dinosaure ) { ?>
    <article class="zoom">
        <img  class ="article-img"src="<?=$dinosaure->getPicture()?>" alt="Image du dinosaure">
        
        <a  class="btn btn-primary" href="<?=$router->generate('dinosaures', ['id' => $dinosaure->getId()])?>" role="button" ><?= $dinosaure->getNom()?> </a>
    </article>
    
<?php } ?>
</section>
