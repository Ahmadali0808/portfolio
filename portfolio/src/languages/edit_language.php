<?php
require_once '../db.php';
$id = intval($_GET['id']);
$sql = "SELECT * FROM languages WHERE id=$id";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
?>
<form action="edit_language_process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Language: <input type="text" name="language" value="<?php echo htmlspecialchars($row['language']); ?>"><br>
    Type: 
    <select name="type">
        <option value="programming" <?php if($row['type']=='programming') echo 'selected'; ?>>Programming</option>
        <option value="other" <?php if($row['type']=='other') echo 'selected'; ?>>Other</option>
    </select><br>
    Color: <input type="color" name="color" value="<?php echo htmlspecialchars($row['color']); ?>"><br>
    <button type="submit">Update</button>
</form>
<?php
} else {
    echo "Language not found.";
}
$conn->close();
?>