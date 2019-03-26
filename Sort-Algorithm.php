<?php
class Sorting_Solution {
    public function sort (Sort_Algorithm $sort_algorith, $arr) {
        return $sort_algorith->sorting($arr);
    }
}
interface Sort_Algorithm {
    public function sorting($arr);
}
class BubbleSort implements Sort_Algorithm {
    public function sorting ($arr) {
        $size = count($arr)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($arr[$k] < $arr[$j]) {
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                }
            }
        }
        return $arr;
    }
}
$abc = new Sorting_Solution();
print_r($abc->sort(new BubbleSort(), [2,1,3,8,6,9,4]));
?>
