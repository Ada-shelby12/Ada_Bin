<?php
include 'db.php';

$id = $_POST['id'];
$conn->query("DELETE FROM products WHERE id=$id");
$conn->close();

header("Location: index.html");
?>