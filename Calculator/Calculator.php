<?php

interface Tool {
    public function setA($int);
    public function setB($int);
}

class Calc implements Tool {
    private $a; 
    private $b;
    private $kq;
    
    public function setA($int) {
        $this->a = (int) $int;
    }
    
    public function setB($int) {
        $this->b = (int) $int;
    }
    
    public function add(){
        return $this->kq = $this->a + $this->b; 
    }
    
    public function sub(){
        return $this->kq = $this->a - $this->b; 
    }
    
    public function mul(){
        return $this->kq = $this->a * $this->b; 
    }
    
    public function div(){
        if ($this->b == 0) {
            return 'UNKNOWN';
        }
        else {
            return $this->kq = $this->a / $this->b; 
        }
    }
}
$calc = new Calc();
$calc -> setA(6);
$calc -> setB(0);
echo 'KQ: ' . $calc->add()."<br>";
echo 'KQ: ' . $calc->sub()."<br>";
echo 'KQ: ' . $calc->mul()."<br>";
echo 'KQ: ' . $calc->div();
