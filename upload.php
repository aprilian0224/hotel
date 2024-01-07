<?php
session_start(); // Pastikan memulai sesi sebelum menggunakan $_SESSION

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $file_path = "uploads/" . basename($_FILES["file"]["name"]);

    move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "namadatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reports (judul, deskripsi, file_path) VALUES ('$judul', '$deskripsi', '$file_path')";

    if ($conn->query($sql) === TRUE) {
        echo "File uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!-- Form HTML untuk Upload File -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required><br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" required></textarea><br>

        <label for="file">File:</label>
        <input type="file" name="file" accept=".pdf, .doc, .docx" required><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>