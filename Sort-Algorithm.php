
<?php
    require('interface/interface.php');
    require('select-sort/Select-Sort.php');
    require('bubble-sort/Bubble-Sort.php');
    require('insertion-sort/Insertion-Sort.php');
    // require('quick-sort/Quick-Sort.php');

    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }

    $sortingSolution = new Sorting_Solution;
    print_r($sortingSolution->sort(new SelectionSort(), [5,3,1,4,2]));
    print_r($sortingSolution->sort(new BubbleSort(), [12,34,32,11,67]));
    print_r($sortingSolution->sort(new InsertionSort(), [21,43,12,87,33]));
    // print_r($sortingSolution->sort(new QuickSort(), [10,2,27,19,97]));
    
?>