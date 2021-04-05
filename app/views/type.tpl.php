<main >

    <div class="card-display">
        <?php foreach($pokemonsByType as $pokemon): ?>
            <div class="pokemon-card">
                <a href = "<?= $router->generate('detail', ['id' => $pokemon->getPokemonId()]) ?>"><img src="<?=$baseUri . '/img/' .$pokemon ->getPokemonNumero() . ".png"?>" alt="Image de Pokemon"></a>
                <h3>
                    <a href = "<?= $router->generate('detail', ['id' => $pokemon->getPokemonId()]) ?><?= '# ' . $pokemon->getPokemonNumero() . ' ' . $pokemon->getNom() ?>">
                    #<?= $pokemon->getPokemonNumero()?> <?= $pokemon->getNom()?>
                    </a>
                </h3>
            </div>
        <?php endforeach; ?>
    </div>
</main>