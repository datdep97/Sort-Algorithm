<?php
    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }

    interface Sort_Algorithm{
        public function sorting($arr);
    }


    //viet anh dang làm ve thuat toan sap xep chon.
    class SelectionSort implements Sort_Algorithm{
        public function sorting($arr){
            $total = count($arr);
            for($i = 0; $i < $total; $i++){
                $min = $i;
                for ($j = $i + 1; $j < $total; $j++){
                    if ($arr[$j] < $arr[$min]){
                        $min = $j;
                    }
                }
                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
            }
            return print_r($arr);
        }
    }

    $sortingSolution = new Sorting_Solution;
    echo $sortingSolution->sort(new Selectionsort(), [5,3,1,4,2]);

?>