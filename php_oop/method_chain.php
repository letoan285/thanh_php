<?php 

class Bill {
    public $mangoPrice = 20000;
    public $orangePrice = 25000;
    public $priceApple = 55000;
    public $bill = 0;
    public $me  = 1;
    public function __construct()
    {
        $this->me = $this;
    }

    public function getMango($qty){
        //  $qty*$this->$mangoPrice;
        $this->bill += $qty*$this->mangoPrice;
         return $this;

    }
    public function getOranage($qty){
        $this->bill += $qty*$this->orangePrice;
        return $this;
    }
    public function getApple($qty){
        $this->bill += $qty*$this->priceApple;
        return $this;
    }
    public function getMe(){
        return 'My name is Thanh';
    }
}

/// 5, 7, 12 

// $total = getMan(5)->getoragn(7)->getApple(12)->bill;

$bill = new Bill();
$myBill =  $bill->getMango(5)->getOranage(7)->getApple(12)->bill;
echo $myBill;

// var_dump($me->getMe());