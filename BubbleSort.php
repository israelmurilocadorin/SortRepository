<?php

class QuickSort {

    public $vetor = array();

    function __construct() {
        for($z = 0; $z < 5; $z++) {
            $this->vetor[$z] = rand(0, 100);  	 
        }
    }
    public function printVetor() {
        return $this->vetor;
    }

    function simple_quick_sort($this->vetor) {
        if(count($this->vetor) <= 1) {
            return $this->vetor;
        } else {
            $pivot = $this->vetor[0];
            $left = array();
            $right = array();
            for($i = 1; $i < count($this->vetor); $i++) {
                if($this->vetor[$i] < $pivot) {
                    $left[] = $arr[$i];
                } else {
                    $right[] = $this->vetor[$i];
                }
            }
            return array_merge(simple_quick_sort($left), array($pivot), simple_quick_sort($right));
        }
    }
}
$unsorted = array(5,3,8,6,2,7);
echo implode(",",$unsorted)." @unsorted<br>";
$sorted = simple_quick_sort($unsorted);
echo implode(",",$sorted)." @sorted<br>";

?>