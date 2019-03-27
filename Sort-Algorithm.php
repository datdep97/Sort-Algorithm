<?php
    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }

    interface Sort_Algorithm{
        public function sorting($arr);
    }


    //Hai Long dang làm ve thuat toan sap xep
    class Insertionsort implements Sort_Algorithm
    {
        public function sorting($arr)
        {
            for($i=1;$i<count($arr);$i++)
            {
            $j = $i-1;
            $t = $arr[$i];
            while ($j>=0&&($t < $arr[$j])) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $t;
            }
            return $arr;
        }
    }
    class Quicksort implements Sort_Algorithm
    {
        function sorting($arr)
        {
            if(count($arr)<2)
            {
                return $arr;
            }
            else
            {

                $le = $ri = array();
                $pivol = array_shift($arr)
                foreach($arr as $val)
                {
                    if($val > $pivol)
                    {
                        $ri[] = $val;
                    }
                    else
                    {
                        $le[] = $val;
                    }
                }
                return array_merge($this->sorting($le),array($pivol),$this->sorting($ri));
                
            }
        }
    }
    $s = new Sorting_Solution;
    print_r($s->sort(new Quicksort(), [10,-30,84,28,50,11,1]));

?>
