<?php
class Person {
    public $name = "Namrata";

    public function sayHello() {
        echo "Hello, I'm $this->name.<br>";
    }
}

class Student extends Person {
    public $marks = 90;

    public function showMarks() {
        echo "Marks: $this->marks";
    }
}

$s = new Student();
$s->sayHello();
$s->showMarks();
?>
