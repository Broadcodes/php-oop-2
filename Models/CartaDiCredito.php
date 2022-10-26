<?php
    class CartaDiCredito{
        public $accountholder;
        public $numberCard;
        public $deadline;
        public $CVV;

        function __construct($_accountholder, $_numberCard, $_deadline, $_CVV){
            $this->accountholder = $_accountholder;
            $this->numberCard = $_numberCard;
            $this->deadline = $_deadline;
            $this->CVV = $_CVV;
        }

        function getAccountholder(){
            return $this->accountholder;
        }

        function getNumberCard(){
            return $this->numberCard;
        }

        function getDeadline(){
            return $this->deadline;
        }

        function getCVV(){
            return $this->CVV;
        }
    }
