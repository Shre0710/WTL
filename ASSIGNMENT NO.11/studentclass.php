<?php
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;
    public $rollno;

    function display() {
        echo "Name: $this->name<br>";
        echo "Roll_No : $this->rollno<br>";
        echo "Age: $this->age<br>";
        echo "Marks: $this->marks<br>";
        echo "CGPA: $this->cgpa<br>";
    }
}

$student1 = new Student();
$student1->name = "Shreya";
$student1->age = 20;
$student1->rollno = 52;
$student1->marks = 450;
$student1->cgpa = 8.7;

$student1->display();
?>
