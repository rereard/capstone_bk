<?php
require_once("../../connection.php");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM jadwal_periksa where id = " . $id);
if ($query) {
  $data = mysqli_fetch_assoc($query);
  echo json_encode($data);
}
