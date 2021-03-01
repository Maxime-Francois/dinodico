<!----TODO---->
<h1 style="color:white;">Cliquez sur un type pour voir tous les dinosaures de ce type</h1>

<ul class="types-list">
    <?php foreach ($types as $type) { ?>
    <li>
   <a   style="background-color: #<?=$type->getColor()?>" href="<?=$router->generate('type', ['id' => $type->getId()])?>">
            <?=$type->getName()?>
        </a>
    </li>
    <?php } ?>
</ul>

