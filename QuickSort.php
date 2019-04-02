<?php
function QuickSort($array) {

    if(sizeof($array) <= 1) {
        return $array;
    }

    $pivot = $array[0];
    $left = $right = array();

    for($i=1;$i<sizeof($array);$i++) {
        if($array[$i]<$pivot) {
            $left[]= $array[$i];
        } else {
            $right[]= $array[$i];
        }
    }
    return array_merge( QuickSort($left), array($pivot), QuickSort($right) );
}
$arr = array(3,5,1,2,8,7,6,9,4);
echo implode(',', QuickSort($arr));
?>