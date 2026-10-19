<?php
require_once '../db.php';
$image = basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $image);

$title = $conn->real_escape_string($_POST['title']);
$link = $conn->real_escape_string($_POST['link']);
$image = $conn->real_escape_string($image);
$sql = "INSERT INTO projects (title, image, link) VALUES ('$title', '$image', '$link')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
