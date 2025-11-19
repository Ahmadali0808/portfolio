<?php
require_once '../db.php';
echo '<a href="add_language.php">Add New Language</a><br><br>';
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Language</th>
    <th>Type</th>
    <th>Color</th>
    <th>Actions</th>
</tr>";
$sql = "SELECT * FROM languages";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['language']}</td>
            <td>{$row['type']}</td>
            <td><div style='width:30px;height:15px;background:{$row['color']}'></div></td>
            <td>
                <a href='edit_language.php?id={$row['id']}'>Edit</a> | 
                <a href='delete_language.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
            </td>
        </tr>";
    }
}
echo '<a href="../index.php"><button type="button">Back jm to Portfolio</button></a>';
echo "</table>";
$conn->close();
?> 
