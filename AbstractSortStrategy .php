<?php
    abstract class AbstractSortStrategy{
            private $elementos = array();

            function __construct($array){
                $this->elemetos = $array;
            }
            
            public abstract function ordena();

            public function getElementos(){
                return $this->elementos;
            }

            public function setElementos($array){
                $this->elementos = $array;
            }
            
            protected function trocar($atual, $prox){
                $tmp = $this->getElementos()[$atual];
                $this->getElementos()[$atual] = $this->getElementos()[$prox];
                $this->getElementos()[$prox]  = $tmp;
            }

            protected function tela() {
                $tamanhoDoElementos = sizeof($this->elementos);

                for ($i = 0; $i < $tamanhoDoElementos; $i++) {
                    $j = $this->elementos[$i];
                    echo "tela:\n";
                    echo $j . " ";
                }
            }

        }
?>