<?php
// Specify the filename and path
$filename = "example.txt";

// Open the file in write mode
$file = fopen($filename, "w");

// Write some content to the file
fwrite($file, "This is a dynamically created file!");

// Close the file
fclose($file);

echo "File created successfully.";
?>
