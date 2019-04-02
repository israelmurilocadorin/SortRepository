<?php      
    include('AbstractSortStrategy.php');
    class ShellSortStrategy extends AbstractSortStrategy{
        
        function __construct($array)
        {   
            parent::__construct($array);
        }

        public function ordenar()
        {    
            $array =$this->a;
            $x = round(sizeof($array) / 2);
            var_dump($x);
            while($x > 0)
            {
                for($i = $x; $i<sizeof($array); $i++)
                {
                    $temp = $array[$i];
                    $j = $i;                    while($j >= $x && $array[$j-$x] > $temp)

                    while($j >= $x && $array[$j-$x] > $temp)
                    {
                        $array[$j] = $array[$j - $x];
                        $j -= $x;
                    }
                    $array[$j] = $temp;
                }
                $x = round($x / 2.2);
            }
            return $array;
        }
    

    }

    $a = array();
    for($i = 0;$i <10;$i++){
        array_push($a,$i);
        shuffle($a);
    }
    $b = new ShellSortStrategy($a);
    $b->tela();
    $b->ordenar();
    echo "\n";
    $b->tela();

?>