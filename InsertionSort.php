class InsertionSort{
  //atributos
  public $i;
  public $j;
  public $aux;
  public $vetor = array();

  function __construct() {
    for($z=0; $z<5; $z++){
      $this->vetor[$z] = rand(0, 100);  	 
    }
  }

  public function printVetor() {
    return $this->vetor;
  }

  public function ordena(){
    for($i=1; $i < sizeof($this->vetor); $i++) {
      $aux = $this->vetor[$i];
      $j = $i - 1;
      while (($j >= 0) && ($aux < $this->vetor[$j]))
      {
        $this->vetor[$j + 1] = $this->vetor[$j];
        $j--;
      }
      $this->vetor[$j+1] = $aux;
    }
  }      
}
  		
  		//--main--//
  		$a = new InsertionSort();
  		var_dump($a->printVetor());
  		$a->ordena();
  		print_r($a->printVetor());