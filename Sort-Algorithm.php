<?php
   class Sorting_Solution {
     public function register(Sort_Algorithm $sort_algorithm) {
       $this->sort_algorithm = $sort_algorithm;
     }
     public function sort($arr) {
       $size = count($arr);
       if($this->sort_algorithm->canHandle($size)){
         print_r($this->sort_algorithm->sorting($arr));
       } else
       throw new Exception('Exceeding the permitted limits!');
     }
   }

   interface Sort_Algorithm {
       public function canHandle($limit);
       public function sorting($arr);
   }

   class BubbleSort implements Sort_Algorithm {
       public function canHandle($limit) {
           if ($limit > 0 && $limit  < 10) {
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
           if ($limit > 10 && $limit  < 15) {
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
           if ($limit > 15 && $limit  < 20) {
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

$ss = new Sorting_Solution();
$ss->register(new BubbleSort);
$ss->register(new SelectionSort);
$ss->register(new InsertionSort);
try {
    $ss->sort([2, 1, 3, 8, 6, 9, 41, 3, 8, 6, 9, 41, 3, 8, 6, 9, 41, 3, 8, 6, 9, 4]);
} catch(Exception $e) {
  echo 'Warning: ' .$e->getMessage();
}

?>
