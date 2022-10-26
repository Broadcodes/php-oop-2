<!-- 
CATEGORIE PRODOTTI:
|----------------------|----------------------------------------------------------------------------------------------------|-----------------------------|
|                      |  ELEMENTI IN COMUNE                                                                                | ELEMENTI PER SINGOLA CLASSE |
|----------------------|----------------------------------------------------------------------------------------------------|-----------------------------|
| - Cibo;              |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Umido o Solido)             | DATA DI SCADENZA - GUSTO    |
| - Cuccie;            |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Plastica, Tessuto o Legno)  | TAGLIA - COLORE             |
| - Trasportini;       |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Plastica o Tessuto)         | TAGLIA - COLORE             |
| - Collari            |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Plastica o Tessuto)         | COLORE                      |
| - Giochi;            |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Plastica o Tessuto)         |                             |
| - Prodotti pulizia;  |  NOME - TIPOLOGIA (genere di animale) - QUANTITÀ - PREZZO - MATERIALE (Solido o Liquido)           |                             |
|----------------------|----------------------------------------------------------------------------------------------------|-----------------------------|
-->

<?php

class Prodotti{
    public $name;
    public $typology;
    public $quantity;
    public $material;
    public $price;

    function __construct($_name = '', $_typology = '', $_quantity = 0, $_material = ''){
        $this->name = $_name;
        $this->typology = $_typology;
        $this->quantity = $_quantity;
        $this->material = $_material;
    }

    public function setPrice($_price = 0){
        $this->price = $_price;
    }

    public function buyProduct(){
        if($this->quantity > 0){
            $this->quantity--;
        } else {
            throw new Exception('Prodotto terminato');
        }
    }

}

?>