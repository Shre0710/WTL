<?php
session_start();
$_SESSION["favcolor"] = "blue";
setcookie("user", "shreya", time() + 3600, "/");
echo "Session value: " . $_SESSION["favcolor"] . "<br>";
if(isset($_COOKIE["user"])) {
    echo "Cookie value: " . $_COOKIE["user"];
} else {
    echo "Cookie is not set!";
}
?>
