<?php
  include('IStrategy.php');
  abstract class AbstractSortStrategy implements IStrategy{
    public $a;

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
      $temp  = $this->getElementos()[$one];
      $this->getElementos()[$one] = $this->getElementos()[$two];
      $this->getElementos()[$two] = $temp;
    }

    public function tela() {
      foreach ($this->a as &$value){
        echo $value . " ";
      }
    }
    
    public function cala() {
      echo "calaa";
    }
  }
?>