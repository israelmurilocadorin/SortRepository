<?php
<<<<<<< HEAD
    class ShellSort{
=======
class ShellSort {
>>>>>>> bbc042cedc6fcd69336aabeaf48ee38f7a85ee08

        function __construct() {
            for($z = 0; $z < 5; $z++) {
                $this->vetor[$z] = rand(0, 100);  	 
            }

            function ordenar() {
                
                $x = round(count($this->vetor) / 2);

                while($x > 0) {
                    for($i = $x; $i < count($this->vetor); $i++) {
                        $temp = $this->vetor[$i];
                        $j = $i;
                        while($j >= $x && $this->vetor[$j-$x] > $temp) {
                            $this->vetor[$j] = $this->vetor[$j - $x];
                            $j -= $x;
                        }
                        $this->vetor[$j] = $temp;
                    }
                    $x = round($x / 2.2);
                }
                return $this->vetor;
            }
        }
    }

    $a = new ShellSort();
    print_r($a->printVetor());

<<<<<<< HEAD
    $a->ordenar();
    print_r($a->printVetor());
=======
$a->ordenar();
print_r($a->printVetor());
>>>>>>> bbc042cedc6fcd69336aabeaf48ee38f7a85ee08
?>
