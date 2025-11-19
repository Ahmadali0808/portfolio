<?php
require_once '../db.php';
$id = intval($_GET['id']);
$sql = "DELETE FROM projects WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>