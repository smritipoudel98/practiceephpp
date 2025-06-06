<?php
require_once "database.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if form was submitted
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
}

// Upload the file if it's valid
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";

        // Save the file path to the database
        $sql = "INSERT INTO photo (image_path) VALUES ('$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "Image path saved to database.<br>";
        } else {
            echo "Error: " . $conn->error;
        }

        // Show the image on the browser
        echo "<br><img src='$target_file' width='300' alt='Uploaded Image'>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>