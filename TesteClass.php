<?php
        abstract class AbstractSortStrategy{
            public $elementos = array();

            function __construct($array){
                $this->elemetos = $array;
            }
            
            public abstract function ordena();

            function getElementos(){
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

            public function tela() {
                $tamanhoDoElementos = sizeof($this->elementos);

                for ($i = 0; $i < $tamanhoDoElementos; $i++) {
                    $j = $this->elementos[$i];
                    echo "tela:\n";
                    echo $j . " ";
                }
            }

    }
    
    class A extends AbstractSortStrategy{
        function __construct($array)
        {
            parent::__construct($array);
        }
        public function ordena(){

        }
    }
    echo "TESTE MAIN";
    $b = array(1,2,3,4,12);
    var_dump($b);
    $a = new A($b);
    var_dump($a->getElementos());
    
?>