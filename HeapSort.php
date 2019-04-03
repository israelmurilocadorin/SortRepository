<?php
    include('AbstractSortStrategy.php');
    class HeapSort extends AbstractSortStrategy{
        
        function __construct($array){
            parent::__construct($array);
        }
        
        public function ordenar(){
            $array = $this->getElementos();
            $n = sizeof($array);

            for ($i = $n / 2 - 1; $i >= 0; $i--)
               $this->heapify($array, $n, $i);

            for ($i = $n - 1; $i >= 0; $i--)
            {
                $temp = $array[0];
                $array[0] = $array[$i];
                $array[$i] = $temp;

                $this->heapify($array, $i, 0);
            }

        }

        public function heapify($elementos, $n, $i){
            $largest = $i;
            $l = 2 * $i + 1;
            $r = 2 * $i + 2;
    
            if ($l < $n && $elementos[$l] > $elementos[$largest])
                $largest = $l;
    
            if ($r < $n && $elementos[$r] > $elementos[$largest])
                $largest = $r;
    
            if ($largest != $i) {
                $swap = $elementos[$i];
                $elementos[$i] = $elementos[$largest];
                $elementos[$largest] = $swap;
                $this->heapify($elementos,$n, $largest);
            }
        }
    }

    $array = array();
    for($i = 0;$i < 10;$i++){
        array_push($array,$i);
        shuffle($array);
    }

    $testa = new HeapSort($array);
    $testa->tela();
    $testa->ordenar();
    echo "\n";
    $testa->tela();
?>