<?php
//if 
$a=4;
if($a>3){
    echo "a is less";
   echo "<br>";
}

?>

<?php
// if else
$a =30;
$b=20;
$c=90;

if($a>$b && $a>$c )
{
    echo "a is greater number";
}
elseif($b>$a && $b>$c)
{
    echo " b is greater number ";
}
else {
    echo " c is greater number ";

}

echo "<br>"

?>


<?php
$marks = 85;
if ($marks >= 80) {
    echo "Grade A";
} elseif ($marks >= 60) {
    echo "Grade B";
} elseif ($marks >= 40) {
    echo "Grade C";
} else {
    echo "Fail";
}
echo "<br>"
?>


<?php
// SWITCH 

$choice = 2;
switch ($choice) {
    case 1:
        echo "Red";
        break;
    case 2:
        echo "Blue";
        break;
    case 3:
        echo "Green";
        break;
    default:
        echo "Black";
        break;
}
?>






