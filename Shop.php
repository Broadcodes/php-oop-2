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


    var_dump($cibo);
    var_dump($cuccia);
    var_dump($trasportino);
    var_dump($collare);
    var_dump($giochi);
    var_dump($prodottiPulizia);

 ?>