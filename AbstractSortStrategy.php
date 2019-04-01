<?php
  include('IStrategy.php');
  abstract class AbstractSortStrategy implements IStrategy{
    public $a = array();

    function __construct($elementos){
      $this->a = $elementos;
    }
    
    public abstract function ordenar();

    public function getElementos(){
			return $this->a;
    }
    
    public function setElementos($elementos){
      $this->a = $elementos;
    }

    public function troca($one,$two) {
      $temp  = $this->a[$one];
      $this->a[$one] = $this->a[$two];
      $this->a[$two] = $temp;
    }

    public function tela() {
      foreach ($this->a as &$value){
        echo $value . " ";
      }
    }

  }
?>