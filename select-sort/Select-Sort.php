<?php
class SelectionSort implements Sort_Algorithm{
    public function sorting($arr){
        $total = count($arr);
        for($i = 0; $i < $total; $i++){
            //Tìm số bé nhẩt                
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
        return $arr;
    }
}
$sortingSolution = new Sorting_Solution;

?>