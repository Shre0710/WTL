
<?php
if (isset($_GET['username'])) {
    echo "<h2>User Details</h2>";
    echo "Name: " . htmlspecialchars($_GET['username']) . "<br>";
    echo "Phone: " . htmlspecialchars($_GET['phone'] ?? 'Not provided') . "<br>";
    echo "College: " . htmlspecialchars($_GET['college'] ?? 'Not provided') . "<br>";
    echo "Course: " . htmlspecialchars($_GET['course'] ?? 'Not provided') . "<br>";
    echo "<br><a href='?'>Go Back</a>";
    exit;
}
?>

<form method="GET">
    Name: <input type="text" name="username" required><br><br>
    Phone: <input type="text" name="phone"><br><br>
    College: <input type="text" name="college"><br><br>
    Course: <input type="text" name="course"><br><br>
    <input type="submit" value="Submit">
</form>
