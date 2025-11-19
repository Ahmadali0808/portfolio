<?php
require_once '../db.php';
$id = intval($_POST['id']);
$language = $conn->real_escape_string($_POST['language']);
$type = $conn->real_escape_string($_POST['type']);
$color = $conn->real_escape_string($_POST['color']);
$sql = "UPDATE languages SET language='$language', type='$type', color='$color' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>