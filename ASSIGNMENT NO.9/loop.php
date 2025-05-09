
<?php
for($x=0; $x<=5; $x++)
{
    echo "The number is: $x";
    echo "<br>";
}

echo "<br>";

?>


<?php
$x = 0;
while($x <= 5)
{
    echo "the number is: $x <br>";
    $x++;
}
echo "<br>";


?>



<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    default:
        echo "Weekend";
        echo"<br>";
}
?>


<?php
$temperature = 22;

if ($temperature > 30) {
    echo "Hot";
} elseif ($temperature > 20) {
    echo "Warm";
} elseif ($temperature > 10) {
    echo "Mild";
} elseif ($temperature > 0) {
    echo "Cool";
} else {
    echo "Freezing";
}
?>



