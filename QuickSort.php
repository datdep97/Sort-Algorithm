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