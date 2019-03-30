<?php
    class SelectionSortStrategy{
        public $a = array();

        function __construct($a) {
            $this->a = $a;
        }

        public function getArray(){
            return $this->a;
        }
            
        public function insert($value) {
            array_push($this->a,$value);
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
            $this->swap($ext, $min);
            }
        }	

        public function swap($one,$two) {
            $temp  = $this->a[$one];
            $this->a[$one] = $this->a[$two];
            $this->a[$two] = $temp;
        }	  
    }
    //--main--//
    $b=array(1,42,2,5);
    $a = new SelectionSortStrategy($b);
    print_r($a->getArray());
    $a->ordenar();
    print_r($a->getArray());
?>
