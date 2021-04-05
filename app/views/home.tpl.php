    <main class="card-display">
        <?php foreach($pokemonsInHome as $pokemon): ?>
            <div class="pokemon-card">
                <a href = "<?= $router->generate('detail', ['id' => $pokemon->getId()]) ?>"><img src="<?=$baseUri . '/img/' .$pokemon ->getNumero() . ".png"?>" alt="Image de Pokemon"></a>
                <h3>
                    <a href = "<?= $router->generate('detail', ['id' => $pokemon->getId()]) ?><?= '# ' . $pokemon->getNumero() . ' ' . $pokemon->getNom() ?>">
                    #<?= $pokemon->getNumero()?> <?= $pokemon->getNom()?>
                    </a>
                </h3>
            </div>
        <?php endforeach; ?>
    </main>
