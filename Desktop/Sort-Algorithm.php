<?php
   class Sorting_Solution {
       public function sort($arr) {
        foreach (get_declared_classes() as $className) {
            if (in_array('Sort_Algorithm', class_implements($className))) {
                if($className::canHandle($arr)) {
                    print_r($className::sorting($arr));
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
           if (sizeof($limit) > 0 & sizeof($limit)  < 10) {
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
       
   class SelectionSort implements Sort_Algorithm {
    public function canHandle($limit) {
        if (sizeof($limit) > 10 & sizeof($limit)  < 15) {
            return true;
        } else
            return false;
    }
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
    public function canHandle($limit) {
        if (sizeof($limit) > 15 & sizeof($limit)  < 20) {
            return true;
        } else
            return false;
    }
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
        return $arr;
    }
}

$sorting_solution = new Sorting_Solution();
$sorting_solution->sort([2, 1, 3, 8, 6, 9, 4]);
?>