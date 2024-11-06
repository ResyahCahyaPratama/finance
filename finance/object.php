<?php
    class Kucing{
        var $nama;
        public function __construct($nama){
            $this->nama = $nama;
        }
        public function displayName(){
            echo $this->nama;
        }
    }

    $tom = new Kucing("Tom");
    $tom->displayName();