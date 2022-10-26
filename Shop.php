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

$prodottiPulizia = new Prodotti('Shampoo delicato', 'Gatto', 0, 'Liquido');
$prodottiPulizia->setPrice(1.15);
?>
<h1>Prodotti presenti nello shop:</h1>

<div class="container">
    <div>
        <h2>Prodotti Alimentari</h2>
        <p>Nome: <?= $cibo->name ?> - Tipologia: <?= $cibo->typology ?> - Quantità: <?= $cibo->quantity ?>
            - Materiale: <?= $cibo->material ?> - Data di scadenza: <?= $cibo->expirationDate ?>
            - Gusto: <?= $cibo->taste ?> - Prezzo: <?= $cibo->price ?></p>
    </div>

    <div>
        <h2>Prodotti Riposo</h2>
        <p>Nome: <?= $cuccia->name ?> - Tipologia: <?= $cuccia->typology ?> - Quantità: <?= $cuccia->quantity ?> -
            Materiale: <?= $cuccia->material ?> - Taglia: <?= $cuccia->size ?> - Colore: <?= $cuccia->color ?> -
            Prezzo: <?= $cuccia->price ?></p>
    </div>

    <div>
        <h2>Prodotti Trasporto</h2>
        <p>Nome: <?= $trasportino->name ?> - Tipologia: <?= $trasportino->typology ?> - Quantità: <?= $trasportino->quantity ?> -
            Materiale: <?= $trasportino->material ?> - Taglia: <?= $trasportino->size ?> - Colore: <?= $trasportino->color ?> -
            Prezzo: <?= $trasportino->price ?></p>
    </div>

    <div>
        <h2>Prodotti Collare</h2>
        <p>Nome: <?= $collare->name ?> - Tipologia: <?= $collare->typology ?> - Quantità: <?= $collare->quantity ?> -
            Materiale: <?= $collare->material ?> - Colore: <?= $collare->color ?> - Prezzo: <?= $collare->price ?></p>
    </div>

    <div>
        <h2>Prodotti Svago</h2>
        <p>Nome: <?= $giochi->name ?> - Tipologia: <?= $giochi->typology ?> - Quantità: <?= $giochi->quantity ?> -
            Materiale: <?= $giochi->material ?> - Prezzo: <?= $giochi->price ?></p>
    </div>

    <div>
        <h2>Prodotti Cura dell'Animale</h2>
        <p>Nome: <?= $prodottiPulizia->name ?> - Tipologia: <?= $prodottiPulizia->typology ?> - Quantità: <?= $prodottiPulizia->quantity ?> -
            Materiale: <?= $prodottiPulizia->material ?> - Prezzo: <?= $prodottiPulizia->price ?></p>
    </div>
</div>

<?php

$utentiRegistrati = [];

echo "<h2>-----------------------------------------------------------------------------------</h2>";
echo "<h1>Esempio 1: Creazione di un primo utente non presente nel sistema: </h1>";

require_once __DIR__ . '/Models/Utente.php';
require_once __DIR__ . '/Models/CartaDiCredito.php';

$cartaDiCredito1 = new CartaDiCredito('Marco Baldini', '3254 3453 6546 2344', '09/23', '356');
$utente1 = new Utente('Marco', 'Baldini', 'marco.baldini@bing.com', 'Via Umberto I', 'Milano', '3456577565', $cartaDiCredito1);

