<?php
    class Utente{
        public $name;
        public $surname;
        public $email;
        public $address;
        public $city;
        public $phone;
        public $creditCard;

        function __construct($_name, $_surname, $_email = '', $_address, $_city, $_phone = '', $_creditCard = null){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
            $this->address = $_address;
            $this->city = $_city;
            $this->phone = $_phone;
            $this->creditCard = $_creditCard;
        }

        public function registerUser(){
            return [$this->name, $this->surname, $this->email, $this->address, $this->city, $this->phone, $this->creditCard];
        }

        public function isRegister($_price){
            return $_price - ((20 * $_price) / 100);
        }
    }
?>