<!-- 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Bonus:
Definire la carta di credito come classe e associarla all'utente
 -->

<?php

require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccie.php';
require_once __DIR__ . '/Models/Trasportini.php';
require_once __DIR__ . '/Models/Collari.php';

$cibo = new Cibo('Crocchette di carne', 'Gatto', 5, 'Solido', '13/12/2023', 'Manzo');
$cibo->setPrice(1.23);

$cuccia = new Cuccie('HomeSweetHome', 'Cane', 3, 'Legno', 'Large', 'Blue');
$cuccia->setPrice(41.99);

$trasportino = new Trasportini('EasyMove', 'Gatto', 1, 'Plastica', 'Small', 'Red');
$trasportino->setPrice(14.56);

$collare = new Collari('Rooney', 'Gatto', 25, 'Tessuto', 'Black');
$collare->setPrice(2.13);

$giochi = new Prodotti('Bone', 'Cane', 2, 'Gomma');
$giochi->setPrice(2.67);

$prodottiPulizia = new Prodotti('Shampoo delicato', 'Gatto', 2, 'Liquido');
$prodottiPulizia->setPrice(1.15);
?>
<h1>Prodotti presenti nello shop:</h1>

<div style="display: flex; flex-wrap: wrap; justify-content: center">
    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Alimentari</h2>
        <ul>
            <li>
                <p>Nome: <?= $cibo->name ?></p>
                <p>Tipologia: <?= $cibo->typology ?></p>
                <p>Quantità: <?= $cibo->quantity ?></p>
                <p>Materiale: <?= $cibo->material ?></p>
                <p>Data di scadenza: <?= $cibo->expirationDate ?></p>
                <p>Gusto: <?= $cibo->taste ?></p>
                <p>Prezzo: <?= $cibo->price ?></p>
            </li>
        </ul>
    </div>

    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Riposo</h2>
        <ul>
            <li>
                <p>Nome: <?= $cuccia->name ?></p>
                <p>Tipologia: <?= $cuccia->typology ?></p>
                <p>Quantità: <?= $cuccia->quantity ?></p>
                <p>Materiale: <?= $cuccia->material ?></p>
                <p>Taglia: <?= $cuccia->size ?></p>
                <p>Colore: <?= $cuccia->color ?></p>
                <p>Prezzo: <?= $cuccia->price ?></p>
            </li>
        </ul>
    </div>

    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Trasporto</h2>
        <ul>
            <li>
                <p>Nome: <?= $trasportino->name ?></p>
                <p>Tipologia: <?= $trasportino->typology ?></p>
                <p>Quantità: <?= $trasportino->quantity ?></p>
                <p>Materiale: <?= $trasportino->material ?></p>
                <p>Taglia: <?= $trasportino->size ?></p>
                <p>Colore: <?= $trasportino->color ?></p>
                <p>Prezzo: <?= $trasportino->price ?></p>
            </li>
        </ul>
    </div>

    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Collare</h2>
        <ul>
            <li>
                <p>Nome: <?= $collare->name ?></p>
                <p>Tipologia: <?= $collare->typology ?></p>
                <p>Quantità: <?= $collare->quantity ?></p>
                <p>Materiale: <?= $collare->material ?></p>
                <p>Colore: <?= $collare->color ?></p>
                <p>Prezzo: <?= $collare->price ?></p>
            </li>
        </ul>
    </div>

    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Svago</h2>
        <ul>
            <li>
                <p>Nome: <?= $giochi->name ?></p>
                <p>Tipologia: <?= $giochi->typology ?></p>
                <p>Quantità: <?= $giochi->quantity ?></p>
                <p>Materiale: <?= $giochi->material ?></p>
                <p>Prezzo: <?= $giochi->price ?></p>
            </li>
        </ul>
    </div>

    <div style="padding: 10px; margin: 10px; width: 25%; border: 1px solid black">
        <h2>Prodotti Cura dell'Animale</h2>
        <ul>
            <li>
                <p>Nome: <?= $prodottiPulizia->name ?></p>
                <p>Tipologia: <?= $prodottiPulizia->typology ?></p>
                <p>Quantità: <?= $prodottiPulizia->quantity ?></p>
                <p>Materiale: <?= $prodottiPulizia->material ?></p>
                <p>Prezzo: <?= $prodottiPulizia->price ?></p>
            </li>
        </ul>
    </div>
</div>

<?php

?>