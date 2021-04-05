<main>
    <section id = "titre-detail"><h2>Détail de <?= $onePokemon->getNom()?></h2></section>
    <div id = "pokemon-detail-card">
        <div id="detail-img-div"><img src="<?=$baseUri . '/img/' .$onePokemon ->getNumero() . ".png"?>" alt="Image de <?= $onePokemon->getNom()?>"></div>
        <div id="detail-info-div">
            <h3><?= '# ' . $onePokemon->getNumero() . ' ' . $onePokemon->getNom() ?></h3>
            <div class = "detail-button-wrap">
                <?php foreach($typesForOnePokemon as $type):?>
                    <div class="detail-type-button" style ="background : #<?= $type->getColor()?>"><a href="<?= $router->generate('type', ['id' => $type->getTypeId()]) ?>"><?= $type->getName() ?></a></div>
                <?php endforeach; ?>

            </div>
            <div>
                <h4>Statistiques</h4>
                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Pv</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getPv()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getPv() *$stats ?>"></div>
                    </div>

                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Attaque</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getAttaque()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getAttaque() *$stats?>"></div>
                    </div>

                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Defense</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getDefense()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getDefense() *$stats?>"></div>
                    </div>

                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Attaque Spé.</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getAttaqueSpe()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getAttaqueSpe() *$stats?>"></div>
                    </div>

                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Défense Spé.</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getDefenseSpe()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getDefenseSpe() *$stats?>"></div>
                    </div>

                    <div class="detail-stats-line progress">
                        <div class="detail-stats-name">Vitesse</div>
                        <div class="detail-stats-stats"><?= $onePokemon->getVitesse()?></div>
                        <div class="detail-stats-bar" data-progress ="<?= $onePokemon->getVitesse() *$stats?>"></div>
                    </div>
            </div>
        </div>
    </div>
    <div><p id="retour-liste"><a href="<?= $router->generate('home')?>">Revenir à la liste</a></p></div>
</main>