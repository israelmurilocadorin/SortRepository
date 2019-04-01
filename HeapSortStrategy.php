<?php
    include('AbstractSortStrategy.php');
    class HeapSortStrategy extends AbstractSortStrategy{
       
        function __construct($array) {
            parent::__construct($array);
        }

        public function ordenar(){
            $elementos = $this->getElementos();
            $n = sizeof($elementos);

            for ($i = $n / 2 - 1; $i >= 0; $i--){
                $this->amontoar($elementos, $n,$i);
            }
                
            for ($i = $n - 1; $i >= 0; $i--) {
                //swap
                $temp = $elementos[0];
                $elementos[0] = $elementos[$i];
                $elementos[$i] = $temp;

                $this->amontoar($elementos, $i, 0);
            }
        }
        
        public function amontuar($elementos, $n, $i) {
            $maior = $i;
            $l = 2 * $i + 1;
            $r = 2 * $i + 2;
    
            if ($l < $n && $elementos[$l] > $elementos[$maior])
                $maior = $l;
    
            if ($r < $n && $elementos[$r] > $elementos[$maior])
                $maior = $r;
    
            if ($maior != $i) {
                //swap
                $swap = $lementos[$i];
                $elementos[$i] = $elementos[$maior];
                $elementos[$maior] = $swap;
    
                $this->amontuar($elementos, $n, $maior);
            }
        }
    }

    $a = array();
    for($i = 0;$i < 10;$i++){
        array_push($a,$i);
        shuffle($a);
    }

    $b = new HeapSortStrategy($a);
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>