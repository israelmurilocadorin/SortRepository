<?php
class BubbleSort {

    public $vetor = array();

    function __construct() {
        for($z = 0; $z < 5; $z++) {
            $this->vetor[$z] = rand(0, 100);  	 
        }
    }
    
    public function printVetor() {
        return $this->vetor;
    }

    public function ordenar() {
        for($cont = 0; $cont < 5; $cont ++) {
            for($cont2 = 0; $cont2 < 4; $cont2++) {
                if($this->vetor[$cont2 + 1] <= $this->vetor[$cont2]) {
                    $aux = $this->vetor[$cont2];
                    $this->vetor[$cont2] = $this->vetor[$cont2 + 1];
                    $this->vetor[$cont2 + 1] = $aux;
                }                    
            }
            $lista[$cont1] = $aux;
        }
    }
}

$a = new BubbleSort();
var_dump($a->printVetor());

$a->ordenar();
print_r($a->printVetor());
?>
