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
                // Tìm vị trí phần tử nhỏ nhất
                $min = $i;
                for ($j = $i + 1; $j < $total; $j++){
                    if ($arr[$j] < $arr[$min]){
                        $min = $j;
                    }
                }
                // Sau khi có vị trí nhỏ nhất thì hoán vị
                // với vị trí thứ $i
                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
            }
            return $arr;
        }
    }

    $sortingSolution = new Sorting_Solution;
    print_r($sortingSolution->sort(new SelectionSort(), [5,3,1,4,2]));

?>