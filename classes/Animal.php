<?php 

    /*
    Criar uma classe Abstrata- ANIMAL - que possui as propriedades protegidas
        - Reino
        - Pele
        - Ambiente
    E os métodos abstratos
        - Respirar
        - Locomover
        - Emitir som
    */
/*classe animal com propriedades reino, pele ambiente, protegidas */

    abstract class Animal {

        protected $reino = "Animal";
        protected $pele;
        protected $ambiente;

        abstract function respirar();
        abstract function locomover();
        abstract function emitirSom();

    }

?>