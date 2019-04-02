<?php
   class Sorting_Solution {
       public function sort($arr) {
        foreach (get_declared_classes() as $className) {
            if (in_array('Sort_Algorithm', class_implements($className))) {
                if($className::canHandle($arr)) {
                    print_r($className::sorting($arr));
                }else{
                    throw new Exception('exceeding the permitted limits');
                }
            }
        }
       }
   }

   interface Sort_Algorithm {
       public function canHandle($limit);
       public function sorting($arr);
   }

   class BubbleSort implements Sort_Algorithm {
       public function canHandle($limit) {
           if (sizeof($limit) < 10) {
               return true;
           } else
               return false;
       }
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

$sorting_solution = new Sorting_Solution();
$sorting_solution->sort([2, 1, 3, 8, 6, 9, 4]);
?>