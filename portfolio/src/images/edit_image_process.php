<?php
require_once '../db.php';
$id = intval($_POST['id']);
$title = $conn->real_escape_string($_POST['title']);
$link = $conn->real_escape_string($_POST['link']);
$sql = "UPDATE projects SET title='$title', link='$link' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>