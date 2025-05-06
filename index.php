<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Student List</h2>
<a href="add.php">Add Student</a>
<table border="1">
    <tr><th>ID</th><th>Name</th><th>Age</th><th>Action</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['age']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>