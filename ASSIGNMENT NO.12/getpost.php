<?php
function greet($name) {
    return "Hello, " . $name . "!";
   
}

$message = greet("Shreya");
echo $message; 
echo "<br>";

?>



<?php
$square = function($n) {
    return $n * $n;
};

echo $square(5); 
echo "<br>";

?>


<?php
class MathOps {
    public function multiply($a, $b) {
        return $a * $b;
    }
}

$obj = new MathOps();
echo $obj->multiply(4, 5);
echo "<br>";

?>


