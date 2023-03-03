<?php
function select_user($id)
{
  require("M_db.php");
  $conn=PDOconn();
  $sql = "SELECT * FROM user WHERE id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  
  return $stmt;
}
?>