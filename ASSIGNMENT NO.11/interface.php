<?php
interface Person {
    public function introduce();
}

class Student implements Person {
    public function introduce() {
        echo "Hello, I am Shreya.";
    }
}

$student = new Student();
$student->introduce();
?>
