<?php
    class Sorting_Solution{
        public function sort(Sort_Algorithm $sort_algorithm, $arr){
            return $sort_algorithm->sorting($arr);
        }
    }
    interface Sort_Algorithm{
        public function sorting($arr);
    }
    // Quicksort by duynv
    class Quicksort implements Sort_Algorithm{
        public function sorting($arr){
            $length = count($arr);
	
	if($length <= 1){
		return $arr;
	}
	else{
	
		$pivot = $arr[0];
		
		$left = $right = array();
		
		for($i = 1; $i < count($arr); $i++)
		{
			if($arr[$i] < $pivot){
				$left[] = $arr[$i];
			}
			else{
				$right[] = $arr[$i];
			}
		}
    		return array_merge($this->sorting($left), array($pivot), $this->sorting($right));
        }
    }
}
    $sx = new Sorting_Solution;
    print_r($sx-> sort(new Quicksort(), [12,6,4,98,67]));

