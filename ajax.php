<?php
// good idea to turn on errors during development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ini_set('max_execution_time', 300);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
    echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
    echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
    echo "<b>Error:</b> " . $_FILES["file"]["error"] . "<br>";

    $sourcePath = $_FILES['file']['tmp_name'];          // Storing source path of the file in a variable
    $targetPath = "ajax/" . $_FILES['file']['name'];    // Target path where file is to be stored
    if (move_uploaded_file($sourcePath, $targetPath)) { // Moving Uploaded file
        echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
    } else {
        echo "<span id='success'>Image was not Uploaded</span><br/>";
    }
    exit;
}
?>