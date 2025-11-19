<?php
require_once '../db.php';
$id = intval($_GET['id']);
$sql = "SELECT * FROM projects WHERE id=$id";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
?>
<form action="edit_image_process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Title: <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>"><br>
    Link: <input type="text" name="link" value="<?php echo htmlspecialchars($row['link']); ?>"><br>
    <button type="submit">Update</button>
</form>
<?php
} else {
    echo "Project not found.";
}
$conn->close();
?>