class shellSort {

     function __construct() {
        for($z = 0; $z < 5; $z++) {
            $this->vetor[$z] = rand(0, 100);  	 
        }
    }
    
    public function printVetor() {
        return $this->vetor;
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

$a = new shellSort();
var_dump($a->printVetor());

$a->ordenar();
print_r($a->printVetor());