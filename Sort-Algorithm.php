<?php
    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }

    interface Sort_Algorithm{
        public function sorting($arr);
    }


    //Kim viet anh dang làm ve thuat toan sap xep chon.
    class Slectionsort implements Sort_Algorithm{
        public function sorting($arr){
            
        }
    }

    $sortingSolution = new Sorting_Solution;
    echo $sortingSolution->sort(new Slectionsort(), [1,2,3,4,5]);

?>