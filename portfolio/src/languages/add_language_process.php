<?php
require_once '../db.php';
$language = $conn->real_escape_string($_POST['language']);
$type = $conn->real_escape_string($_POST['type']);
$color = $conn->real_escape_string($_POST['color']);
$sql = "INSERT INTO languages (language, type, color) VALUES ('$language', '$type', '$color')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>