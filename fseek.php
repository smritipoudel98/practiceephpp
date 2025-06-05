<?php
echo "<pre>";

// Open the file in read mode
$file = fopen("sample.txt", "r");

// Read the first line
echo "First Read: " . fgets($file);

// Move the pointer back to the beginning
fseek($file, 0);

// Read the first line again
echo "Second Read (after fseek): " . fgets($file);

// Close the file
fclose($file);

echo "</pre>";
?>