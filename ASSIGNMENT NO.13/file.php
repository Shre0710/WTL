<?php
$filename = "example.txt"; 
$content = "Hello, this is a sample file content.";

$file = fopen($filename, "w");

if ($file) {
    fwrite($file, $content); 
    fclose($file); 
    echo "File created and content written successfully.";
} else {
    echo "Failed to create the file.";
}
?>
