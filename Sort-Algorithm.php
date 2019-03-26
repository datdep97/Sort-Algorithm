<?php
    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }

    interface Sort_Algorithm{
        public function sorting($arr);
    }

    // Chi Dung work to Insertion Sort
    class InsertionSort implements Sort_Algorithm{
        public function sorting($arr){
            $total = count($arr);
            for ($i = 0; $i < $total; $i++)
            {
                $loop = $i;
                $current = $arr[$i];
                while($loop > 0 && ($arr[$loop - 1] > $current))
                {
                    $arr[$loop] = $arr[$loop - 1];
                    $loop -= 1;
                }
                $arr[$loop] = $current;
            }
            return print_r($arr);        
        }
    }
 
    $sortingSolution = new Sorting_Solution;
    echo $sortingSolution->sort(new InsertionSort(), [99,54,17,200,3]);
?>