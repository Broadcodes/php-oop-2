<?php

require_once __DIR__ . '/Prodotti.php';

class Collari extends Prodotti{
    public $color = '';

    function __construct($_name = '', $_typology = '', $_quantity = 0, $_material = '', $_color = ''){
        parent::__construct($_name, $_typology, $_quantity, $_material);

        $this->color = $_color;
    }
}

?>