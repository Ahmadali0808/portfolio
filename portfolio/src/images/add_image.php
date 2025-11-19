<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
</head>
<body>
    <h2>Add New Project</h2>
    <form action="add_image_process.php" method="post" enctype="multipart/form-data">
        <label for="title">Project Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="image">Project Image:</label><br>
        <input type="file" name="image" accept="image/*" required><br><br>

        <label for="link">Project Link (optional):</label><br>
        <input type="url" id="link" name="link"><br><br>

        <input type="submit" value="Upload Project">
    </form>
</body>
</html>