<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    
    echo "<h2>Submitted Data:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email";
    exit;
}
?>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
