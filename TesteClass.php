<?php      
    include('AbstractSortStrategy.php');
    class BubbleSortStrategy extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
        
            $data = $this->getElementos();
            $tamanho = sizeof($data);
            $percorrerAteP = $tamanho-1;

            for ($aux = 0; $aux < $tamanho; $aux++) {
                for($aux2 = 0; $aux2 < $percorrerAteP ; $aux2++) {
                    if($data[$aux2] > $data [$aux2+1]) {
                        $this->troca($aux2,$aux2+1);
                    }
                }
            }

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