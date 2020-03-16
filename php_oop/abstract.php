<?php 
// use App\Models;
// abstract class A_App {
//     public $name = 'App Name';
//     public function getName()
//     {
//         return $this->name;
//     }
//     abstract public function getAge();
// }
// class App extends A_App {
//     public function getAges(int $num){
//         return $num;
//     }
//      public function getAge(){}

//         public function getProducts(array $products){
//             return $products;
//         }
// }
// $app = new App();
// // echo $app->getName();

// // echo $app->getAges('my age is 100');
//  $app->getProducts(['coc', 'me']);

 //1 primitive
 // 2 reference 
 // 3 pointer 

//  class App {
//      public $name = 'Thanh';
//  }

//  $app1 = new App(); // Reference

//  $app1->name = 'Thanh 1';

//  $app2 = $app1;


//  $app2->name = 'Toan';

// //  echo $app1->name;

// $app3 = 'Appp 3'; /// -> primitive

// $app4 = $app3;

// $app4 = 'IM app 4';

// echo $app3;

trait TApp {
    public function getTApp()
    {
        return 'TApp';
    }
}
trait TApp1 {
    use TApp;
    public function getTApp1()
    {
        return 'TApp 1';
    }
}

class App {
    public function getApp(){
        return 'APP';
    }
}

class MyApp extends App {

    use TApp1;
}

$app = new MyApp();
echo $app->getApp(); echo "<br/>";
echo $app->getTApp1();
echo $app->getTApp();

// $xxx = new TApp();
// echo $xxx->getTApp();