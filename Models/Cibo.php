<?php

require_once __DIR__ . '/Prodotti.php';

class Cibo extends Prodotti{
    public $expirationDate = '';
    public $taste = '';

    function __construct($_name = '', $_typology = '', $_quantity = 0, $_material = '', $_expirationDate = '', $_taste = ''){
        parent::__construct($_name, $_typology, $_quantity, $_material);

        $this->expirationDate = $_expirationDate;
        $this->taste = $_taste;
    }
}

?>