<?php
class Sorting_Solution {
    public function sort(Sort_Algorithm $sort_algorith, $arr) {
        return $sort_algorith->sorting($arr);
    }
}
interface Sort_Algorithm {
    public function sorting($arr);
}
class BubbleSort implements Sort_Algorithm {
    public function sorting($arr) {
        $size = count($arr) - 1;
        for ($i = 0;$i < $size;$i++) {
            for ($j = 0;$j < $size - $i;$j++) {
                $k = $j + 1;
                if ($arr[$k] < $arr[$j]) {
                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                }
            }
        }
        return $arr;
    }
}
class SelectionSort implements Sort_Algorithm {
    public function sorting($arr) {
        $total = count($arr);
        for ($i = 0;$i < $total;$i++) {
            $min = $i;
            for ($j = $i + 1;$j < $total;$j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        return $arr;
    }
}
class InsertionSort implements Sort_Algorithm {
    public function sorting($arr) {
        $total = count($arr);
        for ($i = 0;$i < $total;$i++) {
            $loop = $i;
            $current = $arr[$i];
            while ($loop > 0 && ($arr[$loop - 1] > $current)) {
                $arr[$loop] = $arr[$loop - 1];
                $loop-= 1;
            }
            $arr[$loop] = $current;
        }
        return print_r($arr);
    }
}
// class QuickSort implements Sort_Algorithm {
//     public function sorting($arr) {
//         $length = count($arr);
//         if ($length <= 1) {
//             return $arr;
//         } else {
//             $pivot = $arr[0];
//             $left = $right = array();
//             for ($i = 1;$i < count($arr);$i++) {
//                 if ($arr[$i] < $pivot) {
//                     $left[] = $arr[$i];
//                 } else {
//                     $right[] = $arr[$i];
//                 }
//             }
//             return array_merge($this->sorting($left), array($pivot), $this->sorting($right));
//         }
//     }
// }
$sorting_solution = new Sorting_Solution();
print_r($sorting_solution->sort(new BubbleSort(), [2, 1, 3, 8, 6, 9, 4]));
print_r($sorting_solution->sort(new SelectionSort(), [2, 1, 3, 8, 6, 9, 4]));
// print_r($sorting_solution->sort(new QuickSort(), [2, 1, 3, 8, 6, 9, 4]));
print_r($sorting_solution->sort(new InsertionSort(), [2, 1, 3, 8, 6, 9, 4]));
?>