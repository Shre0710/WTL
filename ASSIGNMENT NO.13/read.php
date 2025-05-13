<!-- Reading a file -->
<?php
    $filename = 'example.txt';

    if (file_exists($filename)) {

        $file = fopen($filename, "r"); 

        $content = fread($file, filesize($filename)); 
        fclose($file);

        
        echo ($content);

    } else {
        echo "File does not exist.";
    }
?>