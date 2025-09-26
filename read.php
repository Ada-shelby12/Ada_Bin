<?php
include 'db.php';

$result = $conn->query("SELECT * FROM products");

echo "<table><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['price']}</td>
    <td>{$row['quantity']}</td>
    <td>
      <form method='POST' action='delete.php' style='display:inline'>
        <input type='hidden' name='id' value='{$row['id']}' />
        <button type='submit'>Delete</button>
      </form>
    </td>
  </tr>";
}
echo "</table>";

$conn->close();
?>