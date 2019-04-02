<?php      
    include('AbstractSortStrategy.php');
    class InsertionSortStrategy extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
        
            $vetor= $this->getElementos();
            for($i=1; $i < sizeof($vetor); $i++){
                $aux = $vetor[$i];
                $j = $i - 1;
      
                while (($j >= 0) && ($aux < $vetor[$j]))
                {
                  $vetor[$j + 1] = $vetor[$j];
                  $j--;
                }
                
                $vetor[$j+1] = $aux;
              }
            $this->setElementos($vetor);
        }
    }

    $a = array();
    for($i = 0;$i <10;$i++){
        array_push($a,$i);
        shuffle($a);
    }
    $b = new InsertionSortStrategy($a);
    echo "\n";
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>