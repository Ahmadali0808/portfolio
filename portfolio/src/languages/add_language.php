<?php
// You can add PHP code here if needed
?>
<form action="add_language_process.php" method="POST">
    Language: <input type="text" name="language" required><br>
    Type: 
    <select name="type">
        <option value="programming">Programming</option>
        <option value="other">Other</option>
    </select><br>
    Color: <input type="color" name="color" value="#cccccc"><br>
    <button type="submit">Add Language</button>
</form>
<br>
<a href="../index.php"><button type="button">Back to Portfolio</button></a>