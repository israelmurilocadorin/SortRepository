<?php
$arr = array( 6,1,3,7,5,2,3,4,45,5,4,75,8,6,78,7980890,2,4,2,432,5,34,5634,34,5); 
echo "<br>".implode(',',$arr)."<br>";
$arr=mergesort($arr);
echo implode(',',$arr);
 
function mergesort($numlist) {
    if(count($numlist) == 1 ) {
        return $numlist;
    }

    $mid = count($numlist) / 2;
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);
 
    $left = mergesort($left);
    $right = mergesort($right);
     
    return merge($left, $right);
}
 
function merge($left, $right) {
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
 
    while($leftIndex<count($left) && $rightIndex<count($right)) {
        if($left[$leftIndex]>$right[$rightIndex]) {
            $result[]=$right[$rightIndex];
            $rightIndex++;
        } else {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    
    while($leftIndex<count($left)) {
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }

    while($rightIndex<count($right)) {
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}
?>