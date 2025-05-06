<?php
include 'db.php';
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $conn->query("UPDATE students SET name='$name', age='$age' WHERE id=$id");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
<h2>Edit Student</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $student['name']; ?>" required><br>
    Age: <input type="number" name="age" value="<?= $student['age']; ?>" required><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>
</body>
</html>