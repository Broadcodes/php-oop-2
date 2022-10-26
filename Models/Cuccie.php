<?php

require_once __DIR__ . '/Prodotti.php';

class Cuccie extends Prodotti{
    public $size = '';
    public $color = '';

    function __construct($_name = '', $_typology = '', $_quantity = 0, $_material = '', $_size = '', $_color = ''){
        parent::__construct($_name, $_typology, $_quantity, $_material);

        $this->size = $_size;
        $this->color = $_color;
    }
}

?>