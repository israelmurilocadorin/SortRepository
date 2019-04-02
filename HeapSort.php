<?php
 
function MaxHeapify(&$data, $heapSize, $index) {
    $left = ($index + 1) * 2 - 1;
    $right = ($index + 1) * 2;
    $largest = 0;
 
    if ($left < $heapSize && $data[$left] > $data[$index]) {
        $largest = $left;
    } else {
        $largest = $index;
    } 
    
    if ($right < $heapSize && $data[$right] > $data[$largest]) {
        $largest = $right;
    }
    
    if ($largest != $index) {
        $temp = $data[$index];
        $data[$index] = $data[$largest];
        $data[$largest] = $temp;
 
        MaxHeapify($data, $heapSize, $largest);
    }
}
 
function HeapSort(&$data, $count) {
    $heapSize = $count;
 
    for ($p = ($heapSize - 1) / 2; $p >= 0; $p--) {
        MaxHeapify($data, $heapSize, $p);
    }

    for ($i = $count - 1; $i > 0; $i--) {
        $temp = $data[$i];
        $data[$i] = $data[0];
        $data[0] = $temp;
  
        $heapSize--;
        MaxHeapify($data, $heapSize, 0);
    }
}
$array = array();
for($i = 0;$i < 10;$i++){
    array_push($array,$i);
    shuffle($array);
}
HeapSort($array,sizeof($array));
print_r($array);
?>