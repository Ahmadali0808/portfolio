<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once '../db.php';
$sql = "SELECT * FROM projects";   
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>title</th>
                <th>image</th>
                <th>link</th>
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["title"] . "</td>
                <td><a href='data/" . $row["image"] . "'>" . $row["image"] . "</a></td>
                <td>" . $row["link"] . "</td>
                <td>
                    <a href='edit_image.php?id=" . $row["id"] . "'>Edit</a> | 
                    <a href='delete_image.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
    <a href="add_image.php">Add New Project</a>
    <a href="../index.php">Go to Portfolio</a>
</body>
</html>