if ($utente1->registerUser() == $utentiRegistrati) {
    echo "<h4>Dati relativi all'utente in quanto presente nel sistema: </h4>";
    var_dump($utente1);
    echo "<h4>Se è presente nell'array recupero i dati della carta</h4>";
    echo "<h5>Intestatario: " . $cartaDiCredito1->getAccountholder() .
        "<br>Numero della carta: " . $cartaDiCredito1->getNumberCard() .
        "<br>Scadenza: " . $cartaDiCredito1->getDeadline() .
        "<br>CVV: " . $cartaDiCredito1->getCVV() . "</h5>";
    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $cuccia->buyProduct();
        echo "<h4>L'utente ha acquistato una cuccia, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Riposo</h2>
                <p>Nome: <?= $cuccia->name ?> - Tipologia: <?= $cuccia->typology ?> - Quantità: <?= $cuccia->quantity ?> -
                    Materiale: <?= $cuccia->material ?> - Taglia: <?= $cuccia->size ?> - Colore: <?= $cuccia->color ?> -
                    Prezzo: <?= $cuccia->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $utentiRegistrati = $utente1->registerUser();

    echo "<h4>Dati relativi all'utente dopo la registrazione in quanto non presente nel sistema: </h4>";
    var_dump($utentiRegistrati);

    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $cuccia->buyProduct();
        echo "<h4>L'utente ha acquistato una cuccia, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Riposo</h2>
                <p>Nome: <?= $cuccia->name ?> - Tipologia: <?= $cuccia->typology ?> - Quantità: <?= $cuccia->quantity ?> -
                    Materiale: <?= $cuccia->material ?> - Taglia: <?= $cuccia->size ?> - Colore: <?= $cuccia->color ?> -
                    Prezzo: <?= $cuccia->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

echo "<h2>-----------------------------------------------------------------------------------</h2>";
echo "<h1>Esempio 2: Lo stesso utente già presente nel sistema effettua un nuovo acquisto ma il prodotto risulta terminato: </h1>";

if ($utente1->registerUser() == $utentiRegistrati) {
    echo "<h4>Dati relativi all'utente in quanto presente nel sistema: </h4>";
    var_dump($utente1);
    echo "<h4>Se è presente nell'array recupero i dati della carta</h4>";
    echo "<h5>Intestatario: " . $cartaDiCredito1->getAccountholder() .
        "<br>Numero della carta: " . $cartaDiCredito1->getNumberCard() .
        "<br>Scadenza: " . $cartaDiCredito1->getDeadline() .
        "<br>CVV: " . $cartaDiCredito1->getCVV() . "</h5>";
    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $prodottiPulizia->buyProduct();
        echo "<h4>L'utente ha acquistato un prodotto per la pulizia dell'animale, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Cura dell'Animale</h2>
                <p>Nome: <?= $prodottiPulizia->name ?> - Tipologia: <?= $prodottiPulizia->typology ?> - Quantità: <?= $prodottiPulizia->quantity ?> -
                Materiale: <?= $prodottiPulizia->material ?> - Prezzo: <?= $prodottiPulizia->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $utentiRegistrati = $utente1->registerUser();

    echo "<h4>Dati relativi all'utente dopo la registrazione in quanto non presente nel sistema: </h4>";
    var_dump($utentiRegistrati);

    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $prodottiPulizia->buyProduct();
        echo "<h4>L'utente ha acquistato un prodotto per la pulizia dell'animale, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Cura dell'Animale</h2>
                <p>Nome: <?= $prodottiPulizia->name ?> - Tipologia: <?= $prodottiPulizia->typology ?> - Quantità: <?= $prodottiPulizia->quantity ?> -
                Materiale: <?= $prodottiPulizia->material ?> - Prezzo: <?= $prodottiPulizia->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

echo "<h2>-----------------------------------------------------------------------------------</h2>";
echo "<h1>Esempio 3: Lo stesso utente già presente nel sistema effettua un nuovo acquisto: </h1>";

if ($utente1->registerUser() == $utentiRegistrati) {
    echo "<h4>Dati relativi all'utente in quanto presente nel sistema: </h4>";
    var_dump($utente1);
    echo "<h4>Se è presente nell'array recupero i dati della carta</h4>";
    echo "<h5>Intestatario: " . $cartaDiCredito1->getAccountholder() .
        "<br>Numero della carta: " . $cartaDiCredito1->getNumberCard() .
        "<br>Scadenza: " . $cartaDiCredito1->getDeadline() .
        "<br>CVV: " . $cartaDiCredito1->getCVV() . "</h5>";
    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $cibo->buyProduct();
        echo "<h4>L'utente ha acquistato un prodotto alimentare, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Alimentari</h2>
                <p>Nome: <?= $cibo->name ?> - Tipologia: <?= $cibo->typology ?> - Quantità: <?= $cibo->quantity ?>
                - Materiale: <?= $cibo->material ?> - Data di scadenza: <?= $cibo->expirationDate ?>
                - Gusto: <?= $cibo->taste ?> - Prezzo: <?= $cibo->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    $utentiRegistrati = $utente1->registerUser();

    echo "<h4>Dati relativi all'utente dopo la registrazione in quanto non presente nel sistema: </h4>";
    var_dump($utentiRegistrati);

    // e decremento la quantità di un prodotto, ad esempio una cuccia, sempre se la quantità disponibile non sia uguale a zero
    try {
        $cibo->buyProduct();
        echo "<h4>L'utente ha acquistato un prodotto alimentare, la disponibilità nell'e-commerce relativo al prodotto è stata aggiornata: </h4>"
        ?>
            <div>
                <h2>Prodotti Alimentari</h2>
                <p>Nome: <?= $cibo->name ?> - Tipologia: <?= $cibo->typology ?> - Quantità: <?= $cibo->quantity ?>
                - Materiale: <?= $cibo->material ?> - Data di scadenza: <?= $cibo->expirationDate ?>
                - Gusto: <?= $cibo->taste ?> - Prezzo: <?= $cibo->price ?></p>
            </div>
        <?php
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

<style>
    .container {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>