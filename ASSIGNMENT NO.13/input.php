<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <label for="operation">Select operation:</label>
        <select name="operation" id="operation" required>
            <option value="lines">Count Lines</option>
            <option value="characters">Count Characters</option>
            <option value="content">Display Content</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit']) && isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $filePath = $_FILES['file']['tmp_name'];
        $operation = $_POST['operation'];

        if (file_exists($filePath)) {
            $fileContent = file_get_contents($filePath);

            if ($operation === 'lines') {
                echo "<p>Number of lines: " . count(file($filePath)) . "</p>";
            } elseif ($operation === 'characters') {
                echo "<p>Number of characters: " . strlen($fileContent) . "</p>";
            } elseif ($operation === 'content') {
                echo "<h3>File Content:</h3><pre>" . htmlspecialchars($fileContent) . "</pre>";
            } else {
                echo "<p>Invalid operation selected.</p>";
            }
        } else {
            echo "<p>File does not exist.</p>";
        }
    }
    ?>
</body>
</html>