<?php
    class Sorting_Solution
    {
        public $newsort =array();
        public $default;
        public function registersort(Sort_Algorithm $name,$numberA,$numberB)
        {
            array_push($this->newsort,array($name,$numberA,$numberB));
        }
        public function sort($arr)
        {
            $this->default = $this->newsort[0][0];
            for($i=0;$i < count($this->newsort);$i++)
            {
                if(count($arr) >= $this->newsort[$i][1] && count($arr) < $this->newsort[$i][2] )
                {
                    return ($this->newsort[$i][0])->sorting($arr);
                }
                else
                {
                    if($i==(count($this->newsort)-1))
                    return ($this->default)->sorting($arr);
                }
            }
        }
    }
    
    interface Sort_Algorithm {
        public function sorting($arr);
    }
    
    class SelectionSort implements Sort_Algorithm {
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

    class QuickSort implements Sort_Algorithm {
        public function sorting($arr) {
            $length = count($arr);
            if ($length <= 1) {
                return $arr;
            } else {
                $pivot = $arr[0];
                $left = $right = array();
                for ($i = 1;$i < count($arr);$i++) {
                    if ($arr[$i] < $pivot) {
                        $left[] = $arr[$i];
                    } else {
                        $right[] = $arr[$i];
                    }
                }
                return array_merge($this->sorting($left), array($pivot), $this->sorting($right));
            }
        }
    }

$sorting_solution = new Sorting_Solution();
$sorting_solution->registersort(new QuickSort,0,5);
$sorting_solution->registersort(new InsertionSort,6,11);
print_r($sorting_solution->sort([2, 1, 3, 8]));
print_r($sorting_solution->sort([2, 1, 3, 8, 6, 9, 4,11,15,12]));
print_r($sorting_solution->sort([2, 1, 3, 8, 6, 9, 4,11,15,12,19,21,25,46,67]));
?>

