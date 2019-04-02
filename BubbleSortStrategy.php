<?php      
    include('AbstractSortStrategy.php');
    class BubbleSortStrategy extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
        
            $vetor= $this->getElementos();
            $tamanho = sizeof($vetor);
            $percorrerAteP = $tamanho-1;
            
            for($cont = 0; $cont < $tamanho; $cont ++)
            {
                for($cont2 = 0; $cont2 < $percorrerAteP; $cont2++)
                {
                    if($vetor[$cont2 + 1] <= $vetor[$cont2])
                    {
                        $aux = $vetor[$cont2];
                        $vetor[$cont2] = $vetor[$cont2 + 1];
                        $vetor[$cont2 + 1] = $aux;
                    }                    
                }
                $lista[$cont] = $aux;
            }
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