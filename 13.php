<!DOCTYPE html>
<html>
<head>
    <title>Upload the File</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="image">Select an image:</label>
        <input type="file" name="image" id="image" required>
        <input type="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
        echo "File Name: " . htmlspecialchars($_FILES['image']['name']) . "<br>";
        echo "File Size: " . $_FILES['image']['size'] . " bytes<br>";
        echo "File Type: " . htmlspecialchars($_FILES['image']['type']) . "<br>";
        echo "<br>Success: File uploaded.";
    }
    ?>
</body>
</html>
