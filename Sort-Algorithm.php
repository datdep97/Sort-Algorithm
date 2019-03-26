<?php
class Sorting_Solution {
    public function sort(Sort_Algorithm $sort_algorithm, $arr) {
        return $sort_algorithm->sorting($arr);
    }
}
interface Sort_Algorithm {
    public function sorting($arr);
}
class BubbleSort implements Sort_Algorithm {
    public function sorting($arr) {
        $size = count($arr);
        for ($i = 0;$i < $size;$i++) {
            for ($j = 0;$j < $size - 1 - $i;$j++) {
                if ($arr[$j + 1] < $arr[$j]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }
}
$s = new Sorting_Solution();
print_r($s->sort(new BubbleSort(), [7, 9, -2, 8, 6, 4, 2]));
?>