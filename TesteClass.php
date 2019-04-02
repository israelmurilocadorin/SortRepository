<?php      
    include('AbstractSortStrategy.php');
    class extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
        
            $vetor= $this->getElementos();
           
            $this->setElementos($vetor);
        }
    }

    $a = array();
    for($i = 0;$i <10;$i++){
        array_push($a,$i);
        shuffle($a);
    }
    $b = new BubbleSortStrategy($a);
    echo "\n";
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>