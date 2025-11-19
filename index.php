<?php 

require "./Product.php";
// require "./User.php";


// $laptop = new Product("Laptop");
// // $laptop->name = "Laptop";
// var_dump($laptop->getName());

// $mobile = new Product("Mobile");
// // $mobile->name = "Mobile";
// var_dump($mobile->getName());

// $p1 = new Product("x1");
// $p2 = new Product("x2");

// var_dump($p1->getName(), $p2->getName());


// Is a 
// Eproduct is a Product 

// $myebook = new EProduct("My Ebook");
// $myebook->setLink("http;s;//sdfdjf");

// $mobile = new PhysicalProduct("Appple iphone 15");
// $mobile->setWeight(120);

// abstract class Vehicle {
//     public function test() {
//         return "test";
//     }

//     abstract function drive();
// }

// class Car extends Vehicle {
//     public function drive() {
//         echo "Driving...";
//     }
// }

// class Bus extends Vehicle {
//     public function drive() {
        
//     }
// }

// $t = new Car();
// var_dump($t->test());

// $t->drive();


// interface A {
//     public function test();
// }

// class B implements A {
//     public function test() {
//         var_dump("Testing");
//     }
// }


// function testing(A $a) {
//     $a->test();
// }


// class C implements A {
//     public function test() {
//         var_dump("Testing with C");
//     }
// }
// testing(new C());


interface Mailer {
    public function send();
}

class Gmail implements Mailer {
    public function send () {
        // ...

        echo "Sending with Gmail";
    }
}

function send(Mailer $mailer) {
    $mailer->send();
}


// mock
class FakeMailer implements Mailer {
    public function send() {
        echo "Fake mail sent";
    }
}

// send(new Gmail());

send(new FakeMailer());