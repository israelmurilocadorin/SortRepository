<?php
    include('AbstractSortStrategy.php');
    class SelectionSortStrategy extends AbstractSortStrategy{

        function __construct($array) {
            parent::__construct($array);
        }

        public function ordenar(){
            for($ext=0; $ext<sizeof($this->a)-1;$ext++) // loop externo
            {
                $min = $ext; 
                for($in=$ext+1; $in<sizeof($this->a); $in++){
                    if ($this->a[$in] < $this->a[$min]){
                        $min = $in;    
                    }
                } 
                $this->troca($ext, $min);
            }
        }	
    }

    $a = array();
    for($i = 0;$i < 10;$i++){
        array_push($a,$i);
        shuffle($a);
    }

    $b = new SelectionSortStrategy($a);
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>
