<?php 
 // public, protected, private

 $name = 'ouhohi';
 function getB(){
     return 'BBB';
 }
 interface IApp {
    //  public $name ='';
     const NAME = 'gaegaega';
     public function getNames();
 }


class App1 {
    private $aa1 = 'APP!';
}



 class App extends App1 implements IApp {
    public $name = 'class';
    // private $aa1 = 'APP!';
    public static $age = 99;
    public function getNames(){}

    public function getName(){
        // $name = 'function';
        return App::$age;
    }
    public function demo()
    {
        
        return $this->aa1;
    }

 }

$app = new App();
echo $app->demo();
echo App::NAME;

// echo App::demo();
