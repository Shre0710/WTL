<?php
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

$message = ""; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == 0) {
        $target = 'uploads/' . basename($_FILES['myfile']['name']);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target)) {
            $message = "File uploaded successfully!";
        } else {
            $message = "Error uploading file.";
        }
    } else {
        $message = "No file selected or upload error.";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile"><br>
    <input type="submit" value="Upload">
</form>

<?php
if ($message != "") {
    echo "<p>$message</p>";
}
?>
