
<?php
//SIMPLE ARRAY
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);
echo "<br>" ;
echo "<br>" ;

?>



<?php
//INDEX 
$name = array("shreya", "tanya", "riya");
echo "First name: " .  $name[0] . "<br>";
echo "Second name: " . $name[1] . "<br>";
echo "Third name: " . $name[2] . "<br>";
echo "<br>";
?>



<?php
//COUNT IN ARRAY
echo "<br>";
$name = array("shreya", "tanya", "riya", "trupti");
echo count($name);
echo "<br>";
?>

<?php
//SORT
echo "<br>";
$name = array("shreya", "tanya", "riya", "trupti" , "shreyash");
sort($name);
print_r($name);
echo "<br>";
?>


<?php
// SEARCH INDEX 
echo "<br>";
$fruits = array("Apple", "Banana", "Cherry",);
echo "the index of fruit is : ";
echo array_search("Cherry", $fruits);
echo "<br>";
?>


<?php

echo "<br>";
$colors = array("Red", "Green");
array_push($colors, "Blue", "Yellow", "Purple");
print_r($colors);
echo "<br>";

?>


<?php
echo "<br>";
$colors = array("Red", "Green", "Blue", "Yellow");
echo "pop element: ";
array_pop($colors);
print_r($colors);
?>


<?php
//INSERT AT SPECIFIC INDEX
$str = "Hello";
echo substr($str, 1, 3); 

$arr = [1, 2, 3, 4];
print_r(array_slice($arr, 1, 2)); 

?>