<?php
class SelectionSort{
    public $a= array();

    function __construct() {
        
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
  	$a = new SelectionSort();
  	$a->insert(9);
  	$a->insert(2);
  	$a->insert(5);
  	$a->insert(131);
  	$a->insert(10);
  	$a->ordenar();
  	var_dump($a->getArray());
?>
