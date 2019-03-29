<?php
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
?>