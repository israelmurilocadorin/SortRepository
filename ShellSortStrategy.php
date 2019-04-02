<?php      
    include('AbstractSortStrategy.php');
    class ShellSortStrategy extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
            $data = $this->getElementos();
            $len = sizeof($data);
            $inner; 
            $outer;
            $temp;
            $h = 1;

            while ($h <= $len / 3)
                $h = $h * 3 + 1;
    
            while ($h > 0) {
    
                for ($outer = $h; $outer < $len; $outer++) {
                    $temp = $data[$outer];
                    $inner = $outer;
    
                    while ($inner > $h - 1 && $data[$inner -$h] >= $temp) {
                        $data[$inner] = $data[$inner -$h];
                        $inner -= $h;
                    }
                    $data[$inner] = $temp;
                }
                $h = ($h - 1) / 3;  
            }
            $this->setElementos($data);
        }
    
    }

    $a = array();
    for($i = 0;$i <10;$i++){
        array_push($a,$i);
        shuffle($a);
    }
    $b = new ShellSortStrategy($a);
    echo "\n";
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>