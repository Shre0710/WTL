<?php
if(!isset($_COOKIE["favcolor"]) || !isset($_COOKIE["favanimal"])) {
    setcookie("favcolor", "green", time() + 3600, "/");
    setcookie("favanimal", "cat", time() + 3600, "/");
    $message = "Cookies are set. Please reload the page to access their values.<br>";
} else {
    $message = "Cookies are already set.<br>";
}
?>

<!DOCTYPE html>
<html>
<body>
<?php
echo $message;

if(isset($_COOKIE["favcolor"]) && isset($_COOKIE["favanimal"])) {
    echo "Favorite color is " . $_COOKIE["favcolor"] . "<br>";
    echo "Favorite animal is " . $_COOKIE["favanimal"];
} else {
    echo "Cookies will be available after you reload the page.";
}
?>
</body>
</html>
