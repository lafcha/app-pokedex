<main>
    <h2>Cliquez sur un type pour voir tous les Pokémons de ce type</h2>
    <div class = "types-contener">
        <?php foreach ($pokemonsTypes as $type): ?>
            <div class="type-btn" style="background-color: #<?=$type->getColor() ?>;"><a href="<?= $router->generate('type', ['id' => $type->getId()]) ?>"><?= $type->getName() ?></a></div>
        <?php endforeach; ?>
    </div>
</main>
