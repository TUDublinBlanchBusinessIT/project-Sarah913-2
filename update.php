<?php
include("dbcon.php");

$sql = "UPDATE MyTable SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn,$sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
?>