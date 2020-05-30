<?php

    require_once('./classes/Anfibio.php');

    /*
    DESAFIO
        Construir a classe sapo que estenderá a classe Anfibio que terá os seguintes atributos
        - Locomoção: 'Pulo'
        - Especificidade: (propriedade acessada através de um método get):
        Mas ao inve´s dea acessar a propriedade $this->especificidade, quero retornar o método seTransformar(), (logo precisaremos efinir esse método também).
        por sua vez, o método seTRansformar deve retornar a string 'De girino virei sapo' 
    */

    class Sapo extends Anfibio{
    
        public function locomover(){
            return 'Pulo';
        }

        public function getEspecificidade(){
            return $this->seTransformar();
        }

        public function seTransformar(){
            echo 'De Girino virei Sapo';
        }
    }
?>