

<?php

//sTATIC

class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();
echo Counter::$count; 
echo "<br>";
echo "<br>";

?>





<?php

//INTERFACE

interface Charger {
    public function charge(); 
}

class Phone implements Charger {
    public function charge() {
        echo "Phone is charging via USB\n";
    }
}

class Laptop implements Charger {
    public function charge() {
        echo "Laptop is charging via Type-C\n";
    }
}

$phone = new Phone();
$laptop = new Laptop();

$phone->charge();  
$laptop->charge(); 

echo "<br>";
echo "<br>";

?>



<?php
// inheritance

class Vehicle {
    public $wheels;

    public function start() {
        echo "Engine started. Ready to go!\n";
    }
}

class Car extends Vehicle {
    public $doors;

    public function honk() {
        echo "Beep beep!\n";
    }
}

$myCar = new Car();
$myCar->wheels = 4;
$myCar->doors = 4;   

$myCar->start();  
$myCar->honk();  

echo "<br>";
echo "<br>";


?>




<?php
class Animal {
    public function makeSound() {
        echo "Generic animal sound<br>";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!<br>";
    }
}

$animals = [new Animal(), new Dog(), new Cat()];

foreach ($animals as $a) {
    $a->makeSound();
}

echo"<br>";
?>




<?php

//abstact class

abstract class Animal {
    abstract public function sound();
}

class Dog extends Animal {
    public function sound() {
        echo "Bark!\n";
    }
}

$dog = new Dog();
$dog->sound(); 
?>
