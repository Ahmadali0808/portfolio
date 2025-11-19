<?php 


    print_r($_POST);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($_FILES);
    $targetname = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], $targetname); 

    require_once '../db.php';
    $title = $_POST['title'];
    $image = $_FILES['image']["name"];
    $link = $_POST['link'];
    $sql = "INSERT INTO projects (title, image, link) VALUES ('$title', '$image', '$link')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: index.php");
    exit();