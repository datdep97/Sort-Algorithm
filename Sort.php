
	<?php
	    class Sorting_Solution{
	        public function sort(Sort_Algorithm $sort_algorithm, $arrs){
	            return $sort_algorithm->sorting($arrs);
	        }
	    }
	    interface Sort_Algorithm{
	        public function sorting($arrs);
	    }
	    class Quick_Sort implements Sort_Algorithm{
	        public function sorting($arrs){
	        	$leght = count($arrs);
	        	if ($leght <= 1) {
	        	         return $arrs;             
	  					} else{
	  						$left = array();
	  						$right = array();
	  						$key = $arrs[0];
	  						for ($i=1; $i < count($arrs); $i++) { 
	  							if ($arrs[$i] <= $key) {
	  								$left[] = $arrs[$i];
	  							}else{
	  								$right[] = $arrs[$i];
	  							}
	  						}
	  					
	  					return array_merge($this->sorting($left),array($key),$this->sorting($right));
 					 }
				}
	    $sortingSolution = new Sorting_Solution;
	    print_r($sortingSolution->sort(new Quick_Sort(),array(7,9,8,1,5,3,2,6)));
	?>
